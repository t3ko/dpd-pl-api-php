<?php

namespace T3ko\Dpd\Soap\Types;

class PackagePGRV1
{

    /**
     * @var InvalidFieldPGRV1
     */
    private $invalidFields;

    /**
     * @var int
     */
    private $packageId;

    /**
     * @var ParcelPGRV1
     */
    private $parcels;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var ValidationStatusPGREnumV1
     */
    private $status;

    /**
     * @return InvalidFieldPGRV1
     */
    public function getInvalidFields() : InvalidFieldPGRV1
    {
        return $this->invalidFields;
    }

    /**
     * @param InvalidFieldPGRV1 $invalidFields
     * @return $this
     */
    public function setInvalidFields(InvalidFieldPGRV1 $invalidFields) : PackagePGRV1
    {
        $this->invalidFields = $invalidFields;
        return $this;
    }

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
    public function setPackageId(int $packageId) : PackagePGRV1
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return ParcelPGRV1
     */
    public function getParcels() : ParcelPGRV1
    {
        return $this->parcels;
    }

    /**
     * @param ParcelPGRV1 $parcels
     * @return $this
     */
    public function setParcels(ParcelPGRV1 $parcels) : PackagePGRV1
    {
        $this->parcels = $parcels;
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
    public function setReference(string $reference) : PackagePGRV1
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return ValidationStatusPGREnumV1
     */
    public function getStatus() : ValidationStatusPGREnumV1
    {
        return $this->status;
    }

    /**
     * @param ValidationStatusPGREnumV1 $status
     * @return $this
     */
    public function setStatus(ValidationStatusPGREnumV1 $status) : PackagePGRV1
    {
        $this->status = $status;
        return $this;
    }


}

