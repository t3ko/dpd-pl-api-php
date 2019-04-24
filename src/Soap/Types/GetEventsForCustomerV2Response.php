<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetEventsForCustomerV2Response implements ResultInterface
{

    /**
     * @var customerEventsResponseV1
     */
    private $return;

    /**
     * @return customerEventsResponseV1
     */
    public function getReturn() : \customerEventsResponseV1
    {
        return $this->return;
    }


}

