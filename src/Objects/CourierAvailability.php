<?php

namespace T3ko\Dpd\Objects;

class CourierAvailability
{
    /**
     * @var string
     */
    private $offset;

    /**
     * @var string
     */
    private $range;

    /**
     * CourierAvailability constructor.
     *
     * @param string $offset
     * @param string $range
     */
    public function __construct($offset, $range)
    {
        $this->offset = $offset;
        $this->range = $range;
    }

    /**
     * @return string
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * @return string
     */
    public function getRange(): string
    {
        return $this->range;
    }
}
