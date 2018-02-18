<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class FindPostalCodeV1Request implements RequestInterface
{
    /**
     * @var PostalCodeV1
     */
    private $postalCodeV1;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return PostalCodeV1
     */
    public function getPostalCode() : ?PostalCodeV1
    {
        return $this->postalCodeV1;
    }

    /**
     * @param PostalCodeV1 $postalCodeV1
     *
     * @return FindPostalCodeV1Request
     */
    public function setPostalCode(PostalCodeV1 $postalCodeV1) : FindPostalCodeV1Request
    {
        $this->postalCodeV1 = $postalCodeV1;

        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthData() : ?AuthDataV1
    {
        return $this->authDataV1;
    }

    /**
     * @param AuthDataV1 $authDataV1
     *
     * @return FindPostalCodeV1Request
     */
    public function setAuthData(AuthDataV1 $authDataV1) : FindPostalCodeV1Request
    {
        $this->authDataV1 = $authDataV1;

        return $this;
    }
}
