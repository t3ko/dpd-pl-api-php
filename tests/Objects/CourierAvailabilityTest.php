<?php
namespace T3ko\DpdTests\Objects;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\CourierAvailability;

class CourierAvailabilityTest extends TestCase
{

    public function testCreation()
    {
        $courierAvailability = new CourierAvailability('offset', 'range');
        self::assertEquals('offset', $courierAvailability->getOffset());
        self::assertEquals('range', $courierAvailability->getRange());
    }
}
