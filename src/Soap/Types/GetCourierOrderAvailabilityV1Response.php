<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetCourierOrderAvailabilityV1Response implements ResultInterface
{

    /**
     * @var GetCourierOrderAvailabilityResponseV1
     */
    private $return;

    /**
     * @return GetCourierOrderAvailabilityResponseV1
     */
    public function getReturn() : GetCourierOrderAvailabilityResponseV1
    {
        return $this->return;
    }

    /**
     * @param GetCourierOrderAvailabilityResponseV1 $return
     * @return $this
     */
    public function setReturn(GetCourierOrderAvailabilityResponseV1 $return) : GetCourierOrderAvailabilityV1Response
    {
        $this->return = $return;
        return $this;
    }


}

