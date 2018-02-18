<?php

namespace T3ko\Dpd\Objects;

use T3ko\Dpd\Objects\Enum\Currency;
use T3ko\Dpd\Objects\Enum\GuaranteeType;
use T3ko\Dpd\Objects\Enum\SelfCollectionReceiver;

class Services
{
    /**
     * @var bool
     */
    private $carryIn = false;

    /**
     * @var int
     */
    private $codAmount;

    /**
     * @var Currency
     */
    private $codCurrency;

    /**
     * @var bool
     */
    private $cud = false;

    /**
     * @var int
     */
    private $declaredValueAmount;

    /**
     * @var Currency
     */
    private $declaredValueCurrency;

    /**
     * @var bool
     */
    private $dedicatedDelivery = false;

    /**
     * @var bool
     */
    private $documentsInternational = false;

    /**
     * @var bool
     */
    private $dox = false;

    /**
     * @var bool
     */
    private $dpdExpress = false;

    /**
     * @var string
     */
    private $dpdPickupPudo;
    /**
     * @var int
     */
    private $dutyAmount;

    /**
     * @var Currency
     */
    private $dutyCurrency;

    /**
     * @var GuaranteeType
     */
    private $guaranteeType;

    /**
     * @var string
     */
    private $guaranteeValue;

    /**
     * @var bool
     */
    private $inPers = false;

    /**
     * @var bool
     */
    private $pallet = false;

    /**
     * @var bool
     */
    private $privPers = false;

    /**
     * @var bool
     */
    private $rod = false;

    /**
     * @var SelfCollectionReceiver
     */
    private $selfCollection;

    /**
     * @var bool
     */
    private $tires = false;

    /**
     * @var bool
     */
    private $tiresExport = false;

    /**
     * @return bool
     */
    public function isCarryIn(): bool
    {
        return $this->carryIn;
    }

    /**
     * @param bool $carryIn
     *
     * @return Services
     */
    public function setCarryIn(bool $carryIn): Services
    {
        $this->carryIn = $carryIn;

        return $this;
    }

    /**
     * @return float
     */
    public function getCodAmount(): ? float
    {
        return $this->codAmount;
    }

    /**
     * @param float $codAmount
     *
     * @return Services
     */
    public function setCodAmount(float $codAmount) : Services
    {
        $this->codAmount = $codAmount;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getCodCurrency(): ? Currency
    {
        return $this->codCurrency;
    }

    /**
     * @param Currency $codCurrency
     *
     * @return Services
     */
    public function setCodCurrency(Currency $codCurrency) : Services
    {
        $this->codCurrency = $codCurrency;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCud(): bool
    {
        return $this->cud;
    }

    /**
     * @param bool $cud
     *
     * @return Services
     */
    public function setCud(bool $cud): Services
    {
        $this->cud = $cud;

        return $this;
    }

    /**
     * @return float
     */
    public function getDeclaredValueAmount(): ? float
    {
        return $this->declaredValueAmount;
    }

    /**
     * @param float $declaredValueAmount
     *
     * @return Services
     */
    public function setDeclaredValueAmount(float $declaredValueAmount) : Services
    {
        $this->declaredValueAmount = $declaredValueAmount;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getDeclaredValueCurrency(): ? Currency
    {
        return $this->declaredValueCurrency;
    }

    /**
     * @param Currency $declaredValueCurrency
     *
     * @return Services
     */
    public function setDeclaredValueCurrency(Currency $declaredValueCurrency) : Services
    {
        $this->declaredValueCurrency = $declaredValueCurrency;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDedicatedDelivery(): bool
    {
        return $this->dedicatedDelivery;
    }

    /**
     * @param bool $dedicatedDelivery
     *
     * @return Services
     */
    public function setDedicatedDelivery(bool $dedicatedDelivery): Services
    {
        $this->dedicatedDelivery = $dedicatedDelivery;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDox(): bool
    {
        return $this->dox;
    }

    /**
     * @param bool $dox
     *
     * @return Services
     */
    public function setDox(bool $dox): Services
    {
        $this->dox = $dox;

        return $this;
    }

    /**
     * @return float
     */
    public function getDutyAmount(): ? float
    {
        return $this->dutyAmount;
    }

    /**
     * @param float $dutyAmount
     *
     * @return Services
     */
    public function setDutyAmount(float $dutyAmount) : Services
    {
        $this->dutyAmount = $dutyAmount;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getDutyCurrency(): ? Currency
    {
        return $this->dutyCurrency;
    }

    /**
     * @param Currency $dutyCurrency
     *
     * @return Services
     */
    public function setDutyCurrency(Currency $dutyCurrency) : Services
    {
        $this->dutyCurrency = $dutyCurrency;

        return $this;
    }

    /**
     * @return GuaranteeType
     */
    public function getGuaranteeType(): ? GuaranteeType
    {
        return $this->guaranteeType;
    }

    /**
     * @param GuaranteeType $guaranteeType
     *
     * @return Services
     */
    public function setGuaranteeType(GuaranteeType $guaranteeType) : Services
    {
        $this->guaranteeType = $guaranteeType;

        return $this;
    }

    /**
     * @return string
     */
    public function getGuaranteeValue(): ? string
    {
        return $this->guaranteeValue;
    }

    /**
     * @param string $guaranteeValue
     *
     * @return Services
     */
    public function setGuaranteeValue(? string $guaranteeValue) : Services
    {
        $this->guaranteeValue = $guaranteeValue;

        return $this;
    }

    /**
     * @return bool
     */
    public function isInPers() : bool
    {
        return $this->inPers;
    }

    /**
     * @param bool $inPers
     *
     * @return Services
     */
    public function setInPers(bool $inPers): Services
    {
        $this->inPers = $inPers;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPallet(): bool
    {
        return $this->pallet;
    }

    /**
     * @param bool $pallet
     *
     * @return Services
     */
    public function setPallet(bool $pallet): Services
    {
        $this->pallet = $pallet;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPrivPers(): bool
    {
        return $this->privPers;
    }

    /**
     * @param bool $privPers
     *
     * @return Services
     */
    public function setPrivPers(bool $privPers): Services
    {
        $this->privPers = $privPers;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRod(): bool
    {
        return $this->rod;
    }

    /**
     * @param bool $rod
     *
     * @return Services
     */
    public function setRod(bool $rod): Services
    {
        $this->rod = $rod;

        return $this;
    }

    /**
     * @return SelfCollectionReceiver
     */
    public function getSelfCollection(): ? SelfCollectionReceiver
    {
        return $this->selfCollection;
    }

    /**
     * @param SelfCollectionReceiver $selfCollection
     *
     * @return Services
     */
    public function setSelfCollection(SelfCollectionReceiver $selfCollection) : Services
    {
        $this->selfCollection = $selfCollection;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTires(): bool
    {
        return $this->tires;
    }

    /**
     * @param bool $tires
     *
     * @return Services
     */
    public function setTires(bool $tires): Services
    {
        $this->tires = $tires;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTiresExport(): bool
    {
        return $this->tiresExport;
    }

    /**
     * @param bool $tiresExport
     *
     * @return Services
     */
    public function setTiresExport(bool $tiresExport): Services
    {
        $this->tiresExport = $tiresExport;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDocumentsInternational(): bool
    {
        return $this->documentsInternational;
    }

    /**
     * @param bool $documentsInternational
     *
     * @return Services
     */
    public function setDocumentsInternational(bool $documentsInternational): Services
    {
        $this->documentsInternational = $documentsInternational;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDpdExpress(): bool
    {
        return $this->dpdExpress;
    }

    /**
     * @param bool $dpdExpress
     *
     * @return Services
     */
    public function setDpdExpress(bool $dpdExpress): Services
    {
        $this->dpdExpress = $dpdExpress;

        return $this;
    }

    /**
     * @return string
     */
    public function getDpdPickupPudo(): ? string
    {
        return $this->dpdPickupPudo;
    }

    /**
     * @param string $dpdPickupPudo
     *
     * @return Services
     */
    public function setDpdPickupPudo(string $dpdPickupPudo): Services
    {
        $this->dpdPickupPudo = $dpdPickupPudo;

        return $this;
    }
}
