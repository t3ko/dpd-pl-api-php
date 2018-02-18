<?php

namespace T3ko\Dpd\Soap\Types;

class GetCourierOrderAvailabilityResponseV1
{

    /**
     * @var CourierOrderAvailabilityRangeV1[]
     */
    private $ranges;

    /**
     * @var string
     */
    private $status;

    /**
     * @return CourierOrderAvailabilityRangeV1[]
     */
    public function getRanges() : array
    {
        return $this->ranges;
    }

    /**
     * @param CourierOrderAvailabilityRangeV1[] $ranges
     * @return $this
     */
    public function setRanges(array $ranges) : GetCourierOrderAvailabilityResponseV1
    {
        $this->ranges = $ranges;
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
    public function setStatus(string $status) : GetCourierOrderAvailabilityResponseV1
    {
        $this->status = $status;
        return $this;
    }


}

