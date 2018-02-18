<?php

namespace T3ko\Dpd\Soap\Types;

class DpdParcelBusinessEventV1
{
    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $eventCode;

    /**
     * @var DpdParcelBusinessEventDataV1
     */
    private $eventDataList;

    /**
     * @var \DateTime
     */
    private $eventTime;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $waybill;

    /**
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return $this
     */
    public function setCountryCode(string $countryCode) : DpdParcelBusinessEventV1
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventCode() : string
    {
        return $this->eventCode;
    }

    /**
     * @param string $eventCode
     *
     * @return $this
     */
    public function setEventCode(string $eventCode) : DpdParcelBusinessEventV1
    {
        $this->eventCode = $eventCode;

        return $this;
    }

    /**
     * @return DpdParcelBusinessEventDataV1
     */
    public function getEventDataList() : DpdParcelBusinessEventDataV1
    {
        return $this->eventDataList;
    }

    /**
     * @param DpdParcelBusinessEventDataV1 $eventDataList
     *
     * @return $this
     */
    public function setEventDataList(DpdParcelBusinessEventDataV1 $eventDataList) : DpdParcelBusinessEventV1
    {
        $this->eventDataList = $eventDataList;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEventTime() : \DateTime
    {
        return $this->eventTime;
    }

    /**
     * @param \DateTime $eventTime
     *
     * @return $this
     */
    public function setEventTime($eventTime) : DpdParcelBusinessEventV1
    {
        $this->eventTime = $eventTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode(string $postalCode) : DpdParcelBusinessEventV1
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getWaybill() : string
    {
        return $this->waybill;
    }

    /**
     * @param string $waybill
     *
     * @return $this
     */
    public function setWaybill(string $waybill) : DpdParcelBusinessEventV1
    {
        $this->waybill = $waybill;

        return $this;
    }
}
