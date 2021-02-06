<?php

namespace T3ko\DpdTests\Objects\Enum;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\GuaranteeType;

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
