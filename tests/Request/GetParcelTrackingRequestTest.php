<?php

namespace T3ko\DpdTests\Request;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\TrackingEventsCount;
use T3ko\Dpd\Request\GetParcelTrackingRequest;

class GetParcelTrackingRequestTest extends TestCase
{
    public function testCreation()
    {
        $request = GetParcelTrackingRequest::fromWaybill('waybill', TrackingEventsCount::ALL());
        $payload = $request->toPayload();
        self::assertEquals('waybill', $payload->getWaybill());
        self::assertEquals('PL', $payload->getLanguage());
        self::assertEquals('ALL', (string)$payload->getEventsSelectType());

        $request = GetParcelTrackingRequest::fromWaybill('waybill', TrackingEventsCount::ALL(), 'EN');
        $payload = $request->toPayload();
        self::assertEquals('EN', $payload->getLanguage());

    }
}
