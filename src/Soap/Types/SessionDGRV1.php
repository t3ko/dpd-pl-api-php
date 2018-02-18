<?php

namespace T3ko\Dpd\Soap\Types;

class SessionDGRV1
{

    /**
     * @var PackageDGRV1
     */
    private $packages;

    /**
     * @var int
     */
    private $sessionId;

    /**
     * @var StatusInfoDGRV1
     */
    private $statusInfo;

    /**
     * @return PackageDGRV1
     */
    public function getPackages() : PackageDGRV1
    {
        return $this->packages;
    }

    /**
     * @param PackageDGRV1 $packages
     * @return $this
     */
    public function setPackages(PackageDGRV1 $packages) : SessionDGRV1
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
    public function setSessionId(int $sessionId) : SessionDGRV1
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return StatusInfoDGRV1
     */
    public function getStatusInfo() : StatusInfoDGRV1
    {
        return $this->statusInfo;
    }

    /**
     * @param StatusInfoDGRV1 $statusInfo
     * @return $this
     */
    public function setStatusInfo(StatusInfoDGRV1 $statusInfo) : SessionDGRV1
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

