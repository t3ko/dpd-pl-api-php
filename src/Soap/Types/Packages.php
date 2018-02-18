<?php

namespace T3ko\Dpd\Soap\Types;

class Packages
{

    /**
     * @var PackagePGRV2[]
     */
    private $Package;

    /**
     * @return PackagePGRV2[]
     */
    public function getPackages() : array
    {
        return $this->Package;
    }

    /**
     * @param PackagePGRV2[] $package
     * @return $this
     */
    public function setPackages(array $packages) : Packages
    {
        $this->Package = $packages;
        return $this;
    }


}

