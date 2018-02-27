<?php


namespace T3ko\Dpd\Objects;


class CollectionOrderedPackage
{
    const STATUS_OK = 'OK';

    /**
     * @var string
     */
    private $packageId;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var CollectionOrderedParcel[]
     */
    private $parcels;

    /**
     * @var string
     */
    private $statusInfo;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * CollectionOrderedPackage constructor.
     * @param string $packageId
     * @param string $reference
     * @param CollectionOrderedParcel[] $parcels
     * @param string $statusInfo
     * @param string $orderNumber
     */
    public function __construct($packageId, $reference, array $parcels, $statusInfo, $orderNumber)
    {
        $this->packageId = $packageId;
        $this->reference = $reference;
        $this->parcels = $parcels;
        $this->statusInfo = $statusInfo;
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getPackageId(): string
    {
        return $this->packageId;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @return CollectionOrderedParcel[]
     */
    public function getParcels(): array
    {
        return $this->parcels;
    }

    /**
     * @return string
     */
    public function getStatusInfo(): string
    {
        return $this->statusInfo;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }


}