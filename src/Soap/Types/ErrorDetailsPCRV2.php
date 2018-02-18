<?php

namespace T3ko\Dpd\Soap\Types;

class ErrorDetailsPCRV2
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $fields;

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode(string $code) : ErrorDetailsPCRV2
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description) : ErrorDetailsPCRV2
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getFields() : string
    {
        return $this->fields;
    }

    /**
     * @param string $fields
     *
     * @return $this
     */
    public function setFields(string $fields) : ErrorDetailsPCRV2
    {
        $this->fields = $fields;

        return $this;
    }
}
