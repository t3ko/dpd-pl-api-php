<?php

namespace T3ko\Dpd\Soap\Types;

class PostalCodeV1
{

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode(string $countryCode) : PostalCodeV1
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return $this
     */
    public function setZipCode(string $zipCode) : PostalCodeV1
    {
        $this->zipCode = $zipCode;
        return $this;
    }


}

