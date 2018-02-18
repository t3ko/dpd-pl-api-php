<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelsAppendSearchCriteriaPAV1
{

    /**
     * @var int
     */
    private $packageId;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $waybill;

    /**
     * @return int
     */
    public function getPackageId() : int
    {
        return $this->packageId;
    }

    /**
     * @param int $packageId
     * @return $this
     */
    public function setPackageId(int $packageId) : ParcelsAppendSearchCriteriaPAV1
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return $this
     */
    public function setReference(string $reference) : ParcelsAppendSearchCriteriaPAV1
    {
        $this->reference = $reference;
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
     * @return $this
     */
    public function setWaybill(string $waybill) : ParcelsAppendSearchCriteriaPAV1
    {
        $this->waybill = $waybill;
        return $this;
    }


}

