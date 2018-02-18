<?php

namespace T3ko\Dpd\Soap\Types;

class FindPostalCodeResponseV1
{
    /**
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus(string $status) : FindPostalCodeResponseV1
    {
        $this->status = $status;

        return $this;
    }
}
