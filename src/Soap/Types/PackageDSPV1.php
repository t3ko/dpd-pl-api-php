<?php

namespace T3ko\Dpd\Soap\Types;

class PackageDSPV1
{

    /**
     * @var int
     */
    private $packageId;

    /**
     * @var ParcelDSPV1[]
     */
    private $parcels;

    /**
     * @var string
     */
    private $reference;

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
    public function setPackageId(int $packageId) : PackageDSPV1
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return ParcelDSPV1[]
     */
    public function getParcels() : array
    {
        return $this->parcels;
    }

    /**
     * @param ParcelDSPV1[] $parcels
     * @return $this
     */
    public function setParcels(array $parcels) : PackageDSPV1
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
    public function setReference(string $reference) : PackageDSPV1
    {
        $this->reference = $reference;
        return $this;
    }


}

