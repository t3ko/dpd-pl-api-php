<?php

namespace T3ko\Dpd\Soap\Types;

class SessionDSPV2
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
    public function setPackages(Packages $packages) : SessionDSPV2
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
    public function setSessionId(int $sessionId) : SessionDSPV2
    {
        $this->sessionId = $sessionId;
        return $this;
    }


}

