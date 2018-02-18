<?php

namespace T3ko\Dpd\Request;

use PHPUnit\Framework\TestCase;

class FindPostalCodeRequestTest extends TestCase
{
    public function testCreationWithoutCountryCode()
    {
        $request = FindPostalCodeRequest::from('Test postal code');
        $payload = $request->toPayload();
        self::assertEquals('Test postal code', $payload->getPostalCode()->getZipCode());
        self::assertEquals('PL', $payload->getPostalCode()->getCountryCode());
        self::assertNull($payload->getAuthData());
    }

    public function testCreationWithCountryCode()
    {
        $request = FindPostalCodeRequest::from('Test postal code', 'DE');
        $payload = $request->toPayload();
        self::assertEquals('Test postal code', $payload->getPostalCode()->getZipCode());
        self::assertEquals('DE', $payload->getPostalCode()->getCountryCode());
        self::assertNull($payload->getAuthData());
    }
}
