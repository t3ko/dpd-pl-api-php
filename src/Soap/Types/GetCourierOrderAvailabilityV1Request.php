<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourierOrderAvailabilityV1Request implements RequestInterface
{

    /**
     * @var SenderPlaceV1
     */
    private $senderPlaceV1;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return SenderPlaceV1
     */
    public function getSenderPlace() : SenderPlaceV1
    {
        return $this->senderPlaceV1;
    }

    /**
     * @param SenderPlaceV1 $senderPlaceV1
     * @return GetCourierOrderAvailabilityV1Request
     */
    public function setSenderPlace(SenderPlaceV1 $senderPlaceV1) : GetCourierOrderAvailabilityV1Request
    {
        $this->senderPlaceV1 = $senderPlaceV1;
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
     * @return GetCourierOrderAvailabilityV1Request
     */
    public function setAuthData(AuthDataV1 $authDataV1) : GetCourierOrderAvailabilityV1Request
    {
        $this->authDataV1 = $authDataV1;
        return $this;
    }


}

