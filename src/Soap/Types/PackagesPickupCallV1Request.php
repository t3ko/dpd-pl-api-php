<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class PackagesPickupCallV1Request implements RequestInterface
{

    /**
     * @var DpdPickupCallParamsV1
     */
    private $dpdPickupParamsV1;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return DpdPickupCallParamsV1
     */
    public function getDpdPickupParams() : DpdPickupCallParamsV1
    {
        return $this->dpdPickupParamsV1;
    }

    /**
     * @param DpdPickupCallParamsV1 $dpdPickupParamsV1
     * @return $this
     */
    public function setDpdPickupParams(DpdPickupCallParamsV1 $dpdPickupParamsV1) : PackagesPickupCallV1Request
    {
        $this->dpdPickupParamsV1 = $dpdPickupParamsV1;
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
    public function setAuthData(AuthDataV1 $authDataV1) : PackagesPickupCallV1Request
    {
        $this->authDataV1 = $authDataV1;
        return $this;
    }


}

