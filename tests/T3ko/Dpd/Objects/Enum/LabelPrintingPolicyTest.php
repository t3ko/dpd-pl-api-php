<?php

namespace T3ko\Dpd\Objects\Enum;

use PHPUnit\Framework\TestCase;

class LabelPrintingPolicyTest extends TestCase
{
    /**
     * @dataProvider knownLabelPrintingPolicies
     */
    public function testCreation($labelPrintingPolicy)
    {
        $labelPrintingPolicy = LabelPrintingPolicy::$labelPrintingPolicy();
        self::assertEquals($labelPrintingPolicy, (string)$labelPrintingPolicy);
    }

    public function knownLabelPrintingPolicies()
    {
        return [
            ['IGNORE_ERRORS'],
            ['STOP_ON_FIRST_ERROR'],
        ];
    }
}
