<?php

namespace T3ko\Dpd\Soap\Types;

class OpenUMLFeV3
{

    /**
     * @var PackageOpenUMLFeV3[]
     */
    private $packages;

    /**
     * @return PackageOpenUMLFeV3[]
     */
    public function getPackages() : array
    {
        return $this->packages;
    }

    /**
     * @param PackageOpenUMLFeV3[] $packages
     * @return OpenUMLFeV3
     */
    public function setPackages(array $packages) : OpenUMLFeV3
    {
        $this->packages = $packages;
        return $this;
    }


}

