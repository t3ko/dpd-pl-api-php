<?php


namespace T3ko\DpdTests\Objects;


use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Receiver;

class ReceiverTest extends TestCase
{
    public function testCreation()
    {
        $receiver = new Receiver(
            '501001002',
            'Test name',
            'Test address',
            'Test postal code',
            'Test city',
            'Test country code'
        );

        self::assertEquals('501001002', $receiver->getPhone());
        self::assertEquals('Test name', $receiver->getName());
        self::assertEquals('Test address', $receiver->getAddress());
        self::assertEquals('Test postal code', $receiver->getPostalCode());
        self::assertEquals('Test city', $receiver->getCity());
        self::assertEquals('Test country code', $receiver->getCountryCode());
    }
}
