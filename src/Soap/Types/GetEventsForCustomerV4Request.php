<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEventsForCustomerV4Request implements RequestInterface
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
     * @return GetEventsForCustomerV4Request
     */
    public function setLimit(int $limit): GetEventsForCustomerV4Request
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
     * @return GetEventsForCustomerV4Request
     */
    public function setLanguage(string $language): GetEventsForCustomerV4Request
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
     * @return GetEventsForCustomerV4Request
     */
    public function setAuthData(AuthDataV1 $authData): GetEventsForCustomerV4Request
    {
        $this->authData = $authData;
        return $this;
    }
}

