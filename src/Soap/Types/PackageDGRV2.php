<?php

namespace T3ko\Dpd\Soap\Types;

class PackageDGRV2
{

    /**
     * @var int
     */
    private $packageId;

    /**
     * @var ParcelDGRV2
     */
    private $parcels;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var StatusInfoDGRV2
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
    public function setPackageId(int $packageId) : PackageDGRV2
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return ParcelDGRV2
     */
    public function getParcels() : ParcelDGRV2
    {
        return $this->parcels;
    }

    /**
     * @param ParcelDGRV2 $parcels
     * @return $this
     */
    public function setParcels(ParcelDGRV2 $parcels) : PackageDGRV2
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
    public function setReference(string $reference) : PackageDGRV2
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
    public function setStatusInfo(StatusInfoDGRV2 $statusInfo) : PackageDGRV2
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

