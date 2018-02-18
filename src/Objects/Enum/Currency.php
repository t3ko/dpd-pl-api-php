<?php

namespace T3ko\Dpd\Objects\Enum;

final class Currency
{
    private static $pln;
    private static $eur;
    private static $usd;
    private static $chf;
    private static $sek;
    private static $nok;

    /**
     * @var string
     */
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function PLN(): Currency
    {
        if (null === static::$pln) {
            static::$pln = new static('PLN');
        }

        return static::$pln;
    }

    public static function EUR(): Currency
    {
        if (null === static::$eur) {
            static::$eur = new static('EUR');
        }

        return static::$eur;
    }

    public static function USD(): Currency
    {
        if (null === static::$usd) {
            static::$usd = new static('USD');
        }

        return static::$usd;
    }

    public static function CHF(): Currency
    {
        if (null === static::$chf) {
            static::$chf = new static('CHF');
        }

        return static::$chf;
    }

    public static function SEK(): Currency
    {
        if (null === static::$sek) {
            static::$sek = new static('SEK');
        }

        return static::$sek;
    }

    public static function NOK(): Currency
    {
        if (null === static::$nok) {
            static::$nok = new static('NOK');
        }

        return static::$nok;
    }

    public function __toString()
    {
        return $this->value;
    }
}
