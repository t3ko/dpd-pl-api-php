<?php

namespace T3ko\Dpd\Soap\Types;

class PackageOpenUMLFeV3
{

    /**
     * @var ParcelOpenUMLFeV1[]
     */
    private $parcels;

    /**
     * @var PayerTypeEnumOpenUMLFeV1
     */
    private $payerType;

    /**
     * @var PackageAddressOpenUMLFeV1
     */
    private $receiver;

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
     * @var string
     */
    private $reference;

    /**
     * @var PackageAddressOpenUMLFeV1
     */
    private $sender;

    /**
     * @var ServicesOpenUMLFeV4
     */
    private $services;

    /**
     * @var int
     */
    private $thirdPartyFID;

    /**
     * @return ParcelOpenUMLFeV1[]
     */
    public function getParcels() : array
    {
        return $this->parcels;
    }

    /**
     * @param ParcelOpenUMLFeV1[] $parcels
     * @return PackageOpenUMLFeV3
     */
    public function setParcels(array $parcels) : PackageOpenUMLFeV3
    {
        $this->parcels = $parcels;
        return $this;
    }

    /**
     * @return PayerTypeEnumOpenUMLFeV1
     */
    public function getPayerType() : PayerTypeEnumOpenUMLFeV1
    {
        return $this->payerType;
    }

    /**
     * @param PayerTypeEnumOpenUMLFeV1 $payerType
     * @return PackageOpenUMLFeV3
     */
    public function setPayerType(PayerTypeEnumOpenUMLFeV1 $payerType) : PackageOpenUMLFeV3
    {
        $this->payerType = $payerType;
        return $this;
    }

    /**
     * @return PackageAddressOpenUMLFeV1
     */
    public function getReceiver() : PackageAddressOpenUMLFeV1
    {
        return $this->receiver;
    }

    /**
     * @param PackageAddressOpenUMLFeV1 $receiver
     * @return PackageOpenUMLFeV3
     */
    public function setReceiver(PackageAddressOpenUMLFeV1 $receiver) : PackageOpenUMLFeV3
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef1() : ?string
    {
        return $this->ref1;
    }

    /**
     * @param string $ref1
     * @return PackageOpenUMLFeV3
     */
    public function setRef1(?string $ref1) : PackageOpenUMLFeV3
    {
        $this->ref1 = $ref1;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef2() : ?string
    {
        return $this->ref2;
    }

    /**
     * @param string $ref2
     * @return PackageOpenUMLFeV3
     */
    public function setRef2(?string $ref2) : PackageOpenUMLFeV3
    {
        $this->ref2 = $ref2;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef3() : ?string
    {
        return $this->ref3;
    }

    /**
     * @param string $ref3
     * @return PackageOpenUMLFeV3
     */
    public function setRef3(?string $ref3) : PackageOpenUMLFeV3
    {
        $this->ref3 = $ref3;
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
     * @return PackageOpenUMLFeV3
     */
    public function setReference(string $reference) : PackageOpenUMLFeV3
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return PackageAddressOpenUMLFeV1
     */
    public function getSender() : ?PackageAddressOpenUMLFeV1
    {
        return $this->sender;
    }

    /**
     * @param PackageAddressOpenUMLFeV1 $sender
     * @return PackageOpenUMLFeV3
     */
    public function setSender(PackageAddressOpenUMLFeV1 $sender) : PackageOpenUMLFeV3
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return ServicesOpenUMLFeV4
     */
    public function getServices() : ?ServicesOpenUMLFeV4
    {
        return $this->services;
    }

    /**
     * @param ServicesOpenUMLFeV4 $services
     * @return PackageOpenUMLFeV3
     */
    public function setServices(ServicesOpenUMLFeV4 $services) : PackageOpenUMLFeV3
    {
        $this->services = $services;
        return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyFID() : ?int
    {
        return $this->thirdPartyFID;
    }

    /**
     * @param int $thirdPartyFID
     * @return PackageOpenUMLFeV3
     */
    public function setThirdPartyFID(?int $thirdPartyFID) : PackageOpenUMLFeV3
    {
        $this->thirdPartyFID = $thirdPartyFID;
        return $this;
    }


}

