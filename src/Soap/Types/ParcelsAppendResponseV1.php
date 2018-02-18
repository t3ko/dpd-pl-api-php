<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelsAppendResponseV1
{

    /**
     * @var InvalidFieldPAV1
     */
    private $invalidFields;

    /**
     * @var ParcelsAppendParcelPAV1
     */
    private $parcels;

    /**
     * @var string
     */
    private $status;

    /**
     * @return InvalidFieldPAV1
     */
    public function getInvalidFields() : InvalidFieldPAV1
    {
        return $this->invalidFields;
    }

    /**
     * @param InvalidFieldPAV1 $invalidFields
     * @return $this
     */
    public function setInvalidFields(InvalidFieldPAV1 $invalidFields) : ParcelsAppendResponseV1
    {
        $this->invalidFields = $invalidFields;
        return $this;
    }

    /**
     * @return ParcelsAppendParcelPAV1
     */
    public function getParcels() : ParcelsAppendParcelPAV1
    {
        return $this->parcels;
    }

    /**
     * @param ParcelsAppendParcelPAV1 $parcels
     * @return $this
     */
    public function setParcels(ParcelsAppendParcelPAV1 $parcels) : ParcelsAppendResponseV1
    {
        $this->parcels = $parcels;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status) : ParcelsAppendResponseV1
    {
        $this->status = $status;
        return $this;
    }


}

