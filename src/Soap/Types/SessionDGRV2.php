<?php

namespace T3ko\Dpd\Soap\Types;

class SessionDGRV2
{

    /**
     * @var Packages
     */
    private $packages;

    /**
     * @var int
     */
    private $sessionId;

    /**
     * @var StatusInfoDGRV2
     */
    private $statusInfo;

    /**
     * @return Packages
     */
    public function getPackages() : Packages
    {
        return $this->packages;
    }

    /**
     * @param Packages $packages
     * @return $this
     */
    public function setPackages(Packages $packages) : SessionDGRV2
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * @return int
     */
    public function getSessionId() : int
    {
        return $this->sessionId;
    }

    /**
     * @param int $sessionId
     * @return $this
     */
    public function setSessionId(int $sessionId) : SessionDGRV2
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return StatusInfoDGRV2
     */
    public function getStatusInfo() : StatusInfoDGRV2
    {
        return $this->statusInfo;
    }

    /**
     * @param StatusInfoDGRV2 $statusInfo
     * @return $this
     */
    public function setStatusInfo(StatusInfoDGRV2 $statusInfo) : SessionDGRV2
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

