<?php

namespace T3ko\DpdTests\Api;

use T3ko\Dpd\Objects\Package;
use T3ko\Dpd\Objects\Parcel;
use T3ko\Dpd\Objects\Receiver;
use T3ko\Dpd\Objects\Sender;
use T3ko\Dpd\Request\GeneratePackageNumbersRequest;
use T3ko\Dpd\Request\GenerateProtocolRequest;

class GenerateProtocolTest extends ApiIntegrationTestCase
{

    public function testProtocolGenerationForCorrectParcel()
    {

        $sender = new Sender(1495, 501000000, 'XXX',
            'Testowa 21/37', '22555', 'Kraków', 'PL');
        $receiver = new Receiver(605000000, 'YYY',
            'Puławska 2', '02566', 'Warszawa', 'PL');
        $parcel = new Parcel(30, 30, 10, 2);
        $package = new Package($sender, $receiver, [$parcel]);

        $result = self::$api->generatePackageNumbers(GeneratePackageNumbersRequest::fromPackage($package));
        $waybill = $result->getPackages()[0]->getParcels()[0]->getWaybill();

        $result = self::$api->generateProtocol(GenerateProtocolRequest::fromWaybills([$waybill]));
        self::assertNotNull($result);
        self::assertNotEmpty($result->getFileContent());
    }

}
