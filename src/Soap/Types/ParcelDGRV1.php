<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelDGRV1
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
     * @var StatusInfoDGRV1
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
    public function setParcelId(int $parcelId) : ParcelDGRV1
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
    public function setReference(string $reference) : ParcelDGRV1
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return StatusInfoDGRV1
     */
    public function getStatusInfo() : StatusInfoDGRV1
    {
        return $this->statusInfo;
    }

    /**
     * @param StatusInfoDGRV1 $statusInfo
     * @return $this
     */
    public function setStatusInfo(StatusInfoDGRV1 $statusInfo) : ParcelDGRV1
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
    public function setWaybill(string $waybill) : ParcelDGRV1
    {
        $this->waybill = $waybill;
        return $this;
    }


}

