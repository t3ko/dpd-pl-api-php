<?php

namespace T3ko\Dpd\Soap\Types;

class SessionPGRV2
{

    /**
     * @var string
     */
    private $Status;

    /**
     * @var int
     */
    private $SessionId;

    /**
     * @var \DateTime
     */
    private $BeginTime;

    /**
     * @var \DateTime
     */
    private $EndTime;

    /**
     * @var Packages
     */
    public $Packages;

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return $this
     */
    public function setStatus(string $Status) : SessionPGRV2
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getSessionId() : int
    {
        return $this->SessionId;
    }

    /**
     * @param int $SessionId
     * @return $this
     */
    public function setSessionId(int $SessionId) : SessionPGRV2
    {
        $this->SessionId = $SessionId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginTime() : \DateTime
    {
        return $this->BeginTime;
    }

    /**
     * @param \DateTime $BeginTime
     * @return $this
     */
    public function setBeginTime($BeginTime) : SessionPGRV2
    {
        $this->BeginTime = $BeginTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime() : \DateTime
    {
        return $this->EndTime;
    }

    /**
     * @param \DateTime $EndTime
     * @return $this
     */
    public function setEndTime($EndTime) : SessionPGRV2
    {
        $this->EndTime = $EndTime;
        return $this;
    }

    /**
     * @return array
     */
    public function getPackages() : array
    {
        return $this->Packages;
    }

    /**
     * @param PackagePGRV2[] $Packages
     * @return $this
     */
    public function setPackages(array $Packages) : SessionPGRV2
    {
        $this->Packages = $Packages;
        return $this;
    }


}

