<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class PackagesPickupCallV3Response implements ResultInterface
{

    /**
     * @var PackagesPickupCallResponseV3
     */
    private $return;

    /**
     * @return PackagesPickupCallResponseV3
     */
    public function getReturn() : PackagesPickupCallResponseV3
    {
        return $this->return;
    }

    /**
     * @param PackagesPickupCallResponseV3 $return
     * @return $this
     */
    public function setReturn(PackagesPickupCallResponseV3 $return) : PackagesPickupCallV3Response
    {
        $this->return = $return;
        return $this;
    }


}

