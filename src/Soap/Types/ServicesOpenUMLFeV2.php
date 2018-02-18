<?php

namespace T3ko\Dpd\Soap\Types;

class ServicesOpenUMLFeV2
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
     * @var ServicePalletOpenUMLFeV1
     */
    private $dox;

    /**
     * @var ServiceDutyOpenUMLeFV1
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
    public function getCarryIn() : ServiceCarryInOpenUMLFeV1
    {
        return $this->carryIn;
    }

    /**
     * @param ServiceCarryInOpenUMLFeV1 $carryIn
     * @return $this
     */
    public function setCarryIn(ServiceCarryInOpenUMLFeV1 $carryIn) : ServicesOpenUMLFeV2
    {
        $this->carryIn = $carryIn;
        return $this;
    }

    /**
     * @return ServiceCODOpenUMLFeV1
     */
    public function getCod() : ServiceCODOpenUMLFeV1
    {
        return $this->cod;
    }

    /**
     * @param ServiceCODOpenUMLFeV1 $cod
     * @return $this
     */
    public function setCod(ServiceCODOpenUMLFeV1 $cod) : ServicesOpenUMLFeV2
    {
        $this->cod = $cod;
        return $this;
    }

    /**
     * @return ServiceCUDOpenUMLeFV1
     */
    public function getCud() : ServiceCUDOpenUMLeFV1
    {
        return $this->cud;
    }

    /**
     * @param ServiceCUDOpenUMLeFV1 $cud
     * @return $this
     */
    public function setCud(ServiceCUDOpenUMLeFV1 $cud) : ServicesOpenUMLFeV2
    {
        $this->cud = $cud;
        return $this;
    }

    /**
     * @return ServiceDeclaredValueOpenUMLFeV1
     */
    public function getDeclaredValue() : ServiceDeclaredValueOpenUMLFeV1
    {
        return $this->declaredValue;
    }

    /**
     * @param ServiceDeclaredValueOpenUMLFeV1 $declaredValue
     * @return $this
     */
    public function setDeclaredValue(ServiceDeclaredValueOpenUMLFeV1 $declaredValue) : ServicesOpenUMLFeV2
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }

    /**
     * @return ServiceDedicatedDeliveryOpenUMLFeV1
     */
    public function getDedicatedDelivery() : ServiceDedicatedDeliveryOpenUMLFeV1
    {
        return $this->dedicatedDelivery;
    }

    /**
     * @param ServiceDedicatedDeliveryOpenUMLFeV1 $dedicatedDelivery
     * @return $this
     */
    public function setDedicatedDelivery(ServiceDedicatedDeliveryOpenUMLFeV1 $dedicatedDelivery) : ServicesOpenUMLFeV2
    {
        $this->dedicatedDelivery = $dedicatedDelivery;
        return $this;
    }

    /**
     * @return ServicePalletOpenUMLFeV1
     */
    public function getDox() : ServicePalletOpenUMLFeV1
    {
        return $this->dox;
    }

    /**
     * @param ServicePalletOpenUMLFeV1 $dox
     * @return $this
     */
    public function setDox(ServicePalletOpenUMLFeV1 $dox) : ServicesOpenUMLFeV2
    {
        $this->dox = $dox;
        return $this;
    }

    /**
     * @return ServiceDutyOpenUMLeFV1
     */
    public function getDuty() : ServiceDutyOpenUMLeFV1
    {
        return $this->duty;
    }

    /**
     * @param ServiceDutyOpenUMLeFV1 $duty
     * @return $this
     */
    public function setDuty(ServiceDutyOpenUMLeFV1 $duty) : ServicesOpenUMLFeV2
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * @return ServiceGuaranteeOpenUMLFeV1
     */
    public function getGuarantee() : ServiceGuaranteeOpenUMLFeV1
    {
        return $this->guarantee;
    }

    /**
     * @param ServiceGuaranteeOpenUMLFeV1 $guarantee
     * @return $this
     */
    public function setGuarantee(ServiceGuaranteeOpenUMLFeV1 $guarantee) : ServicesOpenUMLFeV2
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * @return ServiceInPersOpenUMLFeV1
     */
    public function getInPers() : ServiceInPersOpenUMLFeV1
    {
        return $this->inPers;
    }

    /**
     * @param ServiceInPersOpenUMLFeV1 $inPers
     * @return $this
     */
    public function setInPers(ServiceInPersOpenUMLFeV1 $inPers) : ServicesOpenUMLFeV2
    {
        $this->inPers = $inPers;
        return $this;
    }

    /**
     * @return ServicePalletOpenUMLFeV1
     */
    public function getPallet() : ServicePalletOpenUMLFeV1
    {
        return $this->pallet;
    }

    /**
     * @param ServicePalletOpenUMLFeV1 $pallet
     * @return $this
     */
    public function setPallet(ServicePalletOpenUMLFeV1 $pallet) : ServicesOpenUMLFeV2
    {
        $this->pallet = $pallet;
        return $this;
    }

    /**
     * @return ServicePrivPersOpenUMLFeV1
     */
    public function getPrivPers() : ServicePrivPersOpenUMLFeV1
    {
        return $this->privPers;
    }

    /**
     * @param ServicePrivPersOpenUMLFeV1 $privPers
     * @return $this
     */
    public function setPrivPers(ServicePrivPersOpenUMLFeV1 $privPers) : ServicesOpenUMLFeV2
    {
        $this->privPers = $privPers;
        return $this;
    }

    /**
     * @return ServiceRODOpenUMLFeV1
     */
    public function getRod() : ServiceRODOpenUMLFeV1
    {
        return $this->rod;
    }

    /**
     * @param ServiceRODOpenUMLFeV1 $rod
     * @return $this
     */
    public function setRod(ServiceRODOpenUMLFeV1 $rod) : ServicesOpenUMLFeV2
    {
        $this->rod = $rod;
        return $this;
    }

    /**
     * @return ServiceSelfColOpenUMLFeV1
     */
    public function getSelfCol() : ServiceSelfColOpenUMLFeV1
    {
        return $this->selfCol;
    }

    /**
     * @param ServiceSelfColOpenUMLFeV1 $selfCol
     * @return $this
     */
    public function setSelfCol(ServiceSelfColOpenUMLFeV1 $selfCol) : ServicesOpenUMLFeV2
    {
        $this->selfCol = $selfCol;
        return $this;
    }

    /**
     * @return ServiceTiresOpenUMLFeV1
     */
    public function getTires() : ServiceTiresOpenUMLFeV1
    {
        return $this->tires;
    }

    /**
     * @param ServiceTiresOpenUMLFeV1 $tires
     * @return $this
     */
    public function setTires(ServiceTiresOpenUMLFeV1 $tires) : ServicesOpenUMLFeV2
    {
        $this->tires = $tires;
        return $this;
    }

    /**
     * @return ServiceTiresExportOpenUMLFeV1
     */
    public function getTiresExport() : ServiceTiresExportOpenUMLFeV1
    {
        return $this->tiresExport;
    }

    /**
     * @param ServiceTiresExportOpenUMLFeV1 $tiresExport
     * @return $this
     */
    public function setTiresExport(ServiceTiresExportOpenUMLFeV1 $tiresExport) : ServicesOpenUMLFeV2
    {
        $this->tiresExport = $tiresExport;
        return $this;
    }


}

