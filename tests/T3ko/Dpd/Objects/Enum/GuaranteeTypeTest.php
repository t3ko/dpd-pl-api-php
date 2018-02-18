<?php

namespace T3ko\Dpd\Objects\Enum;

use PHPUnit\Framework\TestCase;

class GuaranteeTypeTest extends TestCase
{
    /**
     * @dataProvider knownGuaranteeTypes
     */
    public function testCreation($guaranteeType)
    {
        $guaranteeType = GuaranteeType::$guaranteeType();
        self::assertEquals($guaranteeType, (string)$guaranteeType);
    }

    public function knownGuaranteeTypes()
    {
        return [
            ['TIME0930'],
            ['TIME1200'],
            ['B2C'],
            ['TIMEFIXED'],
            ['SATURDAY'],
            ['INTER'],
            ['DPDNEXTDAY'],
        ];
    }
}
