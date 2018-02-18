<?php

namespace T3ko\Dpd\Soap\Types;

class PackageDSPV2
{

    /**
     * @var int
     */
    private $packageId;

    /**
     * @var Parcels
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
    public function setPackageId(int $packageId) : PackageDSPV2
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return Parcels
     */
    public function getParcels() : Parcels
    {
        return $this->parcels;
    }

    /**
     * @param Parcels $parcels
     * @return $this
     */
    public function setParcels(Parcels $parcels) : PackageDSPV2
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
    public function setReference(string $reference) : PackageDSPV2
    {
        $this->reference = $reference;
        return $this;
    }


}

