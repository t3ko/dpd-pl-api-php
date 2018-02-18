<?php

namespace T3ko\Dpd\Soap\Types;

class PickupCallSimplifiedDetailsDPPV1
{

    /**
     * @var PickupPackagesParamsDPPV1
     */
    private $packagesParams;

    /**
     * @var PickupCustomerDPPV1
     */
    private $pickupCustomer;

    /**
     * @var PickupPayerDPPV1
     */
    private $pickupPayer;

    /**
     * @var PickupSenderDPPV1
     */
    private $pickupSender;

    /**
     * @return PickupPackagesParamsDPPV1
     */
    public function getPackagesParams() : PickupPackagesParamsDPPV1
    {
        return $this->packagesParams;
    }

    /**
     * @param PickupPackagesParamsDPPV1 $packagesParams
     * @return $this
     */
    public function setPackagesParams(PickupPackagesParamsDPPV1 $packagesParams) : PickupCallSimplifiedDetailsDPPV1
    {
        $this->packagesParams = $packagesParams;
        return $this;
    }

    /**
     * @return PickupCustomerDPPV1
     */
    public function getPickupCustomer() : PickupCustomerDPPV1
    {
        return $this->pickupCustomer;
    }

    /**
     * @param PickupCustomerDPPV1 $pickupCustomer
     * @return $this
     */
    public function setPickupCustomer(PickupCustomerDPPV1 $pickupCustomer) : PickupCallSimplifiedDetailsDPPV1
    {
        $this->pickupCustomer = $pickupCustomer;
        return $this;
    }

    /**
     * @return PickupPayerDPPV1
     */
    public function getPickupPayer() : PickupPayerDPPV1
    {
        return $this->pickupPayer;
    }

    /**
     * @param PickupPayerDPPV1 $pickupPayer
     * @return $this
     */
    public function setPickupPayer(PickupPayerDPPV1 $pickupPayer) : PickupCallSimplifiedDetailsDPPV1
    {
        $this->pickupPayer = $pickupPayer;
        return $this;
    }

    /**
     * @return PickupSenderDPPV1
     */
    public function getPickupSender() : PickupSenderDPPV1
    {
        return $this->pickupSender;
    }

    /**
     * @param PickupSenderDPPV1 $pickupSender
     * @return $this
     */
    public function setPickupSender(PickupSenderDPPV1 $pickupSender) : PickupCallSimplifiedDetailsDPPV1
    {
        $this->pickupSender = $pickupSender;
        return $this;
    }


}

