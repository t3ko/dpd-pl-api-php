<?php

namespace T3ko\Dpd\Objects;

class RegisteredPackage
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
     * @var RegisteredParcel[]
     */
    private $parcels;

    /**
     * RegisteredPackage constructor.
     *
     * @param int    $id
     * @param string $status
     * @param string $reference
     * @param ValidationInfo[] $validationDetails
     * @param RegisteredParcel[] $parcels
     */
    public function __construct(int $id, string $status, ?string $reference, array $validationDetails, array $parcels)
    {
        $this->id = $id;
        $this->status = $status;
        $this->reference = $reference;
        $this->validationDetails = $validationDetails;
        $this->parcels = $parcels;
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
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @return ValidationInfo[]
     */
    public function getValidationDetails() : array
    {
        return $this->validationDetails;
    }

    /**
     * @return RegisteredParcel[]
     */
    public function getParcels(): array
    {
        return $this->parcels;
    }
}
