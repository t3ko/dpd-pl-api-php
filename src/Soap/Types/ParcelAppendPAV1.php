<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelAppendPAV1
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
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content) : ParcelAppendPAV1
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData1() : string
    {
        return $this->customerData1;
    }

    /**
     * @param string $customerData1
     * @return $this
     */
    public function setCustomerData1(string $customerData1) : ParcelAppendPAV1
    {
        $this->customerData1 = $customerData1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData2() : string
    {
        return $this->customerData2;
    }

    /**
     * @param string $customerData2
     * @return $this
     */
    public function setCustomerData2(string $customerData2) : ParcelAppendPAV1
    {
        $this->customerData2 = $customerData2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData3() : string
    {
        return $this->customerData3;
    }

    /**
     * @param string $customerData3
     * @return $this
     */
    public function setCustomerData3(string $customerData3) : ParcelAppendPAV1
    {
        $this->customerData3 = $customerData3;
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
    public function setReference(string $reference) : ParcelAppendPAV1
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
     * @return $this
     */
    public function setSizeX(int $sizeX) : ParcelAppendPAV1
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
     * @return $this
     */
    public function setSizeY(int $sizeY) : ParcelAppendPAV1
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
     * @return $this
     */
    public function setSizeZ(int $sizeZ) : ParcelAppendPAV1
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
     * @return $this
     */
    public function setWeight(float $weight) : ParcelAppendPAV1
    {
        $this->weight = $weight;
        return $this;
    }


}

