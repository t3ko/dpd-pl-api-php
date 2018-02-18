<?php

namespace T3ko\Dpd\Objects\Enum;

final class GuaranteeType
{
    private static $time0930;
    private static $time1200;
    private static $b2c;
    private static $timefixed;
    private static $saturday;
    private static $inter;
    private static $dpdnextday;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function TIME0930(): GuaranteeType
    {
        if (null === static::$time0930) {
            static::$time0930 = new static('TIME0930');
        }

        return static::$time0930;
    }

    public static function TIME1200(): GuaranteeType
    {
        if (null === static::$time1200) {
            static::$time1200 = new static('TIME1200');
        }

        return static::$time1200;
    }

    public static function B2C(): GuaranteeType
    {
        if (null === static::$b2c) {
            static::$b2c = new static('B2C');
        }

        return static::$b2c;
    }

    public static function TIMEFIXED(): GuaranteeType
    {
        if (null === static::$timefixed) {
            static::$timefixed = new static('TIMEFIXED');
        }

        return static::$timefixed;
    }

    public static function SATURDAY(): GuaranteeType
    {
        if (null === static::$saturday) {
            static::$saturday = new static('SATURDAY');
        }

        return static::$saturday;
    }

    public static function INTER(): GuaranteeType
    {
        if (null === static::$inter) {
            static::$inter = new static('INTER');
        }

        return static::$inter;
    }

    public static function DPDNEXTDAY(): GuaranteeType
    {
        if (null === static::$dpdnextday) {
            static::$dpdnextday = new static('DPDNEXTDAY');
        }

        return static::$dpdnextday;
    }

    public function __toString()
    {
        return $this->value;
    }
}
