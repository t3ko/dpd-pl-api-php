<?php

namespace T3ko\Dpd\Soap\Types;

class SchemaValidationException
{

    /**
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message) : SchemaValidationException
    {
        $this->message = $message;
        return $this;
    }


}

