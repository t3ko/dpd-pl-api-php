<?php

namespace T3ko\Dpd\Soap\Types;

class PackageDGRV1
{

    /**
     * @var int
     */
    private $packageId;

    /**
     * @var ParcelDGRV1
     */
    private $parcels;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var StatusInfoDGRV1
     */
    private $statusInfo;

    /**
     * @return int
     */
    public function getPackageId() : int
    {
        return $this->packageId;
    }

    /**
     * @param int $packageId
     * @return $this
     */
    public function setPackageId(int $packageId) : PackageDGRV1
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return ParcelDGRV1
     */
    public function getParcels() : ParcelDGRV1
    {
        return $this->parcels;
    }

    /**
     * @param ParcelDGRV1 $parcels
     * @return $this
     */
    public function setParcels(ParcelDGRV1 $parcels) : PackageDGRV1
    {
        $this->parcels = $parcels;
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
    public function setReference(string $reference) : PackageDGRV1
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
    public function setStatusInfo(StatusInfoDGRV1 $statusInfo) : PackageDGRV1
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

