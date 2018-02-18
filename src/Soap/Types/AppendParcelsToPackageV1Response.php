<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AppendParcelsToPackageV1Response implements ResultInterface
{
    /**
     * @var ParcelsAppendResponseV1
     */
    private $return;

    /**
     * @return ParcelsAppendResponseV1
     */
    public function getReturn() : ParcelsAppendResponseV1
    {
        return $this->return;
    }

    /**
     * @param ParcelsAppendResponseV1 $return
     *
     * @return $this
     */
    public function setReturn(ParcelsAppendResponseV1 $return) : AppendParcelsToPackageV1Response
    {
        $this->return = $return;

        return $this;
    }
}
