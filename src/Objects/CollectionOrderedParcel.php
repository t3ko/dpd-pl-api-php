<?php


namespace T3ko\Dpd\Objects;


class CollectionOrderedParcel
{
    /**
     * @var string
     */
    private $parcelId;

    /**
     * @var string
     */
    private $waybill;

    /**
     * CollectionOrderedParcel constructor.
     * @param string $parcelId
     * @param string $waybill
     */
    public function __construct($parcelId, $waybill)
    {
        $this->parcelId = $parcelId;
        $this->waybill = $waybill;
    }

    /**
     * @return string
     */
    public function getParcelId(): string
    {
        return $this->parcelId;
    }

    /**
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }
}