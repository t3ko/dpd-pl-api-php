<?php

namespace T3ko\Dpd\Soap\Types;

class Parcels
{

    /**
     * @var ParcelDSPV2
     */
    private $parcel;

    /**
     * @return ParcelDSPV2
     */
    public function getParcel() : ParcelDSPV2
    {
        return $this->parcel;
    }

    /**
     * @param ParcelDSPV2 $parcel
     * @return $this
     */
    public function setParcel(ParcelDSPV2 $parcel) : Parcels
    {
        $this->parcel = $parcel;
        return $this;
    }


}

