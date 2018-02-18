<?php

namespace T3ko\Dpd\Soap\Types;

class DpdServicesParamsV1
{
    /**
     * @var string
     */
    private $documentId;

    /**
     * @var PickupAddressDSPV1
     */
    private $pickupAddress;

    /**
     * @var PolicyDSPEnumV1
     */
    private $policy;

    /**
     * @var SessionDSPV1
     */
    private $session;

    /**
     * @return string
     */
    public function getDocumentId() : ?string
    {
        return $this->documentId;
    }

    /**
     * @param string $documentId
     *
     * @return DpdServicesParamsV1
     */
    public function setDocumentId(string $documentId) : DpdServicesParamsV1
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return PickupAddressDSPV1
     */
    public function getPickupAddress() : ?PickupAddressDSPV1
    {
        return $this->pickupAddress;
    }

    /**
     * @param PickupAddressDSPV1 $pickupAddress
     *
     * @return DpdServicesParamsV1
     */
    public function setPickupAddress(PickupAddressDSPV1 $pickupAddress) : DpdServicesParamsV1
    {
        $this->pickupAddress = $pickupAddress;

        return $this;
    }

    /**
     * @return PolicyDSPEnumV1
     */
    public function getPolicy() : PolicyDSPEnumV1
    {
        return $this->policy;
    }

    /**
     * @param PolicyDSPEnumV1 $policy
     *
     * @return DpdServicesParamsV1
     */
    public function setPolicy(PolicyDSPEnumV1 $policy) : DpdServicesParamsV1
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * @return SessionDSPV1
     */
    public function getSession() : SessionDSPV1
    {
        return $this->session;
    }

    /**
     * @param SessionDSPV1 $session
     *
     * @return DpdServicesParamsV1
     */
    public function setSession(SessionDSPV1 $session) : DpdServicesParamsV1
    {
        $this->session = $session;

        return $this;
    }
}
