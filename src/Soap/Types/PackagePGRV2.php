<?php

namespace T3ko\Dpd\Soap\Types;

class PackagePGRV2
{

    /**
     * @var string
     */
    private $Status;

    /**
     * @var int
     */
    private $PackageId;

    /**
     * @var string
     */
    private $Reference;

    /**
     * @var ValidationDetails
     */
    private $ValidationDetails;


    private $Parcels;

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
    public function setStatus(string $Status) : PackagePGRV2
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageId() : int
    {
        return $this->PackageId;
    }

    /**
     * @param int $PackageId
     * @return $this
     */
    public function setPackageId(int $PackageId) : PackagePGRV2
    {
        $this->PackageId = $PackageId;
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
    public function setReference(string $Reference) : PackagePGRV2
    {
        $this->Reference = $Reference;
        return $this;
    }

    public function getValidationDetails()
    {
        return $this->ValidationDetails;
    }

    /**
     * @return $this
     */
    public function setValidationDetails($ValidationDetails) : PackagePGRV2
    {
        $this->ValidationDetails = $ValidationDetails;
        return $this;
    }

    public function getParcels()
    {
        return $this->Parcels;
    }

    /**
     * @return $this
     */
    public function setParcels($Parcels) : PackagePGRV2
    {
        $this->Parcels = $Parcels;
        return $this;
    }


}

