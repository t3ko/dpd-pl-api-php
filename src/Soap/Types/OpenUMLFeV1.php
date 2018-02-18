<?php

namespace T3ko\Dpd\Soap\Types;

class OpenUMLFeV1
{

    /**
     * @var PackageOpenUMLFeV1
     */
    private $packages;

    /**
     * @return PackageOpenUMLFeV1
     */
    public function getPackages() : PackageOpenUMLFeV1
    {
        return $this->packages;
    }

    /**
     * @param PackageOpenUMLFeV1 $packages
     * @return $this
     */
    public function setPackages(PackageOpenUMLFeV1 $packages) : OpenUMLFeV1
    {
        $this->packages = $packages;
        return $this;
    }


}

