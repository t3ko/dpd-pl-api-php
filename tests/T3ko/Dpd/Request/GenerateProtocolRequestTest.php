<?php

namespace T3ko\Dpd\Request;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\FileType;
use T3ko\Dpd\Objects\Enum\LabelPrintingPolicy;
use T3ko\Dpd\Objects\Enum\PageSize;
use T3ko\Dpd\Objects\Enum\SessionType;

class GenerateProtocolRequestTest extends TestCase
{
    public function testCreationFromParcelIds()
    {
        $request = GenerateProtocolRequest::fromParcelIds([42, 43, 44]);
        $payload = $request->toPayload();

        list($package) = $payload->getDpdServicesParams()->getSession()->getPackages();
        self::assertCount(3, $package->getParcels());
        list($parcel1, $parcel2, $parcel3) = $package->getParcels();

        $parcelIds = [$parcel1->getParcelId(), $parcel2->getParcelId(), $parcel3->getParcelId()];
        sort($parcelIds);
        self::assertSame([42, 43, 44], $parcelIds);

        $parcelReferences = [$parcel1->getReference(), $parcel2->getReference(), $parcel3->getReference()];
        self::assertSame([null, null, null], $parcelReferences);

        $waybills = [$parcel1->getWaybill(), $parcel2->getWaybill(), $parcel3->getWaybill()];
        self::assertSame([null, null, null], $waybills);

        self::assertEquals(PageSize::A4(), (string)$payload->getOutputDocPageFormat());
        self::assertEquals(FileType::PDF(), (string)$payload->getOutputDocFormat());
        self::assertEquals(LabelPrintingPolicy::IGNORE_ERRORS(), (string)$payload->getDpdServicesParams()->getPolicy());
        self::assertEquals(SessionType::DOMESTIC(), (string)$payload->getDpdServicesParams()->getSession()->getSessionType());
        self::assertNull($payload->getDpdServicesParams()->getDocumentId());
        self::assertNull($payload->getDpdServicesParams()->getPickupAddress());
        self::assertNull($payload->getDpdServicesParams()->getSession()->getSessionId());
        self::assertNull($payload->getAuthData());
    }

    public function testCreationFromReferences()
    {
        $request = GenerateProtocolRequest::fromReferences(['Reference1', 'Reference2', 'Reference3']);
        $payload = $request->toPayload();

        list($package) = $payload->getDpdServicesParams()->getSession()->getPackages();
        self::assertCount(3, $package->getParcels());
        list($parcel1, $parcel2, $parcel3) = $package->getParcels();

        $parcelIds = [$parcel1->getParcelId(), $parcel2->getParcelId(), $parcel3->getParcelId()];
        self::assertSame([null, null, null], $parcelIds);

        $parcelReferences = [$parcel1->getReference(), $parcel2->getReference(), $parcel3->getReference()];
        sort($parcelReferences);
        self::assertSame(['Reference1', 'Reference2', 'Reference3'], $parcelReferences);

        $waybills = [$parcel1->getWaybill(), $parcel2->getWaybill(), $parcel3->getWaybill()];
        self::assertSame([null, null, null], $waybills);

        self::assertEquals(PageSize::A4(), (string)$payload->getOutputDocPageFormat());
        self::assertEquals(FileType::PDF(), (string)$payload->getOutputDocFormat());
        self::assertEquals(LabelPrintingPolicy::IGNORE_ERRORS(), (string)$payload->getDpdServicesParams()->getPolicy());
        self::assertEquals(SessionType::DOMESTIC(), (string)$payload->getDpdServicesParams()->getSession()->getSessionType());
        self::assertNull($payload->getDpdServicesParams()->getDocumentId());
        self::assertNull($payload->getDpdServicesParams()->getPickupAddress());
        self::assertNull($payload->getDpdServicesParams()->getSession()->getSessionId());
        self::assertNull($payload->getAuthData());
    }

    public function testCreationFromWaybills()
    {
        $request = GenerateProtocolRequest::fromWaybills(['Waybill1', 'Waybill2', 'Waybill3']);
        $payload = $request->toPayload();

        list($package) = $payload->getDpdServicesParams()->getSession()->getPackages();
        self::assertCount(3, $package->getParcels());
        list($parcel1, $parcel2, $parcel3) = $package->getParcels();

        $parcelIds = [$parcel1->getParcelId(), $parcel2->getParcelId(), $parcel3->getParcelId()];
        self::assertSame([null, null, null], $parcelIds);

        $parcelReferences = [$parcel1->getReference(), $parcel2->getReference(), $parcel3->getReference()];
        self::assertSame([null, null, null], $parcelReferences);

        $waybills = [$parcel1->getWaybill(), $parcel2->getWaybill(), $parcel3->getWaybill()];
        sort($waybills);
        self::assertSame(['Waybill1', 'Waybill2', 'Waybill3'], $waybills);

        self::assertEquals(PageSize::A4(), (string)$payload->getOutputDocPageFormat());
        self::assertEquals(FileType::PDF(), (string)$payload->getOutputDocFormat());
        self::assertEquals(LabelPrintingPolicy::IGNORE_ERRORS(), (string)$payload->getDpdServicesParams()->getPolicy());
        self::assertEquals(SessionType::DOMESTIC(), (string)$payload->getDpdServicesParams()->getSession()->getSessionType());
        self::assertNull($payload->getDpdServicesParams()->getDocumentId());
        self::assertNull($payload->getDpdServicesParams()->getPickupAddress());
        self::assertNull($payload->getDpdServicesParams()->getSession()->getSessionId());
        self::assertNull($payload->getAuthData());
    }

}
