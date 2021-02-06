<?php

namespace T3ko\DpdTests\Objects\Enum;

use PHPUnit\Framework\TestCase;
use T3ko\Dpd\Objects\Enum\SelfCollectionReceiver;

class SelfCollectionReceiverTest extends TestCase
{
    /**
     * @dataProvider knownSelfCollectionReceivers
     */
    public function testCreation($selfCollectionReceiver)
    {
        $selfCollectionReceiver = SelfCollectionReceiver::$selfCollectionReceiver();
        self::assertEquals($selfCollectionReceiver, (string)$selfCollectionReceiver);
    }

    public function knownSelfCollectionReceivers()
    {
        return [
            ['PRIV'],
            ['COMP'],
        ];
    }
}
