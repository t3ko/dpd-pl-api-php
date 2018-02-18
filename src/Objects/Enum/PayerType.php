<?php

namespace T3ko\Dpd\Objects\Enum;

final class PayerType
{
    private static $sender;
    private static $receiver;
    private static $third_party;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function SENDER(): PayerType
    {
        if (null === static::$sender) {
            static::$sender = new static('SENDER');
        }

        return static::$sender;
    }

    public static function RECEIVER(): PayerType
    {
        if (null === static::$receiver) {
            static::$receiver = new static('RECEIVER');
        }

        return static::$receiver;
    }

    public static function THIRD_PARTY(): PayerType
    {
        if (null === static::$third_party) {
            static::$third_party = new static('THIRD_PARTY');
        }

        return static::$third_party;
    }

    public function __toString()
    {
        return $this->value;
    }
}
