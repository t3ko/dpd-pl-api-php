<?php

namespace T3ko\Dpd\Soap\Types;

class NonMatchingData
{

    /**
     * @var string
     */
    private $waybill;

    /**
     * @return string
     */
    public function getWaybill() : string
    {
        return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return $this
     */
    public function setWaybill(string $waybill) : NonMatchingData
    {
        $this->waybill = $waybill;
        return $this;
    }


}

