<?php

namespace T3ko\DpdTests\Objects\Enum;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\SessionType;

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
