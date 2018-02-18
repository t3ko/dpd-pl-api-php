<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GeneratePackagesNumbersV1Response implements ResultInterface
{
    /**
     * @var PackagesGenerationResponseV1
     */
    private $return;

    /**
     * @return PackagesGenerationResponseV1
     */
    public function getReturn() : PackagesGenerationResponseV1
    {
        return $this->return;
    }

    /**
     * @param PackagesGenerationResponseV1 $return
     *
     * @return $this
     */
    public function setReturn(PackagesGenerationResponseV1 $return) : GeneratePackagesNumbersV1Response
    {
        $this->return = $return;

        return $this;
    }
}
