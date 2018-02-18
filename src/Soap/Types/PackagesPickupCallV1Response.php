<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class PackagesPickupCallV1Response implements ResultInterface
{

    /**
     * @var PackagesPickupCallResponseV1
     */
    private $return;

    /**
     * @return PackagesPickupCallResponseV1
     */
    public function getReturn() : PackagesPickupCallResponseV1
    {
        return $this->return;
    }

    /**
     * @param PackagesPickupCallResponseV1 $return
     * @return $this
     */
    public function setReturn(PackagesPickupCallResponseV1 $return) : PackagesPickupCallV1Response
    {
        $this->return = $return;
        return $this;
    }


}

