<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEventsForCustomerV1Request implements RequestInterface
{

    /**
     * @var int
     */
    private $limit;

    /**
     * @var AuthDataV1
     */
    private $authData;

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return GetEventsForCustomerV1Request
     */
    public function setLimit(int $limit): GetEventsForCustomerV1Request
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthData(): AuthDataV1
    {
        return $this->authData;
    }

    /**
     * @param AuthDataV1 $authData
     * @return GetEventsForCustomerV1Request
     */
    public function setAuthData(AuthDataV1 $authData): GetEventsForCustomerV1Request
    {
        $this->authData = $authData;
        return $this;
    }
}

