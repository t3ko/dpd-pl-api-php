<?php

namespace T3ko\Dpd\Soap\Types;

class PickupCustomerDPPV1
{

    /**
     * @var string
     */
    private $customerFullName;

    /**
     * @var string
     */
    private $customerName;

    /**
     * @var string
     */
    private $customerPhone;

    /**
     * @return string
     */
    public function getCustomerFullName() : string
    {
        return $this->customerFullName;
    }

    /**
     * @param string $customerFullName
     * @return $this
     */
    public function setCustomerFullName(string $customerFullName) : PickupCustomerDPPV1
    {
        $this->customerFullName = $customerFullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName() : string
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     * @return $this
     */
    public function setCustomerName(string $customerName) : PickupCustomerDPPV1
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPhone() : string
    {
        return $this->customerPhone;
    }

    /**
     * @param string $customerPhone
     * @return $this
     */
    public function setCustomerPhone(string $customerPhone) : PickupCustomerDPPV1
    {
        $this->customerPhone = $customerPhone;
        return $this;
    }


}

