<?php

namespace T3ko\Dpd\Soap\Types;

class ValidationDetails
{

    /**
     * @var ValidationInfoPGRV2
     */
    private $validationInfo;

    /**
     * @return ValidationInfoPGRV2
     */
    public function getValidationInfo() : ValidationInfoPGRV2
    {
        return $this->validationInfo;
    }

    /**
     * @param ValidationInfoPGRV2 $validationInfo
     * @return $this
     */
    public function setValidationInfo(ValidationInfoPGRV2 $validationInfo) : ValidationDetails
    {
        $this->validationInfo = $validationInfo;
        return $this;
    }


}

