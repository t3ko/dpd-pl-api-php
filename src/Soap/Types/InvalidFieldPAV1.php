<?php

namespace T3ko\Dpd\Soap\Types;

class InvalidFieldPAV1
{

    /**
     * @var string
     */
    private $fieldName;

    /**
     * @var string
     */
    private $info;

    /**
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName) : InvalidFieldPAV1
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param string $info
     * @return $this
     */
    public function setInfo(string $info) : InvalidFieldPAV1
    {
        $this->info = $info;
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
    public function setStatus(string $status) : InvalidFieldPAV1
    {
        $this->status = $status;
        return $this;
    }


}

