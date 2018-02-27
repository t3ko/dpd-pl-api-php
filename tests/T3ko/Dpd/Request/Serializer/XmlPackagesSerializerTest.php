<?php

namespace T3ko\Dpd\Request\Serializer;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Package;
use T3ko\Dpd\Objects\Parcel;
use T3ko\Dpd\Objects\Receiver;
use T3ko\Dpd\Objects\Sender;
use PHPUnit\Xpath\Assert as XpathAssertions;
use PHPUnit\Xpath\Constraint as XpathConstraints;

class XmlPackagesSerializerTest extends TestCase
{
    use XpathAssertions;
    use XpathConstraints;

    public function getPackage()
    {
        $parcel1 = new Parcel(1, 2, 3, 4.2, 'reference 1', 'contents 1', 'customer notes 1');
        $parcel2 = new Parcel(4, 5, 6, 8.4, 'reference 2', 'contents 2', 'customer notes 2');

        $sender = new Sender(
            42, 'Test phone S', 'Test name S', 'Test address S', 'Test postal code S', 'Test city S', 'Test country code S', 'Test company S', 'Test email S'
        );

        $receiver = new Receiver(
            'Test phone R', 'Test name R', 'Test address R', 'Test postal code R', 'Test city R', 'Test country code R', 'Test company R', 'Test email R'
        );

        $package = new Package($sender, $receiver, [$parcel1, $parcel2]);
        $package->setThirdPartyFid(123456);
        return $package;
    }

    public function testSerialize()
    {
        $package = $this->getPackage();
        $serializer = new XmlPackagesSerializer();

        $xml = $serializer->serialize([$package]);

        $document = new \DOMDocument();
        $document->loadXML($xml);

        self::assertXpathCount(1, '/Packages', $document);
        self::assertXpathCount(1, '/Packages/Package', $document);
        self::assertXpathCount(1, '/Packages/Package/Parcels', $document);
        self::assertXpathCount(2, '/Packages/Package/Parcels/Parcel', $document);
        self::assertXpathCount(1, '/Packages/Package/Sender', $document);
        self::assertXpathCount(1, '/Packages/Package/Receiver', $document);
        self::assertXpathCount(1, '/Packages/Package/Services', $document);

        self::assertXpathEquals('contents 1', '/Packages/Package/Parcels/Parcel[1]/Content/text()', $document);
        self::assertXpathEquals('customer notes 1', '/Packages/Package/Parcels/Parcel[1]/CustomerData1/text()', $document);
        self::assertXpathEquals('<CustomerData2></CustomerData2>', '/Packages/Package/Parcels/Parcel[1]/CustomerData2', $document);
        self::assertXpathEquals('<CustomerData3></CustomerData3>', '/Packages/Package/Parcels/Parcel[1]/CustomerData3', $document);
        self::assertXpathEquals('1', '/Packages/Package/Parcels/Parcel[1]/SizeX/text()', $document);
        self::assertXpathEquals('2', '/Packages/Package/Parcels/Parcel[1]/SizeY/text()', $document);
        self::assertXpathEquals('3', '/Packages/Package/Parcels/Parcel[1]/SizeZ/text()', $document);
        self::assertXpathEquals('4.2', '/Packages/Package/Parcels/Parcel[1]/Weight/text()', $document);
        self::assertXpathEquals('reference 1', '/Packages/Package/Parcels/Parcel[1]/Reference/text()', $document);

        self::assertXpathEquals('contents 2', '/Packages/Package/Parcels/Parcel[2]/Content/text()', $document);
        self::assertXpathEquals('customer notes 2', '/Packages/Package/Parcels/Parcel[2]/CustomerData1/text()', $document);
        self::assertXpathEquals('<CustomerData2></CustomerData2>', '/Packages/Package/Parcels/Parcel[2]/CustomerData2', $document);
        self::assertXpathEquals('<CustomerData3></CustomerData3>', '/Packages/Package/Parcels/Parcel[2]/CustomerData3', $document);
        self::assertXpathEquals('4', '/Packages/Package/Parcels/Parcel[2]/SizeX/text()', $document);
        self::assertXpathEquals('5', '/Packages/Package/Parcels/Parcel[2]/SizeY/text()', $document);
        self::assertXpathEquals('6', '/Packages/Package/Parcels/Parcel[2]/SizeZ/text()', $document);
        self::assertXpathEquals('8.4', '/Packages/Package/Parcels/Parcel[2]/Weight/text()', $document);
        self::assertXpathEquals('reference 2', '/Packages/Package/Parcels/Parcel[2]/Reference/text()', $document);

        self::assertXpathEquals((string)$package->getPayerType(), '/Packages/Package/PayerType/text()', $document);
        self::assertXpathEquals('<Reference></Reference>', '/Packages/Package/Reference', $document);

        self::assertXpathEquals($package->getReceiver()->getAddress(), '/Packages/Package/Receiver/Address/text()', $document);
        self::assertXpathEquals($package->getReceiver()->getCountryCode(), '/Packages/Package/Receiver/CountryCode/text()', $document);
        self::assertXpathEquals($package->getReceiver()->getCity(), '/Packages/Package/Receiver/City/text()', $document);
        self::assertXpathEquals($package->getReceiver()->getCompany(), '/Packages/Package/Receiver/Company/text()', $document);
        self::assertXpathEquals($package->getReceiver()->getEmail(), '/Packages/Package/Receiver/Email/text()', $document);
        self::assertXpathEquals($package->getReceiver()->getName(), '/Packages/Package/Receiver/Name/text()', $document);
        self::assertXpathEquals($package->getReceiver()->getPhone(), '/Packages/Package/Receiver/Phone/text()', $document);
        self::assertXpathEquals($package->getReceiver()->getPostalCode(), '/Packages/Package/Receiver/PostalCode/text()', $document);

        self::assertXpathEquals($package->getSender()->getAddress(), '/Packages/Package/Sender/Address/text()', $document);
        self::assertXpathEquals($package->getSender()->getCountryCode(), '/Packages/Package/Sender/CountryCode/text()', $document);
        self::assertXpathEquals($package->getSender()->getCity(), '/Packages/Package/Sender/City/text()', $document);
        self::assertXpathEquals($package->getSender()->getCompany(), '/Packages/Package/Sender/Company/text()', $document);
        self::assertXpathEquals($package->getSender()->getEmail(), '/Packages/Package/Sender/Email/text()', $document);
        self::assertXpathEquals($package->getSender()->getName(), '/Packages/Package/Sender/Name/text()', $document);
        self::assertXpathEquals($package->getSender()->getPhone(), '/Packages/Package/Sender/Phone/text()', $document);
        self::assertXpathEquals($package->getSender()->getPostalCode(), '/Packages/Package/Sender/PostalCode/text()', $document);

        self::assertXpathEquals((string)$package->getThirdPartyFid(), '/Packages/Package/ThirdPartyFID/text()', $document);
        self::assertXpathEquals((string)$package->getThirdPartyFid(), '/Packages/Package/Customer/FID/text()', $document);
    }

}
