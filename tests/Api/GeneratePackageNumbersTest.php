<?php

namespace T3ko\DpdTests\Api;

use T3ko\Dpd\Objects\Package;
use T3ko\Dpd\Objects\Parcel;
use T3ko\Dpd\Objects\Receiver;
use T3ko\Dpd\Objects\Sender;
use T3ko\Dpd\Request\GeneratePackageNumbersRequest;

class GeneratePackageNumbersTest extends ApiIntegrationTestCase
{

    public function testPackageNumberGenerationForCorrectParcel()
    {

        $sender = new Sender(1495, 501000000, 'XXX',
            'Testowa 21/37', '22555', 'Kraków', 'PL');
        $receiver = new Receiver(605000000, 'YYY',
            'Puławska 2', '02566', 'Warszawa', 'PL');
        $parcel = new Parcel(30, 30, 10, 2);
        $package = new Package($sender, $receiver, [$parcel]);

        $result = self::$api->generatePackageNumbers(GeneratePackageNumbersRequest::fromPackage($package));

        self::assertNotNull($result);
        self::assertIsArray($result->getPackages());
        self::assertNotEmpty($result->getPackages());

        /** @var \T3ko\Dpd\Objects\RegisteredPackage */
        $registeredPackage = $result->getPackages()[0];

        self::assertEquals('OK', $registeredPackage->getStatus());
        self::assertEmpty($registeredPackage->getValidationDetails());

        self::assertIsArray($registeredPackage->getParcels());
        self::assertNotEmpty($registeredPackage->getParcels());

        /** @var \T3ko\Dpd\Objects\RegisteredParcel */
        $registeredParcel = $registeredPackage->getParcels()[0];

        self::assertEquals('OK', $registeredParcel->getStatus());
        self::assertEmpty($registeredParcel->getValidationDetails());
        self::assertNotEmpty($registeredParcel->getWaybill());

    }

}
