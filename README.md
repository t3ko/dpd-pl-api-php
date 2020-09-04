# dpd-pl-api-php
Klient API w języku PHP do komunikacji z następującymi web-serwisami firmy kurierskiej DPD:
- `PackageService` (rejestrowanie przesyłek, drukowanie etykiet i protokołów przekazania przesyłek kurierowi, zamawianie kuriera po odbiór przesyłki)
- `AppService` (obsługa zleceń odbioru przesyłek od osób trzecich)

TODO:
- `InfoService` (tracking przesyłek)

## Instalacja
Najprostszy sposób to instalacja za pomocą Composer-a (http://getcomposer.org).

Poprzez plik `composer.json`:
```json
{
    "require": {
        "t3ko/dpd-pl-api-php": "^0"
    }
}
```
lub z linii poleceń:
```bash
composer require t3ko/dpd-pl-api-php
```

Biblioteka korzysta z `httplug` jako abstrakcji klienta HTTP i nie zawiera żadnej domyślnej implementacji. 
Po stronie projektu, w którym jest umieszczona - leży obowiązek dostarczenia klienta HTTP zgodnego z PSR-18.
Więcej informacji tutaj: http://docs.php-http.org/en/latest/httplug/users.html

Jeśli Twój projekt zawiera już jakiegoś klienta HTTP wspieranego przez `httplug` (http://docs.php-http.org/en/latest/clients.html) wystarczy razem z biblioteką doinstalować odpowiedni adapter.

Np. dla `curl`:
```bash
composer require php-http/curl-client:^1 t3ko/dpd-pl-api-php
```

Jeśli natomiast nie używasz jeszcze żadnego kompatybilnego klienta HTTP w swoim kodzie, będzie konieczne zainstalowanie go razem z adapterem.

Np. `guzzle`:
```bash
composer require php-http/guzzle6-adapter:^1 guzzlehttp/guzzle:~6.0 t3ko/dpd-pl-api-php
```

## Użycie
### Sposób korzystania 
Aby poprawnie wysłać przesyłkę korzystając z API DPD należy przejść następujące, omówione szerzej w dalszej części,  kroki:
1. Zarejestrować przesyłkę/przesyłki (metoda `generatePackageNumbers()`)

   Do tej metody wysyłamy fizyczne dane paczek składajacych się na przesyłkę, dane nadawcy i odbiorcy, dodatkowych zamówionych usług (np. pobranie, gwarancja dostarczenia, itd.).
   W odpowiedzi otrzymujemy numery listów przewozowych przypisanych do każdej paczki.

2. Wygenerować etykiety dla paczek (metoda `generateLabels()`)

   Uzyskane w poprzednim kroku numery listów przewozowych przesłane do tej metody pozwolą w odpowiedzi uzyskać w odpowiedzi plik PDF z etykietami do umieszczenia na paczkach.
   
3. Wygenerować protokół przekazania paczek kurierowi (metoda `generateProtocol()`)

   Tak jak wyżej, do metody przekazujemy numery listów przewozowych paczek, które mają być wysłane wspólnie. W odpowiedzi API zwraca plik PDF z przygotowanym protokołem przekazania przesyłek kurierowi.
   
4. Sprawdzić dostępność godzinową kuriera w pożądanym dniu nadania (metoda `getCourierAvailability()`) 

   Ta metoda po przesłaniu kodu pocztowego miejsca z którego nadane zostaną przesyłki, zwróci przedziały czasowe dostępności kuriera odbierającego przesyłki na najbliższe kilka dni.
   
5. Zamówić odbiór przesyłek przez kuriera (TODO)

   Do tej metody przekazujemy dzień i przedział godzinowy wybrany z tych które zwróciła metoda wyżej, a także miejsce odbioru. W odpowiedzi uzyskujemy potwiedzenie przyjęcia zlecenia odbioru.
   Kurier odbiera paczki oznaczone etykietami wygenerowanymi w kroku 2., pokwitowując protokół przekazania wygenerowany w kroku 3.

Poza powyższymi podstawowymi metodami obsługi paczek, poniższa biblioteka umożliwia także:

* Zlecanie odbioru od osoby trzeciej
* Pobieranie listy puntów doręczenia (TODO)
* Śledzenie przesyłek (TODO)

### 0. Połączenie z API
Aby rozpocząć korzystanie z API wymagane są dane autentykacyjne składające się z trzech parametrów:
- nazwa użytkownika
- hasło
- numer FID

Dane te uzyskuje się od swojego opiekuna klienta po podpisaniu umowy i zadeklarowaniu chęci korzystania z API.
Te same dane służą do autoryzacji we wszystkich trzech webserwisach wymienionych na początku tego dokumentu.

Korzystanie z API odbywa się poprzez obiekt klasy `T3ko\Dpd\Api` budowany jak poniżej:
```php
require_once __DIR__.'/vendor/autoload.php';

$login = 'testlogin';
$password = 'testpassword';
$fid = 12345;

$api = new \T3ko\Dpd\Api($login, $password, $fid);
```

Domyślnie biblioteka łączy się do endpointów produkcyjnych, ale dla większości usług API DPD udostępnia także endpointy testowe pozwalające na bezpieczne przetestowanie integracji własnego kodu z webserwisem. Aby włączyć ich użycie należy wywołać na obiekcie `Api` metodę `setSandboxMode`:
```php
$api->setSandboxMode(true);
```
Od tego momentu wszystkie żądania będą kierowane do endpointów testowych. Dla usług które nie udostępniają wersji testowej próba użycia w trybie `sandbox` zakończy się wyjątkiem `SandboxNotAvailableException`.

Testowe API wymaga osobnych danych logowania (dane te są przekazywane przez IT DPD razem z pakietem dokumentacji, po zgłoszeniu przez klienta chęci integracji API). **Próba zalogowania się produkcyjnymi danymi dostępowymi na endpoint testowy spowoduje błąd autentykacji.**

Aby wyłączyć tryb testowy można oczywiście użyć:
```php
$api->setSandboxMode(false);
```

### 1. Rejestracja przesyłki
#### GeneratePackageNumbersRequest

Nadawanie paczkom numerów listów przewozowych odbywa się za pomocą metody `generatePackageNumbers` przyjmującej jako parametr obiekt typu `GeneratePackageNumbersRequest`:
```php
use \T3ko\Dpd\Request\GeneratePackageNumbersRequest;

/** @var GeneratePackageNumbersRequest $request */
$response = $api->generatePackageNumbers($request);
```

Obiekt żądania jest budowany na podstawie danych przesyłki/przesyłek przekazywanych do metody fabrykujacej `fromPackage` lub `fromPackages` (dla żądania złożonego z wielu przesyłek jednocześnie):

```php
$singlePackageRequest = GeneratePackageNumbersRequest::fromPackage($package);
$multiplePackagesRequest = GeneratePackageNumbersRequest::fromPackages([$package1, $package2]);
```
#### Package
Encja używana do budowania powyższego requestu to obiekt typu `Package`, zawierający konfigurację przesyłki. Do jego budowy potrzeba co najmniej trzech danych - obiektu nadawcy `Sender`, obiektu odbiorcy `Receiver` i jednej lub więcej instancji klasy `Parcel` wyrażających fizyczne paczki, które składają sie na przesyłkę. Przykładkowy kod tworzący obiekt `Package` może wyglądać jak niżej:
```php
use T3ko\Dpd\Objects\Sender;
use T3ko\Dpd\Objects\Receiver;
use T3ko\Dpd\Objects\Parcel;
use T3ko\Dpd\Objects\Package;

$sender = new Sender(12345, 501100100, 'Jan Kowalski', 'Puławska 1', '02566', 'Warszawa', 'PL');
$receiver = new Receiver(605600600, 'Piotr Nowak', 'Kwiatowa 2', '60814', 'Poznań', 'PL');

$parcel = new Parcel(30, 30, 15, 1.5);

$package = new Package($sender, $receiver, [$parcel]);
```
Obiekty `Sender` i `Receiver` inicjalizuje się podobobnie, używając danych adresowych i obowiązkowo numeru telefonu. Poza tym do obiektu `Sender` przekazywany jest także numer FID używany do zalogownia (to API zakłada, że nadawcą paczki jest klient API):
```php
$sender = new Sender(
    $fid,          //numer FID
    $phone,        //telefon
    $name,         //imię i nazwisko
    $address,      //adres
    $postalCode,   //kod pocztowy
    $city,         //miasto
    $countryCode,  //kod kraju
    $company,      //nazwa firmy (opcjonalnie)
    $email         //email (opcjonalnie)
    );
    
$receiver = new Receiver(
    $phone,        //telefon
    $name,         //imię i nazwisko
    $address,      //adres
    $postalCode,   //kod pocztowy
    $city,         //miasto
    $countryCode,  //kod kraju
    $company,      //nazwa firmy (opcjonalnie)
    $email         //email (opcjonalnie)
    );
```
Obiekt `Parcel` jest natomiast budowany następująco:
```php
$parcel = new Parcel(
    $sizeX,          //szerokość w cm
    $sizeY,          //wysokość w cm
    $sizeZ,          //głębokość w cm
    $weight,         //masa w kg
    $reference,      //unikalna referencja paczki
    $contents,       //opis zawartości
    $customerNotes   //notatka dla kuriera
    );
```
#### GeneratePackageNumbersResponse
Metoda `generatePackageNumbers` zwraca w odpowiedzi obiekt typu `GeneratePackageNumbersResponse`:
```php
/** @var GeneratePackageNumbersResponse $response */
$response = $api->generatePackageNumbers($request);
```
Wewnątrz mamy dostęp do listy zarejestrowanych przesyłek - tablicy obiektów typu `RegisteredPackage`:
```php
/** @var RegisteredPackage[] $packages */
$packages = $response->getPackages()
```
A w każdej z przesyłek - listy zarejestrowanych paczek, z nadanymi numerami listów przewozowych:
```php
list($package) = $packages;

/** @var RegisteredParcel[] $parcels */
$parcels = $package->getParcels();
list($parcel) = $parcels;
 
$parcel->getWaybill(); //numer listu przewozowego, np. 0000092494467Q
```

### 2. Pobranie etykiet
"Wydruk" etykiet odbywa się przy użyciu metody `generateLabels` do której przekazujemy obiekt typu `GenerateLabelsRequest`:

```php
use \T3ko\Dpd\Request\GenerateLabelsRequest;

/** @var GenerateLabelsRequest $request */
$response = $api->generateLabels($request);
```

#### GenerateLabelsRequest
Obiekt żądania można skonstruować na trzy sposoby:

- przy użyciu numerów listów przewozowych wygenerowanych w kroku 1.:
```php
use \T3ko\Dpd\Request\GenerateLabelsRequest;

$request = GenerateLabelsRequest::fromWaybills(['0000092494467Q']);
```
- przy użyciu numerów identyfikatorów paczek nadanych przez DPD w kroku 1.:
```php
use \T3ko\Dpd\Request\GenerateLabelsRequest;

$parcelId = $parcel->getId();
$request = GenerateLabelsRequest::fromParcelIds([$parcelId]);
```
- lub, korzystając z pola `reference` paczek
```php
use \T3ko\Dpd\Request\GenerateLabelsRequest;

$parcelRef = $parcel->getReference();
$request = GenerateLabelsRequest::fromReferences([$parcelRef]);
```
(oczywiście tutaj trzeba pamiętać że pole `reference` to dowolny string który chcemy powiązać z paczką -
np. numer zamówienia do wysyłki itp. - wobec czego jeśli nie przekażemy żadnej wartości tego pola w kroku 1. gdy rejestrujemy
paczki - nie będzie można z niego skorzystać)

#### GenerateLabelsResponse
Po skonstruowaniu żadania i wysłaniu go do API metodą `generateLabels` uzyskamy w odpowiedzi obiekt typu
`GenerateLabelsResponse`:

```php
/** @var GenerateLabelsResponse $response */
$response = $api->generateLabels($request);
```
Wewnątrz mamy dostęp do pola `fileContent` zawierającego dane binarne pliku PDF z etykietą/etykietami.
W przykładzie poniżej przedstawiono zapis etykiety do pliku `etykieta.pdf`:

```php
$response = $api->generateLabels($request);

$fp = fopen('etykieta.pdf', 'wb');
fwrite($fp, $response->getFileContent());
fclose($fp)
```

### 3. Generowanie protokołu przekazania

Aby wygenerować protokół przekazania paczek kurierowi, używamy metody `generateProtocol`:

```php
use \T3ko\Dpd\Request\GenerateProtocolRequest;

/** @var GenerateProtocolRequest $request */
$response = $api->generateProtocol($request);
```
### GenerateProtocolRequest
Tworzenie obiektu żądania jest bliźniaczo podobne do przypadku generowania etykiet. Tutaj też możemy stworzyć obiekt na trzy sposoby,
korzystając z numerów listów przewozowych, identyfikatorów paczek lub referencji paczek:

```php
use \T3ko\Dpd\Request\GenerateProtocolRequest;

$request = GenerateProtocolRequest::fromWaybils([...]);
$request = GenerateProtocolRequest::fromParcelIds([...]);
$request = GenerateProtocolRequest::fromReferences([...]);
```

### GenerateProtocolResponse
Wysłanie tak skonstruowanego żądania do API da nam w odpowiedzi obiekt typu `GenerateProtocolResponse`, w którym do 
dyspozycji - znów - jest pole `fileContent` zawierające treść pliku PDF:

```php
/** @var GenerateLabelsResponse $response */
$response = $api->generateProtocol($request);

$response->getFileContent()); //treść pliku PDF z protokołem przekazania
```

### 4. Sprawdzenie godzin dostępności kuriera
DOC TODO

### 5. Zamówienie kuriera po odbiór przesyłek
DOC TODO

### 6. Zlecanie odbioru od osoby trzeciej
Korzystając z API `AppService` można wystawić żądanie odebrania przesyłki od osoby trzeciej. 
W tym celu należy utworzyć obiekt (lub obiekty) typu `Package` opisujące konfigurację przesyłki jak przy zwykłym nadawaniu,
pamiętając, że w polu `$sender` powinny znajdować się dane podmiotu faktycznie wydającego paczkę kurierowi, a nie zlecającego odbiór!

Poza tym, endpoint do zlecania odbioru akceptuje jedynie obiekty `Package`, w których zadeklarowano płatność przez stronę trzecią 
(rozumianą jako stronę zlecającą odbiór):
```php
$package->setPayerType(\T3ko\Dpd\Objects\Enum\PayerType::THIRD_PARTY());
```
oraz podano numer FID tego płatnika (czyli w praktyce ten sam, którego używamy do łączenia się z API):
```php
$package->setThirdPartyFid(123);
```

#### CollectionOrderRequest
Tak skonstruowany `Package` służy jako parametr do generowania obiektu `CollectionOrderRequest`:
```php
use \T3ko\Dpd\Request\CollectionOrderRequest;

$singlePackageRequest = CollectionOrderRequest::fromPackage($package);
$multiplePackagesRequest = CollectionOrderRequest::fromPackages([$package1, $package2]);
```

dzięki któremu możemy wywołać metodę API zlecającą odbiór - `collectionOrder()`:
```php
use \T3ko\Dpd\Request\CollectionOrderRequest;

/** @var CollectionOrderRequest $request */
$response = $api->collectionOrder($request);
```

#### CollectionOrderResponse
W odpowiedzi uzyskujemy obiekt typu `CollectionOrdersResponse`:
```php
/** @var CollectionOrderResponse $response */
$response = $api->collectionOrder($request);
```
zawierający listę informację o przesyłkach, które udało się zlecić, w postaci tablicy obiektów typu `CollectionOrderedPackage`:
```php
/** @var CollectionOrderedPackage[] $packages */
$packages = $response->getCollectionOrderedPackages();

list($package) = $packages;

$package->getPackageId();   //identyfikator przesyłki nadany przez DPD
$package->getReference();   //ewentualna referencja klienta nadana wiążąca paczkę z obiektem Package przesłanym w requeście
$package->getParcels();     //tablica obiektów typu CollectionOrderedParcel opisujących zlecona paczki tej przeysyłki
$package->getStatusInfo();  //status tego requestu
$package->getOrderNumber(); //numer zlecenia w systemie DPD
```

Natomiast w obiektach `CollectionOrderedParcel` pobranych z `$package->getParcels()` zapisany jest identyfikator paczki
nadawany przez DPD oraz numer listu przewozowego dla tej paczki:

```php
list($parcel) = $package->getParcels();

$parcel->getParcelId(); //identyfikator paczki nadany przez DPD
$parcel->getWaybill();  //numer listu przewozowego dla tej paczki
```

Składanie zlecenia odbioru przesyłki od osoby trzeciej w tym miejscu się kończy. Nie ma potrzeby drukowania etykiet i przekazywania
ich nadającemu lub zamawiania kuriera - to zadzieje się automatycznie po stronie DPD.



