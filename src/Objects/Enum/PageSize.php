<?php

namespace T3ko\Dpd\Objects\Enum;

final class PageSize
{
    private static $a4;
    private static $lbl_printer;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function A4(): PageSize
    {
        if (null === static::$a4) {
            static::$a4 = new static('A4');
        }

        return static::$a4;
    }

    public static function LBL_PRINTER(): PageSize
    {
        if (null === static::$lbl_printer) {
            static::$lbl_printer = new static('LBL_PRINTER');
        }

        return static::$lbl_printer;
    }

    public function __toString()
    {
        return $this->value;
    }
}
