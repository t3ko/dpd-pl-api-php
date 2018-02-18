<?php

namespace T3ko\Dpd\Soap\Types;

class PickupPayerDPPV1
{

    /**
     * @var string
     */
    private $payerCostCenter;

    /**
     * @var string
     */
    private $payerName;

    /**
     * @var int
     */
    private $payerNumber;

    /**
     * @return string
     */
    public function getPayerCostCenter() : string
    {
        return $this->payerCostCenter;
    }

    /**
     * @param string $payerCostCenter
     * @return $this
     */
    public function setPayerCostCenter(string $payerCostCenter) : PickupPayerDPPV1
    {
        $this->payerCostCenter = $payerCostCenter;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayerName() : string
    {
        return $this->payerName;
    }

    /**
     * @param string $payerName
     * @return $this
     */
    public function setPayerName(string $payerName) : PickupPayerDPPV1
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayerNumber() : int
    {
        return $this->payerNumber;
    }

    /**
     * @param int $payerNumber
     * @return $this
     */
    public function setPayerNumber(int $payerNumber) : PickupPayerDPPV1
    {
        $this->payerNumber = $payerNumber;
        return $this;
    }


}

