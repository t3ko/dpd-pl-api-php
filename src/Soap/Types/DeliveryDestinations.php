<?php

namespace T3ko\Dpd\Soap\Types;

class DeliveryDestinations
{
    /**
     * @var DeliveryDestination
     */
    private $deliveryDestination;

    /**
     * @return DeliveryDestination
     */
    public function getDeliveryDestination() : DeliveryDestination
    {
        return $this->deliveryDestination;
    }

    /**
     * @param DeliveryDestination $deliveryDestination
     *
     * @return $this
     */
    public function setDeliveryDestination(DeliveryDestination $deliveryDestination) : DeliveryDestinations
    {
        $this->deliveryDestination = $deliveryDestination;

        return $this;
    }
}
