<?php

namespace T3ko\DpdTests\Request;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\Currency;
use T3ko\Dpd\Objects\Enum\GuaranteeType;
use T3ko\Dpd\Objects\Enum\PayerType;
use T3ko\Dpd\Objects\Enum\SelfCollectionReceiver;
use T3ko\Dpd\Objects\Package;
use T3ko\Dpd\Objects\Parcel;
use T3ko\Dpd\Objects\Receiver;
use T3ko\Dpd\Objects\Sender;
use T3ko\Dpd\Request\GeneratePackageNumbersRequest;
use T3ko\Dpd\Soap\Types\ServiceCarryInOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceCODOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceCUDOpenUMLeFV1;
use T3ko\Dpd\Soap\Types\ServiceDeclaredValueOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceDedicatedDeliveryOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceDpdPickupOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceDutyOpenUMLeFV2;
use T3ko\Dpd\Soap\Types\ServiceFlagOpenUMLF;
use T3ko\Dpd\Soap\Types\ServiceGuaranteeOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceInPersOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServicePalletOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServicePrivPersOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceRODOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceSelfColOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceTiresExportOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceTiresOpenUMLFeV1;

class GeneratePackageNumbersRequestTest extends TestCase
{
    public function testCreationFromPackage()
    {
        $parcel1 = new Parcel(1, 2, 3, 4.2, 'reference 1', 'contents 1', 'customer notes 1');
        $parcel2 = new Parcel(4, 5, 6, 8.4, 'reference 2', 'contents 2', 'customer notes 2');

        $sender = new Sender(
            42, 'Test phone S', 'Test name S', 'Test address S', 'Test postal code S', 'Test city S', 'Test country code S'
        );

        $receiver = new Receiver(
            'Test phone R', 'Test name R', 'Test address R', 'Test postal code R', 'Test city R', 'Test country code R'
        );

        $package = new Package(
            $sender, $receiver, [$parcel1, $parcel2]
        );

        $request = GeneratePackageNumbersRequest::fromPackage($package);
        $payload = $request->toPayload();

        self::assertNull($payload->getAuthData());
        self::assertEquals('PL', $payload->getLangCode());
        self::assertCount(1, $payload->getOpenUMLFe()->getPackages());
        list($requestPackage) = $payload->getOpenUMLFe()->getPackages();
        self::assertCount(2, $requestPackage->getParcels());
        self::assertEquals(PayerType::SENDER(), (string) $requestPackage->getPayerType());
        self::assertNull($requestPackage->getRef1());
        self::assertNull($requestPackage->getRef2());
        self::assertNull($requestPackage->getRef3());
        self::assertNull($requestPackage->getThirdPartyFID());
        self::assertNull($requestPackage->getServices()->getCarryIn());
        self::assertNull($requestPackage->getServices()->getCod());
        self::assertNull($requestPackage->getServices()->getCud());
        self::assertNull($requestPackage->getServices()->getDeclaredValue());
        self::assertNull($requestPackage->getServices()->getDedicatedDelivery());
        self::assertNull($requestPackage->getServices()->getDocumentsInternational());
        self::assertNull($requestPackage->getServices()->getDox());
        self::assertNull($requestPackage->getServices()->getDpdExpress());
        self::assertNull($requestPackage->getServices()->getDpdPickup());
        self::assertNull($requestPackage->getServices()->getDuty());
        self::assertNull($requestPackage->getServices()->getGuarantee());
        self::assertNull($requestPackage->getServices()->getInPers());
        self::assertNull($requestPackage->getServices()->getPallet());
        self::assertNull($requestPackage->getServices()->getPrivPers());
        self::assertNull($requestPackage->getServices()->getRod());
        self::assertNull($requestPackage->getServices()->getSelfCol());
        self::assertNull($requestPackage->getServices()->getTires());
        self::assertNull($requestPackage->getServices()->getTiresExport());

        $package
            ->setRef1('Test ref 1')
            ->setRef2('Test ref 2')
            ->setRef3('Test ref 3')
            ->setThirdPartyFid(42)
            ->setPayerType(PayerType::THIRD_PARTY())
            ->addCarryInService()
            ->addCODService(1.23, Currency::PLN())
            ->addCUDService()
            ->addDeclaredValueService(2.34, Currency::CHF())
            ->addDedicatedDeliveryService()
            ->addDocumentsInternationalService()
            ->addDoxService()
            ->addDpdExpressService()
            ->addDpdPickupService('Test pickup PUDO')
            ->addDutyService(3.45, Currency::EUR())
            ->addGuaranteeService(GuaranteeType::SATURDAY(), 'Test value')
            ->addInPersService()
            ->addPalletService()
            ->addRodService()
            ->addSelfColService(SelfCollectionReceiver::COMP())
            ->addPrivPersService()
            ->addTiresService()
            ->addTiresExportService();

        $request = GeneratePackageNumbersRequest::fromPackage($package);
        $payload = $request->toPayload();
        list($requestPackage) = $payload->getOpenUMLFe()->getPackages();

        self::assertEquals(PayerType::THIRD_PARTY(), (string) $requestPackage->getPayerType());
        self::assertEquals('Test ref 1', $requestPackage->getRef1());
        self::assertEquals('Test ref 2', $requestPackage->getRef2());
        self::assertEquals('Test ref 3', $requestPackage->getRef3());
        self::assertSame(42, $requestPackage->getThirdPartyFID());
        self::assertInstanceOf(ServiceCarryInOpenUMLFeV1::class, $requestPackage->getServices()->getCarryIn());
        self::assertInstanceOf(ServiceCODOpenUMLFeV1::class, $requestPackage->getServices()->getCod());
        self::assertEquals('1.23', $requestPackage->getServices()->getCod()->getAmount());
        self::assertEquals('PLN', $requestPackage->getServices()->getCod()->getCurrency());
        self::assertInstanceOf(ServiceCUDOpenUMLeFV1::class, $requestPackage->getServices()->getCud());
        self::assertInstanceOf(ServiceDeclaredValueOpenUMLFeV1::class, $requestPackage->getServices()->getDeclaredValue());
        self::assertEquals('2.34', $requestPackage->getServices()->getDeclaredValue()->getAmount());
        self::assertEquals('CHF', $requestPackage->getServices()->getDeclaredValue()->getCurrency());
        self::assertInstanceOf(ServiceDedicatedDeliveryOpenUMLFeV1::class, $requestPackage->getServices()->getDedicatedDelivery());
        self::assertInstanceOf(ServiceFlagOpenUMLF::class, $requestPackage->getServices()->getDocumentsInternational());
        self::assertInstanceOf(ServicePalletOpenUMLFeV1::class, $requestPackage->getServices()->getDox());
        self::assertInstanceOf(ServiceFlagOpenUMLF::class, $requestPackage->getServices()->getDpdExpress());
        self::assertInstanceOf(ServiceDpdPickupOpenUMLFeV1::class, $requestPackage->getServices()->getDpdPickup());
        self::assertEquals('Test pickup PUDO', $requestPackage->getServices()->getDpdPickup()->getPudo());
        self::assertInstanceOf(ServiceDutyOpenUMLeFV2::class, $requestPackage->getServices()->getDuty());
        self::assertEquals('3.45', $requestPackage->getServices()->getDuty()->getAmount());
        self::assertEquals('EUR', $requestPackage->getServices()->getDuty()->getCurrency());
        self::assertInstanceOf(ServiceGuaranteeOpenUMLFeV1::class, $requestPackage->getServices()->getGuarantee());
        self::assertEquals(GuaranteeType::SATURDAY(), (string) $requestPackage->getServices()->getGuarantee()->getType());
        self::assertEquals('Test value', $requestPackage->getServices()->getGuarantee()->getValue());
        self::assertInstanceOf(ServiceInPersOpenUMLFeV1::class, $requestPackage->getServices()->getInPers());
        self::assertInstanceOf(ServicePalletOpenUMLFeV1::class, $requestPackage->getServices()->getPallet());
        self::assertInstanceOf(ServicePrivPersOpenUMLFeV1::class, $requestPackage->getServices()->getPrivPers());
        self::assertInstanceOf(ServiceRODOpenUMLFeV1::class, $requestPackage->getServices()->getRod());
        self::assertInstanceOf(ServiceSelfColOpenUMLFeV1::class, $requestPackage->getServices()->getSelfCol());
        self::assertEquals(SelfCollectionReceiver::COMP(), (string) $requestPackage->getServices()->getSelfCol()->getReceiver());
        self::assertInstanceOf(ServiceSelfColOpenUMLFeV1::class, $requestPackage->getServices()->getSelfCol());
        self::assertInstanceOf(ServiceTiresOpenUMLFeV1::class, $requestPackage->getServices()->getTires());
        self::assertInstanceOf(ServiceTiresExportOpenUMLFeV1::class, $requestPackage->getServices()->getTiresExport());
    }

    public function testSenderReceiver()
    {
        $parcel1 = new Parcel(1, 2, 3, 4.2, 'reference 1', 'contents 1', 'customer notes 1');
        $parcel2 = new Parcel(4, 5, 6, 8.4, 'reference 2', 'contents 2', 'customer notes 2');

        $sender = new Sender(
            42, 'Test phone S', 'Test name S', 'Test address S', 'Test postal code S', 'Test city S', 'Test country code S'
        );

        $receiver = new Receiver(
            'Test phone R', 'Test name R', 'Test address R', 'Test postal code R', 'Test city R', 'Test country code R'
        );

        $package = new Package(
            $sender, $receiver, [$parcel1, $parcel2]
        );

        $request = GeneratePackageNumbersRequest::fromPackage($package);
        $payload = $request->toPayload();
        list($requestPackage) = $payload->getOpenUMLFe()->getPackages();

        $requestSender = $requestPackage->getSender();
        self::assertEquals('Test address S', $requestSender->getAddress());
        self::assertEquals('Test city S', $requestSender->getCity());
        self::assertNull($requestSender->getCompany());
        self::assertEquals('Test country code S', $requestSender->getCountryCode());
        self::assertNull($requestSender->getEmail());
        self::assertEquals(42, $requestSender->getFid());
        self::assertEquals('Test name S', $requestSender->getName());
        self::assertEquals('Test phone S', $requestSender->getPhone());
        self::assertEquals('Test postal code S', $requestSender->getPostalCode());

        $requestReceiver = $requestPackage->getReceiver();
        self::assertEquals('Test address R', $requestReceiver->getAddress());
        self::assertEquals('Test city R', $requestReceiver->getCity());
        self::assertNull($requestReceiver->getCompany());
        self::assertEquals('Test country code R', $requestReceiver->getCountryCode());
        self::assertNull($requestReceiver->getEmail());
        self::assertEquals('Test name R', $requestReceiver->getName());
        self::assertEquals('Test phone R', $requestReceiver->getPhone());
        self::assertEquals('Test postal code R', $requestReceiver->getPostalCode());

        $sender = new Sender(
            42, 'Test phone S', 'Test name S', 'Test address S', 'Test postal code S',
            'Test city S', 'Test country code S', 'Test company S', 'Test email S'
        );

        $receiver = new Receiver(
            'Test phone R', 'Test name R', 'Test address R', 'Test postal code R',
            'Test city R', 'Test country code R', 'Test company R', 'Test email R'
        );

        $package = new Package(
            $sender, $receiver, [$parcel1, $parcel2]
        );

        $request = GeneratePackageNumbersRequest::fromPackage($package);
        $payload = $request->toPayload();
        list($requestPackage) = $payload->getOpenUMLFe()->getPackages();

        $requestSender = $requestPackage->getSender();
        self::assertEquals('Test company S', $requestSender->getCompany());
        self::assertEquals('Test email S', $requestSender->getEmail());

        $requestReceiver = $requestPackage->getReceiver();
        self::assertEquals('Test company R', $requestReceiver->getCompany());
        self::assertEquals('Test email R', $requestReceiver->getEmail());
    }

    public function testParcel()
    {
        $parcel1 = new Parcel(1, 2, 3, 4.2);
        $parcel2 = new Parcel(4, 5, 6, 8.4);

        $sender = new Sender(
            42, 'Test phone S', 'Test name S', 'Test address S', 'Test postal code S', 'Test city S', 'Test country code S'
        );

        $receiver = new Receiver(
            'Test phone R', 'Test name R', 'Test address R', 'Test postal code R', 'Test city R', 'Test country code R'
        );

        $package = new Package(
            $sender, $receiver, [$parcel1, $parcel2]
        );

        $request = GeneratePackageNumbersRequest::fromPackage($package);
        $payload = $request->toPayload();
        [$requestPackage] = $payload->getOpenUMLFe()->getPackages();
        [$requestParcel1, $requestParcel2] = $requestPackage->getParcels();

        self::assertNull($requestParcel1->getCustomerData1());
        self::assertNull($requestParcel1->getCustomerData2());
        self::assertNull($requestParcel1->getCustomerData3());
        self::assertEquals(1, $requestParcel1->getSizeX());
        self::assertEquals(2, $requestParcel1->getSizeY());
        self::assertEquals(3, $requestParcel1->getSizeZ());
        self::assertEquals(4.2, $requestParcel1->getWeight());
        self::assertNull($requestParcel2->getCustomerData1());
        self::assertNull($requestParcel2->getCustomerData2());
        self::assertNull($requestParcel2->getCustomerData3());
        self::assertEquals(4, $requestParcel2->getSizeX());
        self::assertEquals(5, $requestParcel2->getSizeY());
        self::assertEquals(6, $requestParcel2->getSizeZ());
        self::assertEquals(8.4, $requestParcel2->getWeight());

        $parcel1 = new Parcel(1, 2, 3, 4.2, 'test reference 1', 'test content 1', 'test customer notes 1');
        $parcel2 = new Parcel(4, 5, 6, 8.4, 'test reference 2', 'test content 2', 'test customer notes 2');

        $package = new Package(
            $sender, $receiver, [$parcel1, $parcel2]
        );

        $request = GeneratePackageNumbersRequest::fromPackage($package);
        $payload = $request->toPayload();
        [$requestPackage] = $payload->getOpenUMLFe()->getPackages();
        [$requestParcel1, $requestParcel2] = $requestPackage->getParcels();

        self::assertEquals('test reference 1', $requestParcel1->getReference());
        self::assertEquals('test content 1', $requestParcel1->getContent());
        self::assertEquals('test customer notes 1', $requestParcel1->getCustomerData1());
        self::assertNull($requestParcel1->getCustomerData2());
        self::assertNull($requestParcel1->getCustomerData3());
        self::assertEquals('test reference 2', $requestParcel2->getReference());
        self::assertEquals('test content 2', $requestParcel2->getContent());
        self::assertEquals('test customer notes 2', $requestParcel2->getCustomerData1());
        self::assertNull($requestParcel2->getCustomerData2());
        self::assertNull($requestParcel2->getCustomerData3());

        $parcel = new Parcel(1, 2, 3, 4.2, 'test reference 1', 'test content 1',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt '.
            'ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco '.
            'laboris nisi ut aliquip ex ea commodo consequat.');

        $package = new Package(
            $sender, $receiver, [$parcel]
        );

        $request = GeneratePackageNumbersRequest::fromPackage($package);
        $payload = $request->toPayload();
        [$requestPackage] = $payload->getOpenUMLFe()->getPackages();
        [$requestParcel] = $requestPackage->getParcels();
        self::assertEquals('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e', $requestParcel->getCustomerData1());
        self::assertEquals('iusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni', $requestParcel->getCustomerData2());
        self::assertEquals('m ad minim veniam, quis nostrud exercitation ullamco laboris nisi', $requestParcel->getCustomerData3());
    }

    public function testBothFactoryMethodYieldTheSameResult()
    {
        $sender = new Sender(
            42, 'Test phone S', 'Test name S', 'Test address S', 'Test postal code S', 'Test city S', 'Test country code S'
        );

        $receiver = new Receiver(
            'Test phone R', 'Test name R', 'Test address R', 'Test postal code R', 'Test city R', 'Test country code R'
        );

        $parcel = new Parcel(1, 2, 3, 4.2, 'test reference 1', 'test content 1');

        $package = new Package(
            $sender, $receiver, [$parcel]
        );

        $request1 = GeneratePackageNumbersRequest::fromPackage($package);
        $request2 = GeneratePackageNumbersRequest::fromPackages([$package]);

        self::assertEquals($request1, $request2, '', 0.0, 99);

    }
}
