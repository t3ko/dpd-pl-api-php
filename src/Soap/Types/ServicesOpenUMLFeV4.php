<?php

namespace T3ko\Dpd\Soap\Types;

class ServicesOpenUMLFeV4
{

    /**
     * @var ServiceCarryInOpenUMLFeV1
     */
    private $carryIn;

    /**
     * @var ServiceCODOpenUMLFeV1
     */
    private $cod;

    /**
     * @var ServiceCUDOpenUMLeFV1
     */
    private $cud;

    /**
     * @var ServiceDeclaredValueOpenUMLFeV1
     */
    private $declaredValue;

    /**
     * @var ServiceDedicatedDeliveryOpenUMLFeV1
     */
    private $dedicatedDelivery;

    /**
     * @var ServiceFlagOpenUMLF
     */
    private $documentsInternational;

    /**
     * @var ServicePalletOpenUMLFeV1
     */
    private $dox;

    /**
     * @var ServiceFlagOpenUMLF
     */
    private $dpdExpress;

    /**
     * @var ServiceDpdPickupOpenUMLFeV1
     */
    private $dpdPickup;

    /**
     * @var ServiceDutyOpenUMLeFV2
     */
    private $duty;

    /**
     * @var ServiceGuaranteeOpenUMLFeV1
     */
    private $guarantee;

    /**
     * @var ServiceInPersOpenUMLFeV1
     */
    private $inPers;

    /**
     * @var ServicePalletOpenUMLFeV1
     */
    private $pallet;

    /**
     * @var ServicePrivPersOpenUMLFeV1
     */
    private $privPers;

    /**
     * @var ServiceRODOpenUMLFeV1
     */
    private $rod;

    /**
     * @var ServiceSelfColOpenUMLFeV1
     */
    private $selfCol;

    /**
     * @var ServiceTiresOpenUMLFeV1
     */
    private $tires;

    /**
     * @var ServiceTiresExportOpenUMLFeV1
     */
    private $tiresExport;

    /**
     * @return ServiceCarryInOpenUMLFeV1
     */
    public function getCarryIn() : ?ServiceCarryInOpenUMLFeV1
    {
        return $this->carryIn;
    }

    /**
     * @param ServiceCarryInOpenUMLFeV1 $carryIn
     * @return ServicesOpenUMLFeV4
     */
    public function setCarryIn(ServiceCarryInOpenUMLFeV1 $carryIn) : ServicesOpenUMLFeV4
    {
        $this->carryIn = $carryIn;
        return $this;
    }

    /**
     * @return ServiceCODOpenUMLFeV1
     */
    public function getCod() : ?ServiceCODOpenUMLFeV1
    {
        return $this->cod;
    }

    /**
     * @param ServiceCODOpenUMLFeV1 $cod
     * @return ServicesOpenUMLFeV4
     */
    public function setCod(ServiceCODOpenUMLFeV1 $cod) : ServicesOpenUMLFeV4
    {
        $this->cod = $cod;
        return $this;
    }

    /**
     * @return ServiceCUDOpenUMLeFV1
     */
    public function getCud() : ?ServiceCUDOpenUMLeFV1
    {
        return $this->cud;
    }

    /**
     * @param ServiceCUDOpenUMLeFV1 $cud
     * @return ServicesOpenUMLFeV4
     */
    public function setCud(ServiceCUDOpenUMLeFV1 $cud) : ServicesOpenUMLFeV4
    {
        $this->cud = $cud;
        return $this;
    }

    /**
     * @return ServiceDeclaredValueOpenUMLFeV1
     */
    public function getDeclaredValue() : ?ServiceDeclaredValueOpenUMLFeV1
    {
        return $this->declaredValue;
    }

    /**
     * @param ServiceDeclaredValueOpenUMLFeV1 $declaredValue
     * @return ServicesOpenUMLFeV4
     */
    public function setDeclaredValue(ServiceDeclaredValueOpenUMLFeV1 $declaredValue) : ServicesOpenUMLFeV4
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }

    /**
     * @return ServiceDedicatedDeliveryOpenUMLFeV1
     */
    public function getDedicatedDelivery() : ?ServiceDedicatedDeliveryOpenUMLFeV1
    {
        return $this->dedicatedDelivery;
    }

    /**
     * @param ServiceDedicatedDeliveryOpenUMLFeV1 $dedicatedDelivery
     * @return ServicesOpenUMLFeV4
     */
    public function setDedicatedDelivery(ServiceDedicatedDeliveryOpenUMLFeV1 $dedicatedDelivery) : ServicesOpenUMLFeV4
    {
        $this->dedicatedDelivery = $dedicatedDelivery;
        return $this;
    }

    /**
     * @return ServiceFlagOpenUMLF
     */
    public function getDocumentsInternational() : ?ServiceFlagOpenUMLF
    {
        return $this->documentsInternational;
    }

    /**
     * @param ServiceFlagOpenUMLF $documentsInternational
     * @return ServicesOpenUMLFeV4
     */
    public function setDocumentsInternational(ServiceFlagOpenUMLF $documentsInternational) : ServicesOpenUMLFeV4
    {
        $this->documentsInternational = $documentsInternational;
        return $this;
    }

    /**
     * @return ServicePalletOpenUMLFeV1
     */
    public function getDox() : ?ServicePalletOpenUMLFeV1
    {
        return $this->dox;
    }

    /**
     * @param ServicePalletOpenUMLFeV1 $dox
     * @return ServicesOpenUMLFeV4
     */
    public function setDox(ServicePalletOpenUMLFeV1 $dox) : ServicesOpenUMLFeV4
    {
        $this->dox = $dox;
        return $this;
    }

    /**
     * @return ServiceFlagOpenUMLF
     */
    public function getDpdExpress() : ?ServiceFlagOpenUMLF
    {
        return $this->dpdExpress;
    }

    /**
     * @param ServiceFlagOpenUMLF $dpdExpress
     * @return ServicesOpenUMLFeV4
     */
    public function setDpdExpress(ServiceFlagOpenUMLF $dpdExpress) : ServicesOpenUMLFeV4
    {
        $this->dpdExpress = $dpdExpress;
        return $this;
    }

    /**
     * @return ServiceDpdPickupOpenUMLFeV1
     */
    public function getDpdPickup() : ?ServiceDpdPickupOpenUMLFeV1
    {
        return $this->dpdPickup;
    }

    /**
     * @param ServiceDpdPickupOpenUMLFeV1 $dpdPickup
     * @return ServicesOpenUMLFeV4
     */
    public function setDpdPickup(ServiceDpdPickupOpenUMLFeV1 $dpdPickup) : ServicesOpenUMLFeV4
    {
        $this->dpdPickup = $dpdPickup;
        return $this;
    }

    /**
     * @return ServiceDutyOpenUMLeFV2
     */
    public function getDuty() : ?ServiceDutyOpenUMLeFV2
    {
        return $this->duty;
    }

    /**
     * @param ServiceDutyOpenUMLeFV2 $duty
     * @return ServicesOpenUMLFeV4
     */
    public function setDuty(ServiceDutyOpenUMLeFV2 $duty) : ServicesOpenUMLFeV4
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * @return ServiceGuaranteeOpenUMLFeV1
     */
    public function getGuarantee() : ?ServiceGuaranteeOpenUMLFeV1
    {
        return $this->guarantee;
    }

    /**
     * @param ServiceGuaranteeOpenUMLFeV1 $guarantee
     * @return ServicesOpenUMLFeV4
     */
    public function setGuarantee(ServiceGuaranteeOpenUMLFeV1 $guarantee) : ServicesOpenUMLFeV4
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * @return ServiceInPersOpenUMLFeV1
     */
    public function getInPers() : ?ServiceInPersOpenUMLFeV1
    {
        return $this->inPers;
    }

    /**
     * @param ServiceInPersOpenUMLFeV1 $inPers
     * @return ServicesOpenUMLFeV4
     */
    public function setInPers(ServiceInPersOpenUMLFeV1 $inPers) : ServicesOpenUMLFeV4
    {
        $this->inPers = $inPers;
        return $this;
    }

    /**
     * @return ServicePalletOpenUMLFeV1
     */
    public function getPallet() : ?ServicePalletOpenUMLFeV1
    {
        return $this->pallet;
    }

    /**
     * @param ServicePalletOpenUMLFeV1 $pallet
     * @return ServicesOpenUMLFeV4
     */
    public function setPallet(ServicePalletOpenUMLFeV1 $pallet) : ServicesOpenUMLFeV4
    {
        $this->pallet = $pallet;
        return $this;
    }

    /**
     * @return ServicePrivPersOpenUMLFeV1
     */
    public function getPrivPers() : ?ServicePrivPersOpenUMLFeV1
    {
        return $this->privPers;
    }

    /**
     * @param ServicePrivPersOpenUMLFeV1 $privPers
     * @return ServicesOpenUMLFeV4
     */
    public function setPrivPers(ServicePrivPersOpenUMLFeV1 $privPers) : ServicesOpenUMLFeV4
    {
        $this->privPers = $privPers;
        return $this;
    }

    /**
     * @return ServiceRODOpenUMLFeV1
     */
    public function getRod() : ?ServiceRODOpenUMLFeV1
    {
        return $this->rod;
    }

    /**
     * @param ServiceRODOpenUMLFeV1 $rod
     * @return ServicesOpenUMLFeV4
     */
    public function setRod(ServiceRODOpenUMLFeV1 $rod) : ServicesOpenUMLFeV4
    {
        $this->rod = $rod;
        return $this;
    }

    /**
     * @return ServiceSelfColOpenUMLFeV1
     */
    public function getSelfCol() : ?ServiceSelfColOpenUMLFeV1
    {
        return $this->selfCol;
    }

    /**
     * @param ServiceSelfColOpenUMLFeV1 $selfCol
     * @return ServicesOpenUMLFeV4
     */
    public function setSelfCol(ServiceSelfColOpenUMLFeV1 $selfCol) : ServicesOpenUMLFeV4
    {
        $this->selfCol = $selfCol;
        return $this;
    }

    /**
     * @return ServiceTiresOpenUMLFeV1
     */
    public function getTires() : ?ServiceTiresOpenUMLFeV1
    {
        return $this->tires;
    }

    /**
     * @param ServiceTiresOpenUMLFeV1 $tires
     * @return ServicesOpenUMLFeV4
     */
    public function setTires(ServiceTiresOpenUMLFeV1 $tires) : ServicesOpenUMLFeV4
    {
        $this->tires = $tires;
        return $this;
    }

    /**
     * @return ServiceTiresExportOpenUMLFeV1
     */
    public function getTiresExport() : ?ServiceTiresExportOpenUMLFeV1
    {
        return $this->tiresExport;
    }

    /**
     * @param ServiceTiresExportOpenUMLFeV1 $tiresExport
     * @return ServicesOpenUMLFeV4
     */
    public function setTiresExport(ServiceTiresExportOpenUMLFeV1 $tiresExport) : ServicesOpenUMLFeV4
    {
        $this->tiresExport = $tiresExport;
        return $this;
    }


}

