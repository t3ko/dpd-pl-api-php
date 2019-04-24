<?php

namespace T3ko\Dpd\Soap\Types;

class CustomerEventDataV2
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }


}

