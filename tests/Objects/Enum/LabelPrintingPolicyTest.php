<?php

namespace T3ko\DpdTests\Objects\Enum;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\LabelPrintingPolicy;

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
