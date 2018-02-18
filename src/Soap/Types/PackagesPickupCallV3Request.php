<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class PackagesPickupCallV3Request implements RequestInterface
{

    /**
     * @var DpdPickupCallParamsV3
     */
    private $dpdPickupParamsV3;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return DpdPickupCallParamsV3
     */
    public function getDpdPickupParams() : DpdPickupCallParamsV3
    {
        return $this->dpdPickupParamsV3;
    }

    /**
     * @param DpdPickupCallParamsV3 $dpdPickupParamsV3
     * @return $this
     */
    public function setDpdPickupParams(DpdPickupCallParamsV3 $dpdPickupParamsV3) : PackagesPickupCallV3Request
    {
        $this->dpdPickupParamsV3 = $dpdPickupParamsV3;
        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthData() : AuthDataV1
    {
        return $this->authDataV1;
    }

    /**
     * @param AuthDataV1 $authDataV1
     * @return $this
     */
    public function setAuthData(AuthDataV1 $authDataV1) : PackagesPickupCallV3Request
    {
        $this->authDataV1 = $authDataV1;
        return $this;
    }


}

