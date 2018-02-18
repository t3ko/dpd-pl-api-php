<?php

namespace T3ko\Dpd\Soap\Types;

class DeniedAccessWSException
{
    /**
     * @var int
     */
    private $errorCode;

    /**
     * @var string
     */
    private $exceptionDetails;

    /**
     * @var string
     */
    private $message;

    /**
     * @return int
     */
    public function getErrorCode() : int
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     *
     * @return $this
     */
    public function setErrorCode(int $errorCode) : DeniedAccessWSException
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getExceptionDetails() : string
    {
        return $this->exceptionDetails;
    }

    /**
     * @param string $exceptionDetails
     *
     * @return $this
     */
    public function setExceptionDetails(string $exceptionDetails) : DeniedAccessWSException
    {
        $this->exceptionDetails = $exceptionDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage(string $message) : DeniedAccessWSException
    {
        $this->message = $message;

        return $this;
    }
}
