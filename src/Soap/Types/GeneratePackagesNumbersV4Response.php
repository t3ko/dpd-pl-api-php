<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GeneratePackagesNumbersV4Response implements ResultInterface
{
    /**
     * @var PackagesGenerationResponseV2
     */
    private $return;

    /**
     * @return PackagesGenerationResponseV2
     */
    public function getReturn() : PackagesGenerationResponseV2
    {
        return $this->return;
    }

    /**
     * @param PackagesGenerationResponseV2 $return
     *
     * @return $this
     */
    public function setReturn(PackagesGenerationResponseV2 $return) : GeneratePackagesNumbersV4Response
    {
        $this->return = $return;

        return $this;
    }
}
