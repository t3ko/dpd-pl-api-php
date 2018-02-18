<?php

namespace T3ko\Dpd\Soap\Types;

class CourierOrderAvailabilityRangeV1
{
    /**
     * @var int
     */
    private $offset;

    /**
     * @var string
     */
    private $range;

    /**
     * @return int
     */
    public function getOffset() : ? int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function setOffset(int $offset) : CourierOrderAvailabilityRangeV1
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return string
     */
    public function getRange() : ? string
    {
        return $this->range;
    }

    /**
     * @param string $range
     *
     * @return $this
     */
    public function setRange(string $range) : CourierOrderAvailabilityRangeV1
    {
        $this->range = $range;

        return $this;
    }
}
