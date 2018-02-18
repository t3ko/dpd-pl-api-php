<?php

namespace T3ko\Dpd\Soap\Types;

class DpdServicesParamsV2
{
    /**
     * @var PolicyDSPEnumV2
     */
    private $policy;

    /**
     * @var SessionDSPV2
     */
    private $session;

    /**
     * @var PickupAddressDSPV2
     */
    private $pickupAddress;

    /**
     * @var DeliveryDestinations
     */
    private $deliveryDestinations;

    /**
     * @var bool
     */
    private $genProtForNonMatching;

    /**
     * @return PolicyDSPEnumV2
     */
    public function getPolicy() : PolicyDSPEnumV2
    {
        return $this->policy;
    }

    /**
     * @param PolicyDSPEnumV2 $policy
     *
     * @return $this
     */
    public function setPolicy(PolicyDSPEnumV2 $policy) : DpdServicesParamsV2
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * @return SessionDSPV2
     */
    public function getSession() : SessionDSPV2
    {
        return $this->session;
    }

    /**
     * @param SessionDSPV2 $session
     *
     * @return $this
     */
    public function setSession(SessionDSPV2 $session) : DpdServicesParamsV2
    {
        $this->session = $session;

        return $this;
    }

    /**
     * @return PickupAddressDSPV2
     */
    public function getPickupAddress() : PickupAddressDSPV2
    {
        return $this->pickupAddress;
    }

    /**
     * @param PickupAddressDSPV2 $pickupAddress
     *
     * @return $this
     */
    public function setPickupAddress(PickupAddressDSPV2 $pickupAddress) : DpdServicesParamsV2
    {
        $this->pickupAddress = $pickupAddress;

        return $this;
    }

    /**
     * @return DeliveryDestinations
     */
    public function getDeliveryDestinations() : DeliveryDestinations
    {
        return $this->deliveryDestinations;
    }

    /**
     * @param DeliveryDestinations $deliveryDestinations
     *
     * @return $this
     */
    public function setDeliveryDestinations(DeliveryDestinations $deliveryDestinations) : DpdServicesParamsV2
    {
        $this->deliveryDestinations = $deliveryDestinations;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGenProtForNonMatching() : bool
    {
        return $this->genProtForNonMatching;
    }

    /**
     * @param bool $genProtForNonMatching
     *
     * @return $this
     */
    public function setGenProtForNonMatching(bool $genProtForNonMatching) : DpdServicesParamsV2
    {
        $this->genProtForNonMatching = $genProtForNonMatching;

        return $this;
    }
}
