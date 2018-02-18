<?php

namespace T3ko\Dpd\Soap\Types;

class StatusInfoPCRV1
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var StatusPCREnumV1
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
    public function setDescription(string $description) : StatusInfoPCRV1
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return StatusPCREnumV1
     */
    public function getStatus() : StatusPCREnumV1
    {
        return $this->status;
    }

    /**
     * @param StatusPCREnumV1 $status
     * @return $this
     */
    public function setStatus(StatusPCREnumV1 $status) : StatusInfoPCRV1
    {
        $this->status = $status;
        return $this;
    }


}

