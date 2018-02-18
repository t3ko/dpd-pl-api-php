<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateProtocolsWithDestinationsV1Request implements RequestInterface
{
    /**
     * @var DpdServicesParamsV2
     */
    private $dpdServicesParamsV2;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return DpdServicesParamsV2
     */
    public function getDpdServicesParams() : DpdServicesParamsV2
    {
        return $this->dpdServicesParamsV2;
    }

    /**
     * @param DpdServicesParamsV2 $dpdServicesParamsV2
     *
     * @return $this
     */
    public function setDpdServicesParams(DpdServicesParamsV2 $dpdServicesParamsV2) : GenerateProtocolsWithDestinationsV1Request
    {
        $this->dpdServicesParamsV2 = $dpdServicesParamsV2;

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
     *
     * @return $this
     */
    public function setAuthData(AuthDataV1 $authDataV1) : GenerateProtocolsWithDestinationsV1Request
    {
        $this->authDataV1 = $authDataV1;

        return $this;
    }
}
