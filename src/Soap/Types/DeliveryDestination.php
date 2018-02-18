<?php

namespace T3ko\Dpd\Soap\Types;

class DeliveryDestination
{
    /**
     * @var DepotList
     */
    private $depotList;

    /**
     * @var string
     */
    private $destinationName;

    /**
     * @return DepotList
     */
    public function getDepotList() : DepotList
    {
        return $this->depotList;
    }

    /**
     * @param DepotList $depotList
     *
     * @return $this
     */
    public function setDepotList(DepotList $depotList) : DeliveryDestination
    {
        $this->depotList = $depotList;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationName() : string
    {
        return $this->destinationName;
    }

    /**
     * @param string $destinationName
     *
     * @return $this
     */
    public function setDestinationName(string $destinationName) : DeliveryDestination
    {
        $this->destinationName = $destinationName;

        return $this;
    }
}
