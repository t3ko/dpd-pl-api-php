<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetEventsForCustomerV4Response implements ResultInterface
{

    /**
     * @var customerEventsResponseV2
     */
    private $return;

    /**
     * @return customerEventsResponseV2
     */
    public function getReturn() : \customerEventsResponseV2
    {
        return $this->return;
    }


}

