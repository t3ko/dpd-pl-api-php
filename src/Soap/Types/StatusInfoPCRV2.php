<?php

namespace T3ko\Dpd\Soap\Types;

class StatusInfoPCRV2
{

    /**
     * @var ErrorDetailsPCRV2
     */
    private $errorDetails;

    /**
     * @var string
     */
    private $status;

    /**
     * @return ErrorDetailsPCRV2
     */
    public function getErrorDetails() : ErrorDetailsPCRV2
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetailsPCRV2 $errorDetails
     * @return $this
     */
    public function setErrorDetails(ErrorDetailsPCRV2 $errorDetails) : StatusInfoPCRV2
    {
        $this->errorDetails = $errorDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status) : StatusInfoPCRV2
    {
        $this->status = $status;
        return $this;
    }


}

