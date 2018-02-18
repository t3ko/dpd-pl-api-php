<?php

namespace T3ko\Dpd\Objects\Enum;

use PHPUnit\Framework\TestCase;

class SessionTypeTest extends TestCase
{
    /**
     * @dataProvider knownSessionTypes
     */
    public function testCreation($sessionType)
    {
        $sessionType = SessionType::$sessionType();
        self::assertEquals($sessionType, (string)$sessionType);
    }

    public function knownSessionTypes()
    {
        return [
            ['DOMESTIC'],
            ['INTERNATIONAL'],
        ];
    }
}
