<?php

namespace T3ko\Dpd\Soap\Types;

class PackageOpenUMLFeV2
{

    /**
     * @var ParcelOpenUMLFeV1
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
     * @var ServicesOpenUMLFeV3
     */
    private $services;

    /**
     * @var int
     */
    private $thirdPartyFID;

    /**
     * @return ParcelOpenUMLFeV1
     */
    public function getParcels() : ParcelOpenUMLFeV1
    {
        return $this->parcels;
    }

    /**
     * @param ParcelOpenUMLFeV1 $parcels
     * @return $this
     */
    public function setParcels(ParcelOpenUMLFeV1 $parcels) : PackageOpenUMLFeV2
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
     * @return $this
     */
    public function setPayerType(PayerTypeEnumOpenUMLFeV1 $payerType) : PackageOpenUMLFeV2
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
     * @return $this
     */
    public function setReceiver(PackageAddressOpenUMLFeV1 $receiver) : PackageOpenUMLFeV2
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef1() : string
    {
        return $this->ref1;
    }

    /**
     * @param string $ref1
     * @return $this
     */
    public function setRef1(string $ref1) : PackageOpenUMLFeV2
    {
        $this->ref1 = $ref1;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef2() : string
    {
        return $this->ref2;
    }

    /**
     * @param string $ref2
     * @return $this
     */
    public function setRef2(string $ref2) : PackageOpenUMLFeV2
    {
        $this->ref2 = $ref2;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef3() : string
    {
        return $this->ref3;
    }

    /**
     * @param string $ref3
     * @return $this
     */
    public function setRef3(string $ref3) : PackageOpenUMLFeV2
    {
        $this->ref3 = $ref3;
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
    public function setReference(string $reference) : PackageOpenUMLFeV2
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return PackageAddressOpenUMLFeV1
     */
    public function getSender() : PackageAddressOpenUMLFeV1
    {
        return $this->sender;
    }

    /**
     * @param PackageAddressOpenUMLFeV1 $sender
     * @return $this
     */
    public function setSender(PackageAddressOpenUMLFeV1 $sender) : PackageOpenUMLFeV2
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return ServicesOpenUMLFeV3
     */
    public function getServices() : ServicesOpenUMLFeV3
    {
        return $this->services;
    }

    /**
     * @param ServicesOpenUMLFeV3 $services
     * @return $this
     */
    public function setServices(ServicesOpenUMLFeV3 $services) : PackageOpenUMLFeV2
    {
        $this->services = $services;
        return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyFID() : int
    {
        return $this->thirdPartyFID;
    }

    /**
     * @param int $thirdPartyFID
     * @return $this
     */
    public function setThirdPartyFID(int $thirdPartyFID) : PackageOpenUMLFeV2
    {
        $this->thirdPartyFID = $thirdPartyFID;
        return $this;
    }


}

