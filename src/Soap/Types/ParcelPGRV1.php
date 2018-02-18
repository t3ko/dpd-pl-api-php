<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelPGRV1
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
     * @var ValidationStatusPGREnumV1
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
    public function setParcelId(int $parcelId) : ParcelPGRV1
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
    public function setReference(string $reference) : ParcelPGRV1
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return ValidationStatusPGREnumV1
     */
    public function getStatus() : ValidationStatusPGREnumV1
    {
        return $this->status;
    }

    /**
     * @param ValidationStatusPGREnumV1 $status
     * @return $this
     */
    public function setStatus(ValidationStatusPGREnumV1 $status) : ParcelPGRV1
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
    public function setWaybill(string $waybill) : ParcelPGRV1
    {
        $this->waybill = $waybill;
        return $this;
    }


}

