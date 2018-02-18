<?php


namespace T3ko\Dpd\Objects;


use PHPUnit\Framework\TestCase;

class CourierAvailabilityTest extends TestCase
{

    public function testCreation()
    {
        $courierAvailability = new CourierAvailability('offset', 'range');
        self::assertEquals('offset', $courierAvailability->getOffset());
        self::assertEquals('range', $courierAvailability->getRange());
    }
}
