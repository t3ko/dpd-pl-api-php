<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelsAppendParcelPAV1
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
    private $status;

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
    public function setParcelId(int $parcelId) : ParcelsAppendParcelPAV1
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
    public function setReference(string $reference) : ParcelsAppendParcelPAV1
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status) : ParcelsAppendParcelPAV1
    {
        $this->status = $status;
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
    public function setWaybill(string $waybill) : ParcelsAppendParcelPAV1
    {
        $this->waybill = $waybill;
        return $this;
    }


}

