<?php

namespace T3ko\DpdTests\Objects;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\RegisteredParcel;

class RegisteredParcelTest extends TestCase
{
    public function testCreation()
    {
        $registeredParcel = new RegisteredParcel(
            42, 'Test status', 'Test reference', ['Test validation detail'], 'Test waybill'
        );

        self::assertEquals(42, $registeredParcel->getId());
        self::assertEquals('Test status', $registeredParcel->getStatus());
        self::assertEquals('Test reference', $registeredParcel->getReference());
        self::assertCount(1, $registeredParcel->getValidationDetails());
        self::assertContains('Test validation detail', $registeredParcel->getValidationDetails());
        self::assertEquals('Test waybill', $registeredParcel->getWaybill());
    }
}
