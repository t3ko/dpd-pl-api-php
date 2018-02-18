<?php

namespace T3ko\Dpd\Soap\Types;

abstract class DefaultStringEnum
{
    /**
     * @var string
     */
    private $value;

    /**
     * PayerTypeEnumOpenUMLFeV1 constructor.
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }
}
