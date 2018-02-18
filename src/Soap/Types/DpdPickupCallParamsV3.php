<?php

namespace T3ko\Dpd\Soap\Types;

class DpdPickupCallParamsV3
{
    /**
     * @var int
     */
    private $checkSum;

    /**
     * @var PickupCallOperationTypeDPPEnumV1
     */
    private $operationType;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var PickupCallOrderTypeDPPEnumV1
     */
    private $orderType;

    /**
     * @var PickupCallSimplifiedDetailsDPPV1
     */
    private $pickupCallSimplifiedDetails;

    /**
     * @var string
     */
    private $pickupDate;

    /**
     * @var string
     */
    private $pickupTimeFrom;

    /**
     * @var string
     */
    private $pickupTimeTo;

    /**
     * @var PickupCallUpdateModeDPPEnumV1
     */
    private $updateMode;

    /**
     * @var bool
     */
    private $waybillsReady;

    /**
     * @return int
     */
    public function getCheckSum() : int
    {
        return $this->checkSum;
    }

    /**
     * @param int $checkSum
     *
     * @return $this
     */
    public function setCheckSum(int $checkSum) : DpdPickupCallParamsV3
    {
        $this->checkSum = $checkSum;

        return $this;
    }

    /**
     * @return PickupCallOperationTypeDPPEnumV1
     */
    public function getOperationType() : PickupCallOperationTypeDPPEnumV1
    {
        return $this->operationType;
    }

    /**
     * @param PickupCallOperationTypeDPPEnumV1 $operationType
     *
     * @return $this
     */
    public function setOperationType(PickupCallOperationTypeDPPEnumV1 $operationType) : DpdPickupCallParamsV3
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     *
     * @return $this
     */
    public function setOrderNumber(string $orderNumber) : DpdPickupCallParamsV3
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return PickupCallOrderTypeDPPEnumV1
     */
    public function getOrderType() : PickupCallOrderTypeDPPEnumV1
    {
        return $this->orderType;
    }

    /**
     * @param PickupCallOrderTypeDPPEnumV1 $orderType
     *
     * @return $this
     */
    public function setOrderType(PickupCallOrderTypeDPPEnumV1 $orderType) : DpdPickupCallParamsV3
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * @return PickupCallSimplifiedDetailsDPPV1
     */
    public function getPickupCallSimplifiedDetails() : PickupCallSimplifiedDetailsDPPV1
    {
        return $this->pickupCallSimplifiedDetails;
    }

    /**
     * @param PickupCallSimplifiedDetailsDPPV1 $pickupCallSimplifiedDetails
     *
     * @return $this
     */
    public function setPickupCallSimplifiedDetails(PickupCallSimplifiedDetailsDPPV1 $pickupCallSimplifiedDetails) : DpdPickupCallParamsV3
    {
        $this->pickupCallSimplifiedDetails = $pickupCallSimplifiedDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     *
     * @return $this
     */
    public function setPickupDate(string $pickupDate) : DpdPickupCallParamsV3
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeFrom() : string
    {
        return $this->pickupTimeFrom;
    }

    /**
     * @param string $pickupTimeFrom
     *
     * @return $this
     */
    public function setPickupTimeFrom(string $pickupTimeFrom) : DpdPickupCallParamsV3
    {
        $this->pickupTimeFrom = $pickupTimeFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo() : string
    {
        return $this->pickupTimeTo;
    }

    /**
     * @param string $pickupTimeTo
     *
     * @return $this
     */
    public function setPickupTimeTo(string $pickupTimeTo) : DpdPickupCallParamsV3
    {
        $this->pickupTimeTo = $pickupTimeTo;

        return $this;
    }

    /**
     * @return PickupCallUpdateModeDPPEnumV1
     */
    public function getUpdateMode() : PickupCallUpdateModeDPPEnumV1
    {
        return $this->updateMode;
    }

    /**
     * @param PickupCallUpdateModeDPPEnumV1 $updateMode
     *
     * @return $this
     */
    public function setUpdateMode(PickupCallUpdateModeDPPEnumV1 $updateMode) : DpdPickupCallParamsV3
    {
        $this->updateMode = $updateMode;

        return $this;
    }

    /**
     * @return bool
     */
    public function isWaybillsReady() : bool
    {
        return $this->waybillsReady;
    }

    /**
     * @param bool $waybillsReady
     *
     * @return $this
     */
    public function setWaybillsReady(bool $waybillsReady) : DpdPickupCallParamsV3
    {
        $this->waybillsReady = $waybillsReady;

        return $this;
    }
}
