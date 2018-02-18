<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ImportDeliveryBusinessEventV1Response implements ResultInterface
{

    /**
     * @var ImportDeliveryBusinessEventResponseV1
     */
    private $return;

    /**
     * @return ImportDeliveryBusinessEventResponseV1
     */
    public function getReturn() : ImportDeliveryBusinessEventResponseV1
    {
        return $this->return;
    }

    /**
     * @param ImportDeliveryBusinessEventResponseV1 $return
     * @return $this
     */
    public function setReturn(ImportDeliveryBusinessEventResponseV1 $return) : ImportDeliveryBusinessEventV1Response
    {
        $this->return = $return;
        return $this;
    }


}

