<?php

namespace T3ko\Dpd\Objects\Enum;

use PHPUnit\Framework\TestCase;

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
