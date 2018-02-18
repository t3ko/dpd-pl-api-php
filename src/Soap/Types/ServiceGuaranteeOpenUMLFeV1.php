<?php

namespace T3ko\Dpd\Soap\Types;

class ServiceGuaranteeOpenUMLFeV1
{

    /**
     * @var ServiceGuaranteeTypeEnumOpenUMLFeV1
     */
    private $type;

    /**
     * @var string
     */
    private $value;

    /**
     * @return ServiceGuaranteeTypeEnumOpenUMLFeV1
     */
    public function getType() : ServiceGuaranteeTypeEnumOpenUMLFeV1
    {
        return $this->type;
    }

    /**
     * @param ServiceGuaranteeTypeEnumOpenUMLFeV1 $type
     * @return ServiceGuaranteeOpenUMLFeV1
     */
    public function setType(ServiceGuaranteeTypeEnumOpenUMLFeV1 $type) : ServiceGuaranteeOpenUMLFeV1
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue() : ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ServiceGuaranteeOpenUMLFeV1
     */
    public function setValue(?string $value) : ServiceGuaranteeOpenUMLFeV1
    {
        $this->value = $value;
        return $this;
    }


}

