<?php

namespace T3ko\Dpd\Objects;

class Parcel
{
    /**
     * @var int
     */
    private $sizeX;

    /**
     * @var int
     */
    private $sizeY;

    /**
     * @var int
     */
    private $sizeZ;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var string
     */
    private $contents;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $customerNotes;

    /**
     * Parcel constructor.
     *
     * @param int    $sizeX
     * @param int    $sizeY
     * @param int    $sizeZ
     * @param float  $weight
     * @param string $reference
     * @param string $contents
     * @param string $customerNotes
     */
    public function __construct(int $sizeX, int $sizeY, int $sizeZ, float $weight, ?string $reference = null, ?string $contents = null, ?string $customerNotes = null)
    {
        $this->sizeX = $sizeX;
        $this->sizeY = $sizeY;
        $this->sizeZ = $sizeZ;
        $this->weight = $weight;
        $this->reference = $reference;
        $this->contents = $contents;
        $this->customerNotes = $customerNotes;
    }

    /**
     * @return int
     */
    public function getSizeX(): int
    {
        return $this->sizeX;
    }

    /**
     * @return int
     */
    public function getSizeY(): int
    {
        return $this->sizeY;
    }

    /**
     * @return int
     */
    public function getSizeZ(): int
    {
        return $this->sizeZ;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getContents(): ?string
    {
        return $this->contents;
    }

    /**
     * @return string
     */
    public function getReference() : ?string
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getCustomerNotes(): ?string
    {
        return $this->customerNotes;
    }

    /**
     * @param string $contents
     */
    public function setContents(string $contents): void
    {
        $this->contents = $contents;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @param string $customerNotes
     */
    public function setCustomerNotes(string $customerNotes): void
    {
        $this->customerNotes = $customerNotes;
    }




}
