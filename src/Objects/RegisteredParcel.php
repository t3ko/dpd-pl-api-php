<?php

namespace T3ko\Dpd\Objects;

class RegisteredParcel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var ValidationInfo[]
     */
    private $validationDetails;

    /**
     * @var string
     */
    private $waybill;

    /**
     * RegisteredParcel constructor.
     *
     * @param int              $id
     * @param string           $status
     * @param string           $reference
     * @param ValidationInfo[] $validationDetails
     * @param string           $waybill
     */
    public function __construct($id, $status, $reference, array $validationDetails, $waybill)
    {
        $this->id = $id;
        $this->status = $status;
        $this->reference = $reference;
        $this->validationDetails = $validationDetails;
        $this->waybill = $waybill;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @return ValidationInfo[]
     */
    public function getValidationDetails(): array
    {
        return $this->validationDetails;
    }

    /**
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }
}
