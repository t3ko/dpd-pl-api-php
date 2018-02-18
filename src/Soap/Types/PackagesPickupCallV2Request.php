<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class PackagesPickupCallV2Request implements RequestInterface
{

    /**
     * @var DpdPickupCallParamsV2
     */
    private $dpdPickupParamsV2;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return DpdPickupCallParamsV2
     */
    public function getDpdPickupParams() : DpdPickupCallParamsV2
    {
        return $this->dpdPickupParamsV2;
    }

    /**
     * @param DpdPickupCallParamsV2 $dpdPickupParamsV2
     * @return $this
     */
    public function setDpdPickupParams(DpdPickupCallParamsV2 $dpdPickupParamsV2) : PackagesPickupCallV2Request
    {
        $this->dpdPickupParamsV2 = $dpdPickupParamsV2;
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
    public function setAuthData(AuthDataV1 $authDataV1) : PackagesPickupCallV2Request
    {
        $this->authDataV1 = $authDataV1;
        return $this;
    }


}

