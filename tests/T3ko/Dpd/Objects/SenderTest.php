<?php

namespace T3ko\Dpd\Objects;

use PHPUnit\Framework\TestCase;

class SenderTest extends TestCase
{
    public function testCreation()
    {
        $sender = new Sender(
            42, 'Test phone', 'Test name', 'Test address', 'Test postal code', 'Test city', 'Test country code'
        );

        self::assertEquals(42, $sender->getFid());
        self::assertEquals('Test phone', $sender->getPhone());
        self::assertEquals('Test name', $sender->getName());
        self::assertEquals('Test address', $sender->getAddress());
        self::assertEquals('Test postal code', $sender->getPostalCode());
        self::assertEquals('Test city', $sender->getCity());
        self::assertEquals('Test country code', $sender->getCountryCode());
        self::assertNull($sender->getCompany());
        self::assertNull($sender->getEmail());
    }
}
