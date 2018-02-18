<?php

namespace T3ko\Dpd\Soap\Types;

class OpenUMLFeV2
{

    /**
     * @var PackageOpenUMLFeV2
     */
    private $packages;

    /**
     * @return PackageOpenUMLFeV2
     */
    public function getPackages() : PackageOpenUMLFeV2
    {
        return $this->packages;
    }

    /**
     * @param PackageOpenUMLFeV2 $packages
     * @return $this
     */
    public function setPackages(PackageOpenUMLFeV2 $packages) : OpenUMLFeV2
    {
        $this->packages = $packages;
        return $this;
    }


}

