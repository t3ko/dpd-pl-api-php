<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindPostalCodeV1Response implements ResultInterface
{
    /**
     * @var FindPostalCodeResponseV1
     */
    private $return;

    /**
     * @return FindPostalCodeResponseV1
     */
    public function getReturn() : FindPostalCodeResponseV1
    {
        return $this->return;
    }

    /**
     * @param FindPostalCodeResponseV1 $return
     *
     * @return $this
     */
    public function setReturn(FindPostalCodeResponseV1 $return) : FindPostalCodeV1Response
    {
        $this->return = $return;

        return $this;
    }
}
