<?php

namespace T3ko\Dpd\Soap\Types;

class PackagesPickupCallResponseV3
{

    /**
     * @var int
     */
    private $checkSum;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var StatusInfoPCRV2
     */
    private $statusInfo;

    /**
     * @return int
     */
    public function getCheckSum() : int
    {
        return $this->checkSum;
    }

    /**
     * @param int $checkSum
     * @return $this
     */
    public function setCheckSum(int $checkSum) : PackagesPickupCallResponseV3
    {
        $this->checkSum = $checkSum;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber(string $orderNumber) : PackagesPickupCallResponseV3
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return StatusInfoPCRV2
     */
    public function getStatusInfo() : StatusInfoPCRV2
    {
        return $this->statusInfo;
    }

    /**
     * @param StatusInfoPCRV2 $statusInfo
     * @return $this
     */
    public function setStatusInfo(StatusInfoPCRV2 $statusInfo) : PackagesPickupCallResponseV3
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

