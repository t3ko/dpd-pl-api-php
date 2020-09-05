<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetEventsForWaybillV1Response implements ResultInterface
{
    /**
     * @var CustomerEventsResponseV3
     */
    private $return;

    /**
     * @return CustomerEventsResponseV3
     */
    public function getReturn() : CustomerEventsResponseV3
    {
        return $this->return;
    }
}

