<?php

namespace T3ko\Dpd\Soap\Types;

class CustomerEventV1
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
    private $description;

    /**
     * @var string
     */
    private $eventData1;

    /**
     * @var string
     */
    private $eventData2;

    /**
     * @var string
     */
    private $eventData3;

    /**
     * @var string
     */
    private $eventTime;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $objectId;

    /**
     * @var string
     */
    private $operationType;

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
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getEventData1() : string
    {
        return $this->eventData1;
    }

    /**
     * @return string
     */
    public function getEventData2() : string
    {
        return $this->eventData2;
    }

    /**
     * @return string
     */
    public function getEventData3() : string
    {
        return $this->eventData3;
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
    public function getId() : int
    {
        return $this->id;
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
    public function getOperationType() : string
    {
        return $this->operationType;
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

