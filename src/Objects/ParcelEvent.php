<?php


namespace T3ko\Dpd\Objects;

class ParcelEvent
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
     * @var ParcelEventAdditionalData[]
     */
    private $additionalData;

    /**
     * @var \DateTime
     */
    private $eventTime;

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
     * ParcelEvent constructor.
     * @param string $businessCode
     * @param string $country
     * @param string $depot
     * @param string $depotName
     * @param string $description
     * @param ParcelEventAdditionalData[] $additionalData
     * @param \DateTime $eventTime
     * @param string $packageReference
     * @param string $parcelReference
     * @param string $waybill
     */
    public function __construct($businessCode, $country, $depot, $depotName, $description, array $additionalData, $eventTime, $packageReference, $parcelReference, $waybill)
    {
        $this->businessCode = $businessCode;
        $this->country = $country;
        $this->depot = $depot;
        $this->depotName = $depotName;
        $this->description = $description;
        $this->additionalData = $additionalData;
        $this->eventTime = $eventTime;
        $this->packageReference = $packageReference;
        $this->parcelReference = $parcelReference;
        $this->waybill = $waybill;
    }

    /**
     * @return string
     */
    public function getBusinessCode(): string
    {
        return $this->businessCode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getDepot(): string
    {
        return $this->depot;
    }

    /**
     * @return string
     */
    public function getDepotName(): string
    {
        return $this->depotName;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return ParcelEventAdditionalData[]
     */
    public function getAdditionalData(): array
    {
        return $this->additionalData;
    }

    /**
     * @return \DateTime
     */
    public function getEventTime(): \DateTime
    {
        return $this->eventTime;
    }

    /**
     * @return string
     */
    public function getPackageReference(): string
    {
        return $this->packageReference;
    }

    /**
     * @return string
     */
    public function getParcelReference(): string
    {
        return $this->parcelReference;
    }

    /**
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }




}