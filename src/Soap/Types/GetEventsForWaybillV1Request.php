<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEventsForWaybillV1Request implements RequestInterface
{

    /**
     * @var string
     */
    private $waybill;

    /**
     * @var EventsSelectTypeEnum
     */
    private $eventsSelectType;

    /**
     * @var string
     */
    private $language;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return GetEventsForWaybillV1Request
     */
    public function setWaybill(string $waybill): GetEventsForWaybillV1Request
    {
        $this->waybill = $waybill;
        return $this;
    }

    /**
     * @return EventsSelectTypeEnum
     */
    public function getEventsSelectType(): EventsSelectTypeEnum
    {
        return $this->eventsSelectType;
    }

    /**
     * @param EventsSelectTypeEnum $eventsSelectType
     * @return GetEventsForWaybillV1Request
     */
    public function setEventsSelectType(EventsSelectTypeEnum $eventsSelectType): GetEventsForWaybillV1Request
    {
        $this->eventsSelectType = $eventsSelectType;
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
     * @return GetEventsForWaybillV1Request
     */
    public function setLanguage(string $language): GetEventsForWaybillV1Request
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthData(): ?AuthDataV1
    {
        return $this->authDataV1;
    }

    /**
     * @param AuthDataV1 $authData
     * @return GetEventsForWaybillV1Request
     */
    public function setAuthData(AuthDataV1 $authData): GetEventsForWaybillV1Request
    {
        $this->authDataV1 = $authData;
        return $this;
    }



}

