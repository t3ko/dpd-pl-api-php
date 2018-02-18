<?php

namespace T3ko\Dpd\Soap\Types;

class StatusInfoDGRV2
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
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
    public function setDescription(string $description) : StatusInfoDGRV2
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status) : StatusInfoDGRV2
    {
        $this->status = $status;
        return $this;
    }


}

