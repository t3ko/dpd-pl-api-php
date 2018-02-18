<?php

namespace T3ko\Dpd\Soap\Types;

class PickupPackagesParamsDPPV1
{

    /**
     * @var bool
     */
    private $dox;

    /**
     * @var int
     */
    private $doxCount;

    /**
     * @var bool
     */
    private $pallet;

    /**
     * @var float
     */
    private $palletMaxHeight;

    /**
     * @var float
     */
    private $palletMaxWeight;

    /**
     * @var int
     */
    private $palletsCount;

    /**
     * @var float
     */
    private $palletsWeight;

    /**
     * @var float
     */
    private $parcelMaxDepth;

    /**
     * @var float
     */
    private $parcelMaxHeight;

    /**
     * @var float
     */
    private $parcelMaxWeight;

    /**
     * @var float
     */
    private $parcelMaxWidth;

    /**
     * @var int
     */
    private $parcelsCount;

    /**
     * @var float
     */
    private $parcelsWeight;

    /**
     * @var bool
     */
    private $standardParcel;

    /**
     * @return bool
     */
    public function isDox() : bool
    {
        return $this->dox;
    }

    /**
     * @param bool $dox
     * @return $this
     */
    public function setDox(bool $dox) : PickupPackagesParamsDPPV1
    {
        $this->dox = $dox;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoxCount() : int
    {
        return $this->doxCount;
    }

    /**
     * @param int $doxCount
     * @return $this
     */
    public function setDoxCount(int $doxCount) : PickupPackagesParamsDPPV1
    {
        $this->doxCount = $doxCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPallet() : bool
    {
        return $this->pallet;
    }

    /**
     * @param bool $pallet
     * @return $this
     */
    public function setPallet(bool $pallet) : PickupPackagesParamsDPPV1
    {
        $this->pallet = $pallet;
        return $this;
    }

    /**
     * @return float
     */
    public function getPalletMaxHeight() : float
    {
        return $this->palletMaxHeight;
    }

    /**
     * @param float $palletMaxHeight
     * @return $this
     */
    public function setPalletMaxHeight(float $palletMaxHeight) : PickupPackagesParamsDPPV1
    {
        $this->palletMaxHeight = $palletMaxHeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getPalletMaxWeight() : float
    {
        return $this->palletMaxWeight;
    }

    /**
     * @param float $palletMaxWeight
     * @return $this
     */
    public function setPalletMaxWeight(float $palletMaxWeight) : PickupPackagesParamsDPPV1
    {
        $this->palletMaxWeight = $palletMaxWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getPalletsCount() : int
    {
        return $this->palletsCount;
    }

    /**
     * @param int $palletsCount
     * @return $this
     */
    public function setPalletsCount(int $palletsCount) : PickupPackagesParamsDPPV1
    {
        $this->palletsCount = $palletsCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPalletsWeight() : float
    {
        return $this->palletsWeight;
    }

    /**
     * @param float $palletsWeight
     * @return $this
     */
    public function setPalletsWeight(float $palletsWeight) : PickupPackagesParamsDPPV1
    {
        $this->palletsWeight = $palletsWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxDepth() : float
    {
        return $this->parcelMaxDepth;
    }

    /**
     * @param float $parcelMaxDepth
     * @return $this
     */
    public function setParcelMaxDepth(float $parcelMaxDepth) : PickupPackagesParamsDPPV1
    {
        $this->parcelMaxDepth = $parcelMaxDepth;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxHeight() : float
    {
        return $this->parcelMaxHeight;
    }

    /**
     * @param float $parcelMaxHeight
     * @return $this
     */
    public function setParcelMaxHeight(float $parcelMaxHeight) : PickupPackagesParamsDPPV1
    {
        $this->parcelMaxHeight = $parcelMaxHeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxWeight() : float
    {
        return $this->parcelMaxWeight;
    }

    /**
     * @param float $parcelMaxWeight
     * @return $this
     */
    public function setParcelMaxWeight(float $parcelMaxWeight) : PickupPackagesParamsDPPV1
    {
        $this->parcelMaxWeight = $parcelMaxWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxWidth() : float
    {
        return $this->parcelMaxWidth;
    }

    /**
     * @param float $parcelMaxWidth
     * @return $this
     */
    public function setParcelMaxWidth(float $parcelMaxWidth) : PickupPackagesParamsDPPV1
    {
        $this->parcelMaxWidth = $parcelMaxWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getParcelsCount() : int
    {
        return $this->parcelsCount;
    }

    /**
     * @param int $parcelsCount
     * @return $this
     */
    public function setParcelsCount(int $parcelsCount) : PickupPackagesParamsDPPV1
    {
        $this->parcelsCount = $parcelsCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelsWeight() : float
    {
        return $this->parcelsWeight;
    }

    /**
     * @param float $parcelsWeight
     * @return $this
     */
    public function setParcelsWeight(float $parcelsWeight) : PickupPackagesParamsDPPV1
    {
        $this->parcelsWeight = $parcelsWeight;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStandardParcel() : bool
    {
        return $this->standardParcel;
    }

    /**
     * @param bool $standardParcel
     * @return $this
     */
    public function setStandardParcel(bool $standardParcel) : PickupPackagesParamsDPPV1
    {
        $this->standardParcel = $standardParcel;
        return $this;
    }


}

