<?php

namespace T3ko\Dpd\Soap\Types;

class CustomerEventV3
{

    /**
     * @var string
     */
    private $businessCode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $depot;

    /**
     * @var string
     */
    private $depotName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var customerEventDataV3[]
     */
    private $eventDataList;

    /**
     * @var string
     */
    private $eventTime;

    /**
     * @var int
     */
    private $objectId;

    /**
     * @var string
     */
    private $packageReference;

    /**
     * @var string
     */
    private $parcelReference;

    /**
     * @var string
     */
    private $waybill;

    /**
     * @return string
     */
    public function getBusinessCode() : string
    {
        return $this->businessCode;
    }

    /**
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getDepot() : string
    {
        return $this->depot;
    }

    /**
     * @return string
     */
    public function getDepotName() : string
    {
        return $this->depotName;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return CustomerEventDataV3[]
     */
    public function getEventDataList() : ?array
    {
        return $this->eventDataList;
    }

    /**
     * @return string
     */
    public function getEventTime() : string
    {
        return $this->eventTime;
    }

    /**
     * @return int
     */
    public function getObjectId() : int
    {
        return $this->objectId;
    }

    /**
     * @return string
     */
    public function getPackageReference() : string
    {
        return $this->packageReference;
    }

    /**
     * @return string
     */
    public function getParcelReference() : string
    {
        return $this->parcelReference;
    }

    /**
     * @return string
     */
    public function getWaybill() : string
    {
        return $this->waybill;
    }


}

