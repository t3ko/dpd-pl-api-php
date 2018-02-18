<?php

namespace T3ko\Dpd\Soap\Types;

class SessionDSPV1
{

    /**
     * @var PackageDSPV1[]
     */
    private $packages;

    /**
     * @var int
     */
    private $sessionId;

    /**
     * @var SessionTypeDSPEnumV1
     */
    private $sessionType;

    /**
     * @return PackageDSPV1[]
     */
    public function getPackages() : array
    {
        return $this->packages;
    }

    /**
     * @param array $packages
     * @return SessionDSPV1
     */
    public function setPackages(array $packages) : SessionDSPV1
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * @return int
     */
    public function getSessionId() : ?int
    {
        return $this->sessionId;
    }

    /**
     * @param int $sessionId
     * @return SessionDSPV1
     */
    public function setSessionId(int $sessionId) : SessionDSPV1
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return SessionTypeDSPEnumV1
     */
    public function getSessionType() : ?SessionTypeDSPEnumV1
    {
        return $this->sessionType;
    }

    /**
     * @param SessionTypeDSPEnumV1 $sessionType
     * @return SessionDSPV1
     */
    public function setSessionType(SessionTypeDSPEnumV1 $sessionType) : SessionDSPV1
    {
        $this->sessionType = $sessionType;
        return $this;
    }


}

