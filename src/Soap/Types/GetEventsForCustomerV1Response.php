<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetEventsForCustomerV1Response implements ResultInterface
{

    /**
     * @var CustomerEventsResponseV1
     */
    private $return;

    /**
     * @return CustomerEventsResponseV1
     */
    public function getReturn() : CustomerEventsResponseV1
    {
        return $this->return;
    }


}

