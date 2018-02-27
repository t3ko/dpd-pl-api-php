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
DOC TODO
### 3. Generowanie protokołu przekazania
DOC TODO
### 4. Sprawdzenie godzin dostępności kuriera
DOC TODO
### 5. Zamówienie kuriera po odbiór przesyłek
DOC TODO
### Zlecanie odbioru od osoby trzeciej
DOC TODO