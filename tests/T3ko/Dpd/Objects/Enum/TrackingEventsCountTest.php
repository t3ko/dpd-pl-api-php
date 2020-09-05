<?php

namespace T3ko\Dpd\Objects\Enum;

use PHPUnit\Framework\TestCase;

class TrackingEventsCountTest extends TestCase
{
    /**
     * @dataProvider knownTrackingEventsCounts
     */
    public function testCreation($trackingEventCountName)
    {
        $trackingEventCount = TrackingEventsCount::$trackingEventCountName();
        self::assertEquals($trackingEventCountName, (string)$trackingEventCount);
    }

    public function knownTrackingEventsCounts()
    {
        return [
            ['ALL'],
            ['ONLY_LAST'],
        ];
    }
}
