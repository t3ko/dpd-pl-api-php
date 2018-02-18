<?php

namespace T3ko\Dpd\Soap\Types;

class PackagesPickupCallResponseV1
{

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var ProtocolPCRV1
     */
    private $prototocols;

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
    public function setOrderNumber(string $orderNumber) : PackagesPickupCallResponseV1
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return ProtocolPCRV1
     */
    public function getPrototocols() : ProtocolPCRV1
    {
        return $this->prototocols;
    }

    /**
     * @param ProtocolPCRV1 $prototocols
     * @return $this
     */
    public function setPrototocols(ProtocolPCRV1 $prototocols) : PackagesPickupCallResponseV1
    {
        $this->prototocols = $prototocols;
        return $this;
    }


}

