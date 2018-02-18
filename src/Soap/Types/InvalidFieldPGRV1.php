<?php

namespace T3ko\Dpd\Soap\Types;

class InvalidFieldPGRV1
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
     * @var FieldValidationStatusPGREnumV1
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
    public function setFieldName(string $fieldName) : InvalidFieldPGRV1
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
    public function setInfo(string $info) : InvalidFieldPGRV1
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return FieldValidationStatusPGREnumV1
     */
    public function getStatus() : FieldValidationStatusPGREnumV1
    {
        return $this->status;
    }

    /**
     * @param FieldValidationStatusPGREnumV1 $status
     * @return $this
     */
    public function setStatus(FieldValidationStatusPGREnumV1 $status) : InvalidFieldPGRV1
    {
        $this->status = $status;
        return $this;
    }


}

