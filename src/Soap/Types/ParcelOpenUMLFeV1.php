<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelOpenUMLFeV1
{

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $customerData1;

    /**
     * @var string
     */
    private $customerData2;

    /**
     * @var string
     */
    private $customerData3;

    /**
     * @var string
     */
    private $reference;

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
     * @return string
     */
    public function getContent() : ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return ParcelOpenUMLFeV1
     */
    public function setContent(?string $content) : ParcelOpenUMLFeV1
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData1() : ?string
    {
        return $this->customerData1;
    }

    /**
     * @param string $customerData1
     * @return ParcelOpenUMLFeV1
     */
    public function setCustomerData1(?string $customerData1) : ParcelOpenUMLFeV1
    {
        $this->customerData1 = $customerData1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData2() : ?string
    {
        return $this->customerData2;
    }

    /**
     * @param string $customerData2
     * @return ParcelOpenUMLFeV1
     */
    public function setCustomerData2(?string $customerData2) : ParcelOpenUMLFeV1
    {
        $this->customerData2 = $customerData2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData3() : ?string
    {
        return $this->customerData3;
    }

    /**
     * @param string $customerData3
     * @return ParcelOpenUMLFeV1
     */
    public function setCustomerData3(?string $customerData3) : ParcelOpenUMLFeV1
    {
        $this->customerData3 = $customerData3;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() : ?string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return ParcelOpenUMLFeV1
     */
    public function setReference(?string $reference) : ParcelOpenUMLFeV1
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return int
     */
    public function getSizeX() : int
    {
        return $this->sizeX;
    }

    /**
     * @param int $sizeX
     * @return ParcelOpenUMLFeV1
     */
    public function setSizeX(int $sizeX) : ParcelOpenUMLFeV1
    {
        $this->sizeX = $sizeX;
        return $this;
    }

    /**
     * @return int
     */
    public function getSizeY() : int
    {
        return $this->sizeY;
    }

    /**
     * @param int $sizeY
     * @return ParcelOpenUMLFeV1
     */
    public function setSizeY(int $sizeY) : ParcelOpenUMLFeV1
    {
        $this->sizeY = $sizeY;
        return $this;
    }

    /**
     * @return int
     */
    public function getSizeZ() : int
    {
        return $this->sizeZ;
    }

    /**
     * @param int $sizeZ
     * @return ParcelOpenUMLFeV1
     */
    public function setSizeZ(int $sizeZ) : ParcelOpenUMLFeV1
    {
        $this->sizeZ = $sizeZ;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return ParcelOpenUMLFeV1
     */
    public function setWeight(float $weight) : ParcelOpenUMLFeV1
    {
        $this->weight = $weight;
        return $this;
    }


}

