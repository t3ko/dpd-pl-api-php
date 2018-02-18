<?php

namespace T3ko\Dpd\Objects;

use PHPUnit\Framework\TestCase;

class RegisteredPackageTest extends TestCase
{
    public function testCreation()
    {
        $parcel1 = new RegisteredParcel(
            42, 'Test status', 'Test reference', ['Test validation detail'], 'Test waybill'
        );
        $parcel2 = new RegisteredParcel(
            43, 'Test status', 'Test reference', ['Test validation detail'], 'Test waybill'
        );

        $registeredPackage = new RegisteredPackage(
            42, 'Test status', 'Test reference', ['Test validation detail'], [$parcel1, $parcel2]
        );

        self::assertEquals(42, $registeredPackage->getId());
        self::assertEquals('Test status', $registeredPackage->getStatus());
        self::assertCount(1, $registeredPackage->getValidationDetails());
        self::assertContains('Test validation detail', $registeredPackage->getValidationDetails());
        self::assertCount(2, $registeredPackage->getParcels());
        self::assertContains($parcel1, $registeredPackage->getParcels());
        self::assertContains($parcel2, $registeredPackage->getParcels());
    }
}
