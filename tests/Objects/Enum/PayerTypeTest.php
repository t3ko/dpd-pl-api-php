<?php

namespace T3ko\DpdTests\Objects\Enum;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\PayerType;

class PayerTypeTest extends TestCase
{
    /**
     * @dataProvider knownPayerTypes
     */
    public function testCreation($payerType)
    {
        $payerType = PayerType::$payerType();
        self::assertEquals($payerType, (string)$payerType);
    }

    public function knownPayerTypes()
    {
        return [
            ['SENDER'],
            ['RECEIVER'],
            ['THIRD_PARTY'],
        ];
    }
}
