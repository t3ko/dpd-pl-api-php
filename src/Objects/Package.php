<?php

namespace T3ko\Dpd\Objects;

use T3ko\Dpd\Objects\Enum\Currency;
use T3ko\Dpd\Objects\Enum\GuaranteeType;
use T3ko\Dpd\Objects\Enum\PayerType;
use T3ko\Dpd\Objects\Enum\SelfCollectionReceiver;

class Package
{
    /**
     * @var Parcel[]
     */
    private $parcels = [];

    /**
     * @var Sender
     */
    private $sender;

    /**
     * @var Receiver
     */
    private $receiver;

    /**
     * @var PayerType
     */
    private $payerType;

    /**
     * @var Services
     */
    private $services;

    /**
     * @var string
     */
    private $ref1;

    /**
     * @var string
     */
    private $ref2;

    /**
     * @var string
     */
    private $ref3;

    /**
     * @var int
     */
    private $thirdPartyFid;

    /**
     * Package constructor.
     *
     * @param Sender   $sender
     * @param Receiver $receiver
     * @param Parcel[]  $parcels
     */
    public function __construct(Sender $sender, Receiver $receiver, array $parcels = [])
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->payerType = PayerType::SENDER();
        $this->parcels = $parcels;
        $this->services = new Services();
    }

    /**
     * @return Parcel[]
     */
    public function getParcels(): array
    {
        return $this->parcels;
    }

    /**
     * @return Sender
     */
    public function getSender(): Sender
    {
        return $this->sender;
    }

    /**
     * @return Receiver
     */
    public function getReceiver(): Receiver
    {
        return $this->receiver;
    }

    /**
     * @return PayerType
     */
    public function getPayerType(): PayerType
    {
        return $this->payerType;
    }

    /**
     * @return Services
     */
    public function getServices(): Services
    {
        return $this->services;
    }

    /**
     * @return string
     */
    public function getRef1(): ? string
    {
        return $this->ref1;
    }

    /**
     * @return string
     */
    public function getRef2() : ? string
    {
        return $this->ref2;
    }

    /**
     * @return string
     */
    public function getRef3() : ? string
    {
        return $this->ref3;
    }

    /**
     * @return int
     */
    public function getThirdPartyFid() : ? int
    {
        return $this->thirdPartyFid;
    }

    /**
     * @param PayerType $payerType
     *
     * @return Package
     */
    public function setPayerType(PayerType $payerType) : Package
    {
        $this->payerType = $payerType;

        return $this;
    }

    /**
     * @param string $ref1
     *
     * @return Package
     */
    public function setRef1(? string $ref1) : Package
    {
        $this->ref1 = $ref1;

        return $this;
    }

    /**
     * @param string $ref2
     *
     * @return Package
     */
    public function setRef2(? string $ref2) : Package
    {
        $this->ref2 = $ref2;

        return $this;
    }

    /**
     * @param string $ref3
     *
     * @return Package
     */
    public function setRef3(? string $ref3) : Package
    {
        $this->ref3 = $ref3;

        return $this;
    }

    /**
     * @param int $thirdPartyFid
     *
     * @return Package
     */
    public function setThirdPartyFid(? int $thirdPartyFid) : Package
    {
        $this->thirdPartyFid = $thirdPartyFid;

        return $this;
    }

    /**
     * @param Parcel $parcel
     *
     * @return Package
     */
    public function addParcel(Parcel $parcel): Package
    {
        $this->parcels[] = $parcel;

        return $this;
    }

    public function addCarryInService(): Package
    {
        $this->services->setCarryIn(true);

        return $this;
    }

    public function addCODService(float $amount, Currency $currency): Package
    {
        $this->services->setCodAmount($amount);
        $this->services->setCodCurrency($currency);

        return $this;
    }

    public function addCUDService(): Package
    {
        $this->services->setCud(true);

        return $this;
    }

    public function addDeclaredValueService(float $amount, Currency $currency): Package
    {
        $this->services->setDeclaredValueAmount($amount);
        $this->services->setDeclaredValueCurrency($currency);

        return $this;
    }

    public function addDedicatedDeliveryService(): Package
    {
        $this->services->setDedicatedDelivery(true);

        return $this;
    }

    public function addDocumentsInternationalService(): Package
    {
        $this->services->setDocumentsInternational(true);

        return $this;
    }

    public function addDpdExpressService(): Package
    {
        $this->services->setDpdExpress(true);

        return $this;
    }

    public function addDpdPickupService(string $pickupPudo): Package
    {
        $this->services->setDpdPickupPudo($pickupPudo);

        return $this;
    }

    public function addDoxService(): Package
    {
        $this->services->setDox(true);

        return $this;
    }

    public function addDutyService(float $amount, Currency $currency): Package
    {
        $this->services->setDutyAmount($amount);
        $this->services->setDutyCurrency($currency);

        return $this;
    }

    public function addGuaranteeService(GuaranteeType $type, string $value = null): Package
    {
        $this->services->setGuaranteeType($type);
        $this->services->setGuaranteeValue($value);

        return $this;
    }

    public function addInPersService(): Package
    {
        $this->services->setInPers(true);

        return $this;
    }

    public function addPalletService(): Package
    {
        $this->services->setPallet(true);

        return $this;
    }

    public function addPrivPersService(): Package
    {
        $this->services->setPrivPers(true);

        return $this;
    }

    public function addRodService(): Package
    {
        $this->services->setRod(true);

        return $this;
    }

    public function addSelfColService(SelfCollectionReceiver $receiver): Package
    {
        $this->services->setSelfCollection($receiver);

        return $this;
    }

    public function addTiresService(): Package
    {
        $this->services->setTires(true);

        return $this;
    }

    public function addTiresExportService(): Package
    {
        $this->services->setTiresExport(true);

        return $this;
    }
}
