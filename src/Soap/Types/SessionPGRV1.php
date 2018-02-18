<?php

namespace T3ko\Dpd\Soap\Types;

class SessionPGRV1
{

    /**
     * @var \DateTime
     */
    private $beginTime;

    /**
     * @var \DateTime
     */
    private $endTime;

    /**
     * @var PackagePGRV1
     */
    private $packages;

    /**
     * @var int
     */
    private $sessionId;

    /**
     * @var ValidationStatusPGREnumV1
     */
    private $status;

    /**
     * @return \DateTime
     */
    public function getBeginTime() : \DateTime
    {
        return $this->beginTime;
    }

    /**
     * @param \DateTime $beginTime
     * @return $this
     */
    public function setBeginTime($beginTime) : SessionPGRV1
    {
        $this->beginTime = $beginTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime() : \DateTime
    {
        return $this->endTime;
    }

    /**
     * @param \DateTime $endTime
     * @return $this
     */
    public function setEndTime($endTime) : SessionPGRV1
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return PackagePGRV1
     */
    public function getPackages() : PackagePGRV1
    {
        return $this->packages;
    }

    /**
     * @param PackagePGRV1 $packages
     * @return $this
     */
    public function setPackages(PackagePGRV1 $packages) : SessionPGRV1
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
    public function setSessionId(int $sessionId) : SessionPGRV1
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return ValidationStatusPGREnumV1
     */
    public function getStatus() : ValidationStatusPGREnumV1
    {
        return $this->status;
    }

    /**
     * @param ValidationStatusPGREnumV1 $status
     * @return $this
     */
    public function setStatus(ValidationStatusPGREnumV1 $status) : SessionPGRV1
    {
        $this->status = $status;
        return $this;
    }


}

