<?php

namespace T3ko\Dpd\Soap\Types;

class StatusInfoDGRV1
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var StatusDGREnumV1
     */
    private $status;

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description) : StatusInfoDGRV1
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return StatusDGREnumV1
     */
    public function getStatus() : StatusDGREnumV1
    {
        return $this->status;
    }

    /**
     * @param StatusDGREnumV1 $status
     * @return $this
     */
    public function setStatus(StatusDGREnumV1 $status) : StatusInfoDGRV1
    {
        $this->status = $status;
        return $this;
    }


}

