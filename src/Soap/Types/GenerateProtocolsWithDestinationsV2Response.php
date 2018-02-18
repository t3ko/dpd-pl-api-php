<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateProtocolsWithDestinationsV2Response implements ResultInterface
{
    /**
     * @var DocumentGenerationResponseV2
     */
    private $return;

    /**
     * @return DocumentGenerationResponseV2
     */
    public function getReturn() : DocumentGenerationResponseV2
    {
        return $this->return;
    }

    /**
     * @param DocumentGenerationResponseV2 $return
     *
     * @return $this
     */
    public function setReturn(DocumentGenerationResponseV2 $return) : GenerateProtocolsWithDestinationsV2Response
    {
        $this->return = $return;

        return $this;
    }
}
