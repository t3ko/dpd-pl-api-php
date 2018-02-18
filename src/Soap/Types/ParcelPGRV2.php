<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelPGRV2
{

    /**
     * @var string
     */
    private $Status;

    /**
     * @var int
     */
    private $ParcelId;

    /**
     * @var string
     */
    private $Reference;

    /**
     * @var string
     */
    private $Waybill;

    private $ValidationDetails;

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return $this
     */
    public function setStatus(string $Status) : ParcelPGRV2
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getParcelId() : int
    {
        return $this->ParcelId;
    }

    /**
     * @param int $ParcelId
     * @return $this
     */
    public function setParcelId(int $ParcelId) : ParcelPGRV2
    {
        $this->ParcelId = $ParcelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() : ?string
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return $this
     */
    public function setReference(string $Reference) : ParcelPGRV2
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getWaybill() : string
    {
        return $this->Waybill;
    }

    /**
     * @param string $Waybill
     * @return $this
     */
    public function setWaybill(string $Waybill) : ParcelPGRV2
    {
        $this->Waybill = $Waybill;
        return $this;
    }


    public function getValidationDetails()
    {
        return $this->ValidationDetails;
    }

    /**
     * @return $this
     */
    public function setValidationDetails($ValidationDetails) : ParcelPGRV2
    {
        $this->ValidationDetails = $ValidationDetails;
        return $this;
    }


}

