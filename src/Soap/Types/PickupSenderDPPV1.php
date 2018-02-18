<?php

namespace T3ko\Dpd\Soap\Types;

class PickupSenderDPPV1
{

    /**
     * @var string
     */
    private $senderAddress;

    /**
     * @var string
     */
    private $senderCity;

    /**
     * @var string
     */
    private $senderFullName;

    /**
     * @var string
     */
    private $senderName;

    /**
     * @var string
     */
    private $senderPhone;

    /**
     * @var string
     */
    private $senderPostalCode;

    /**
     * @return string
     */
    public function getSenderAddress() : string
    {
        return $this->senderAddress;
    }

    /**
     * @param string $senderAddress
     * @return $this
     */
    public function setSenderAddress(string $senderAddress) : PickupSenderDPPV1
    {
        $this->senderAddress = $senderAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderCity() : string
    {
        return $this->senderCity;
    }

    /**
     * @param string $senderCity
     * @return $this
     */
    public function setSenderCity(string $senderCity) : PickupSenderDPPV1
    {
        $this->senderCity = $senderCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderFullName() : string
    {
        return $this->senderFullName;
    }

    /**
     * @param string $senderFullName
     * @return $this
     */
    public function setSenderFullName(string $senderFullName) : PickupSenderDPPV1
    {
        $this->senderFullName = $senderFullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderName() : string
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     * @return $this
     */
    public function setSenderName(string $senderName) : PickupSenderDPPV1
    {
        $this->senderName = $senderName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderPhone() : string
    {
        return $this->senderPhone;
    }

    /**
     * @param string $senderPhone
     * @return $this
     */
    public function setSenderPhone(string $senderPhone) : PickupSenderDPPV1
    {
        $this->senderPhone = $senderPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderPostalCode() : string
    {
        return $this->senderPostalCode;
    }

    /**
     * @param string $senderPostalCode
     * @return $this
     */
    public function setSenderPostalCode(string $senderPostalCode) : PickupSenderDPPV1
    {
        $this->senderPostalCode = $senderPostalCode;
        return $this;
    }


}

