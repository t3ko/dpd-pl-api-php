<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelsAppendV1
{

    /**
     * @var ParcelsAppendSearchCriteriaPAV1
     */
    private $packagesearchCriteria;

    /**
     * @var ParcelAppendPAV1
     */
    private $parcels;

    /**
     * @return ParcelsAppendSearchCriteriaPAV1
     */
    public function getPackagesearchCriteria() : ParcelsAppendSearchCriteriaPAV1
    {
        return $this->packagesearchCriteria;
    }

    /**
     * @param ParcelsAppendSearchCriteriaPAV1 $packagesearchCriteria
     * @return $this
     */
    public function setPackagesearchCriteria(ParcelsAppendSearchCriteriaPAV1 $packagesearchCriteria) : ParcelsAppendV1
    {
        $this->packagesearchCriteria = $packagesearchCriteria;
        return $this;
    }

    /**
     * @return ParcelAppendPAV1
     */
    public function getParcels() : ParcelAppendPAV1
    {
        return $this->parcels;
    }

    /**
     * @param ParcelAppendPAV1 $parcels
     * @return $this
     */
    public function setParcels(ParcelAppendPAV1 $parcels) : ParcelsAppendV1
    {
        $this->parcels = $parcels;
        return $this;
    }


}

