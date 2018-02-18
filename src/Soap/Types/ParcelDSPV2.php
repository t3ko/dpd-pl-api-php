<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelDSPV2
{

    /**
     * @var int
     */
    private $parcelId;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $waybill;

    /**
     * @return int
     */
    public function getParcelId() : int
    {
        return $this->parcelId;
    }

    /**
     * @param int $parcelId
     * @return $this
     */
    public function setParcelId(int $parcelId) : ParcelDSPV2
    {
        $this->parcelId = $parcelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return $this
     */
    public function setReference(string $reference) : ParcelDSPV2
    {
        $this->reference = $reference;
        return $this;
    }

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
    public function setWaybill(string $waybill) : ParcelDSPV2
    {
        $this->waybill = $waybill;
        return $this;
    }


}

