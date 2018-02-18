<?php

namespace T3ko\Dpd\Soap\Types;

class ProtocolDepot
{

    /**
     * @var string
     */
    private $number;

    /**
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return $this
     */
    public function setNumber(string $number) : ProtocolDepot
    {
        $this->number = $number;
        return $this;
    }


}

