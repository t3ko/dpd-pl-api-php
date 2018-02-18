<?php

namespace T3ko\Dpd\Soap\Types;

class DpdPickupCallParamsV1
{
    /**
     * @var ContactInfoDPPV1
     */
    private $contactInfo;

    /**
     * @var PickupAddressDSPV1
     */
    private $pickupAddress;

    /**
     * @var \DateTime
     */
    private $pickupDate;

    /**
     * @var string
     */
    private $pickupTimeFrom;

    /**
     * @var string
     */
    private $pickupTimeTo;

    /**
     * @var PolicyDPPEnumV1
     */
    private $policy;

    /**
     * @var ProtocolDPPV1
     */
    private $protocols;

    /**
     * @return ContactInfoDPPV1
     */
    public function getContactInfo() : ContactInfoDPPV1
    {
        return $this->contactInfo;
    }

    /**
     * @param ContactInfoDPPV1 $contactInfo
     *
     * @return $this
     */
    public function setContactInfo(ContactInfoDPPV1 $contactInfo) : DpdPickupCallParamsV1
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    /**
     * @return PickupAddressDSPV1
     */
    public function getPickupAddress() : PickupAddressDSPV1
    {
        return $this->pickupAddress;
    }

    /**
     * @param PickupAddressDSPV1 $pickupAddress
     *
     * @return $this
     */
    public function setPickupAddress(PickupAddressDSPV1 $pickupAddress) : DpdPickupCallParamsV1
    {
        $this->pickupAddress = $pickupAddress;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickupDate() : \DateTime
    {
        return $this->pickupDate;
    }

    /**
     * @param \DateTime $pickupDate
     *
     * @return $this
     */
    public function setPickupDate($pickupDate) : DpdPickupCallParamsV1
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeFrom() : string
    {
        return $this->pickupTimeFrom;
    }

    /**
     * @param string $pickupTimeFrom
     *
     * @return $this
     */
    public function setPickupTimeFrom(string $pickupTimeFrom) : DpdPickupCallParamsV1
    {
        $this->pickupTimeFrom = $pickupTimeFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo() : string
    {
        return $this->pickupTimeTo;
    }

    /**
     * @param string $pickupTimeTo
     *
     * @return $this
     */
    public function setPickupTimeTo(string $pickupTimeTo) : DpdPickupCallParamsV1
    {
        $this->pickupTimeTo = $pickupTimeTo;

        return $this;
    }

    /**
     * @return PolicyDPPEnumV1
     */
    public function getPolicy() : PolicyDPPEnumV1
    {
        return $this->policy;
    }

    /**
     * @param PolicyDPPEnumV1 $policy
     *
     * @return $this
     */
    public function setPolicy(PolicyDPPEnumV1 $policy) : DpdPickupCallParamsV1
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * @return ProtocolDPPV1
     */
    public function getProtocols() : ProtocolDPPV1
    {
        return $this->protocols;
    }

    /**
     * @param ProtocolDPPV1 $protocols
     *
     * @return $this
     */
    public function setProtocols(ProtocolDPPV1 $protocols) : DpdPickupCallParamsV1
    {
        $this->protocols = $protocols;

        return $this;
    }
}
