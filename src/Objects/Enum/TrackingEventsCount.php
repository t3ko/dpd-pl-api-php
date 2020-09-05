<?php

namespace T3ko\Dpd\Objects\Enum;

final class TrackingEventsCount
{
    private static $all;
    private static $onlyLast;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function ALL(): TrackingEventsCount
    {
        if (null === static::$all) {
            static::$all = new static('ALL');
        }

        return static::$all;
    }

    public static function ONLY_LAST(): TrackingEventsCount
    {
        if (null === static::$onlyLast) {
            static::$onlyLast = new static('ONLY_LAST');
        }

        return static::$onlyLast;
    }

    public function __toString()
    {
        return $this->value;
    }
}
