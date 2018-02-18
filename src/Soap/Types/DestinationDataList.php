<?php

namespace T3ko\Dpd\Soap\Types;

class DestinationDataList
{
    /**
     * @var DestinationsData
     */
    private $destinationsData;

    /**
     * @return DestinationsData
     */
    public function getDestinationsData() : DestinationsData
    {
        return $this->destinationsData;
    }

    /**
     * @param DestinationsData $destinationsData
     *
     * @return $this
     */
    public function setDestinationsData(DestinationsData $destinationsData) : DestinationDataList
    {
        $this->destinationsData = $destinationsData;

        return $this;
    }
}
