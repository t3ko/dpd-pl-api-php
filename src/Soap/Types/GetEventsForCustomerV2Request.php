<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEventsForCustomerV2Request implements RequestInterface
{

    /**
     * @var int
     */
    private $limit;

    /**
     * @var string
     */
    private $language;

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
     * @return GetEventsForCustomerV2Request
     */
    public function setLimit(int $limit): GetEventsForCustomerV2Request
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return GetEventsForCustomerV2Request
     */
    public function setLanguage(string $language): GetEventsForCustomerV2Request
    {
        $this->language = $language;
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
     * @return GetEventsForCustomerV2Request
     */
    public function setAuthData(AuthDataV1 $authData): GetEventsForCustomerV2Request
    {
        $this->authData = $authData;
        return $this;
    }
}

