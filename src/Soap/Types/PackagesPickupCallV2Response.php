<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class PackagesPickupCallV2Response implements ResultInterface
{

    /**
     * @var PackagesPickupCallResponseV2
     */
    private $return;

    /**
     * @return PackagesPickupCallResponseV2
     */
    public function getReturn() : PackagesPickupCallResponseV2
    {
        return $this->return;
    }

    /**
     * @param PackagesPickupCallResponseV2 $return
     * @return $this
     */
    public function setReturn(PackagesPickupCallResponseV2 $return) : PackagesPickupCallV2Response
    {
        $this->return = $return;
        return $this;
    }


}

