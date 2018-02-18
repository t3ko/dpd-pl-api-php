<?php

namespace T3ko\Dpd\Objects\Enum;

final class FileType
{
    private static $pdf;
    private static $epl;
    private static $zpl;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function PDF(): FileType
    {
        if (null === static::$pdf) {
            static::$pdf = new static('PDF');
        }

        return static::$pdf;
    }

    public static function EPL(): FileType
    {
        if (null === static::$epl) {
            static::$epl = new static('EPL');
        }

        return static::$epl;
    }

    public static function ZPL(): FileType
    {
        if (null === static::$zpl) {
            static::$zpl = new static('ZPL');
        }

        return static::$zpl;
    }

    public function __toString()
    {
        return $this->value;
    }
}
