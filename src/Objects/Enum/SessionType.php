<?php

namespace T3ko\Dpd\Objects\Enum;

final class SessionType
{
    private static $domestic;
    private static $international;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function DOMESTIC(): SessionType
    {
        if (null === static::$domestic) {
            static::$domestic = new static('DOMESTIC');
        }

        return static::$domestic;
    }

    public static function INTERNATIONAL(): SessionType
    {
        if (null === static::$international) {
            static::$international = new static('INTERNATIONAL');
        }

        return static::$international;
    }

    public function __toString()
    {
        return $this->value;
    }
}
