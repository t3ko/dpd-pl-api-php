<?php

namespace T3ko\Dpd\Objects\Enum;

final class SelfCollectionReceiver
{
    private static $priv;
    private static $comp;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function PRIV(): SelfCollectionReceiver
    {
        if (null === static::$priv) {
            static::$priv = new static('PRIV');
        }

        return static::$priv;
    }

    public static function COMP(): SelfCollectionReceiver
    {
        if (null === static::$comp) {
            static::$comp = new static('COMP');
        }

        return static::$comp;
    }

    public function __toString()
    {
        return $this->value;
    }
}
