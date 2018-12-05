<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ImportPackagesXV1Response implements ResultInterface
{

    /**
     * @var string
     */
    private $return;

    /**
     * @return string
     */
    public function getReturn() : string
    {
        return $this->return;
    }

    /**
     * @param string $return
     * @return ImportPackagesXV1Response
     */
    public function setReturn($return) : ImportPackagesXV1Response
    {
        $this->return = $return;
        return $this;
    }


}

