<?php

namespace T3ko\Dpd\Objects\Enum;

final class LabelPrintingPolicy
{
    private static $ignore_errors;
    private static $stop_on_first_error;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function IGNORE_ERRORS(): LabelPrintingPolicy
    {
        if (null === static::$ignore_errors) {
            static::$ignore_errors = new static('IGNORE_ERRORS');
        }

        return static::$ignore_errors;
    }

    public static function STOP_ON_FIRST_ERROR(): LabelPrintingPolicy
    {
        if (null === static::$stop_on_first_error) {
            static::$stop_on_first_error = new static('STOP_ON_FIRST_ERROR');
        }

        return static::$stop_on_first_error;
    }

    public function __toString()
    {
        return $this->value;
    }
}
