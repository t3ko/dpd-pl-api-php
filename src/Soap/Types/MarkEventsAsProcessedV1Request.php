<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class MarkEventsAsProcessedV1Request implements RequestInterface
{

    /**
     * @var string
     */
    private $confirmId;

    /**
     * @var AuthDataV1
     */
    private $authData;

    /**
     * @return string
     */
    public function getConfirmId(): string
    {
        return $this->confirmId;
    }

    /**
     * @param string $confirmId
     * @return MarkEventsAsProcessedV1Request
     */
    public function setConfirmId(string $confirmId): MarkEventsAsProcessedV1Request
    {
        $this->confirmId = $confirmId;
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
     * @return MarkEventsAsProcessedV1Request
     */
    public function setAuthData(AuthDataV1 $authData): MarkEventsAsProcessedV1Request
    {
        $this->authData = $authData;
        return $this;
    }
}

