<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelDGRV2
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
     * @var StatusInfoDGRV2
     */
    private $statusInfo;

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
    public function setParcelId(int $parcelId) : ParcelDGRV2
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
    public function setReference(string $reference) : ParcelDGRV2
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return StatusInfoDGRV2
     */
    public function getStatusInfo() : StatusInfoDGRV2
    {
        return $this->statusInfo;
    }

    /**
     * @param StatusInfoDGRV2 $statusInfo
     * @return $this
     */
    public function setStatusInfo(StatusInfoDGRV2 $statusInfo) : ParcelDGRV2
    {
        $this->statusInfo = $statusInfo;
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
    public function setWaybill(string $waybill) : ParcelDGRV2
    {
        $this->waybill = $waybill;
        return $this;
    }


}

