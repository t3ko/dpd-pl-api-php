<?php

namespace T3ko\Dpd\Soap\Types;

class ServiceCODOpenUMLFeV1
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
     * @return $this
     */
    public function setAmount(string $amount) : ServiceCODOpenUMLFeV1
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
     * @return $this
     */
    public function setCurrency(ServiceCurrencyEnum $currency) : ServiceCODOpenUMLFeV1
    {
        $this->currency = $currency;
        return $this;
    }


}

