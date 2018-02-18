<?php


namespace T3ko\Dpd\Objects;


use PHPUnit\Framework\TestCase;

class ParcelTest extends TestCase
{
    public function testCreation()
    {
        $parcel = new Parcel(
            1,
            2,
            3,
            4.0
        );

        self::assertEquals(1, $parcel->getSizeX());
        self::assertEquals(2, $parcel->getSizeY());
        self::assertEquals(3, $parcel->getSizeZ());
        self::assertEquals(4.0, $parcel->getWeight());
        self::assertNull($parcel->getReference());
        self::assertNull($parcel->getCustomerNotes());
        self::assertNull($parcel->getContents());

        $parcel = new Parcel(
            1,
            2,
            3,
            4.0,
            'reference',
            'contents',
            'customer notes'
        );

        self::assertEquals(1, $parcel->getSizeX());
        self::assertEquals(2, $parcel->getSizeY());
        self::assertEquals(3, $parcel->getSizeZ());
        self::assertEquals(4.0, $parcel->getWeight());
        self::assertEquals('reference', $parcel->getReference());
        self::assertEquals('contents', $parcel->getContents());
        self::assertEquals('customer notes', $parcel->getCustomerNotes());
    }
}
