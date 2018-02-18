<?php

namespace T3ko\Dpd\Soap\Types;

class PackagesPickupCallResponseV2
{

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var StatusInfoPCRV2
     */
    private $statusInfo;

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
    public function setOrderNumber(string $orderNumber) : PackagesPickupCallResponseV2
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
    public function setStatusInfo(StatusInfoPCRV2 $statusInfo) : PackagesPickupCallResponseV2
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

