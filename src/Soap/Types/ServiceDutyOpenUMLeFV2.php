<?php

namespace T3ko\Dpd\Soap\Types;

class ServiceDutyOpenUMLeFV2
{

    /**
     * @var string
     */
    private $amount;

    /**
     * @var ServiceCurrencyEnum
     */
    private $currency;

    /**
     * @return string
     */
    public function getAmount() : string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return ServiceDutyOpenUMLeFV2
     */
    public function setAmount(string $amount) : ServiceDutyOpenUMLeFV2
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return ServiceCurrencyEnum
     */
    public function getCurrency() : ServiceCurrencyEnum
    {
        return $this->currency;
    }

    /**
     * @param ServiceCurrencyEnum $currency
     * @return ServiceDutyOpenUMLeFV2
     */
    public function setCurrency(ServiceCurrencyEnum $currency) : ServiceDutyOpenUMLeFV2
    {
        $this->currency = $currency;
        return $this;
    }


}

