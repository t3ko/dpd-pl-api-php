<?php

namespace T3ko\Dpd\Request;

use T3ko\Dpd\Objects\Package;
use T3ko\Dpd\Objects\Parcel;
use T3ko\Dpd\Objects\Enum\PayerType;
use T3ko\Dpd\Objects\Receiver;
use T3ko\Dpd\Objects\Sender;
use T3ko\Dpd\Objects\Services;
use T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV4Request;
use T3ko\Dpd\Soap\Types\OpenUMLFeV3;
use T3ko\Dpd\Soap\Types\PackageAddressOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\PackageOpenUMLFeV3;
use T3ko\Dpd\Soap\Types\ParcelOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\PayerTypeEnumOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\PkgNumsGenerationPolicyV1;
use T3ko\Dpd\Soap\Types\ServiceCarryInOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceCODOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceCUDOpenUMLeFV1;
use T3ko\Dpd\Soap\Types\ServiceCurrencyEnum;
use T3ko\Dpd\Soap\Types\ServiceDeclaredValueOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceDedicatedDeliveryOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceDpdPickupOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceDutyOpenUMLeFV2;
use T3ko\Dpd\Soap\Types\ServiceFlagOpenUMLF;
use T3ko\Dpd\Soap\Types\ServiceGuaranteeOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceGuaranteeTypeEnumOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceInPersOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServicePalletOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServicePrivPersOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceRODOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceSelfColOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceSelfColReceiverTypeEnumOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServicesOpenUMLFeV4;
use T3ko\Dpd\Soap\Types\ServiceTiresExportOpenUMLFeV1;
use T3ko\Dpd\Soap\Types\ServiceTiresOpenUMLFeV1;

class GeneratePackageNumbersRequest
{
    /**
     * @var Package[]
     */
    private $packages;

    /**
     * GeneratePackageNumbersRequest constructor.
     *
     * @param $packages
     */
    protected function __construct(array $packages)
    {
        $this->packages = $packages;
    }

    /**
     * @param Package $package
     *
     * @return GeneratePackageNumbersRequest
     */
    public static function fromPackage(Package $package): GeneratePackageNumbersRequest
    {
        return new static([$package]);
    }

    /**
     * @param Package[] $packages
     *
     * @return GeneratePackageNumbersRequest
     */
    public static function fromPackages(array $packages): GeneratePackageNumbersRequest
    {
        return new static($packages);
    }

    /**
     * @return GeneratePackagesNumbersV4Request
     */
    public function toPayload(): GeneratePackagesNumbersV4Request
    {
        $request = new GeneratePackagesNumbersV4Request();
        $openUMLFeV3 = new OpenUMLFeV3();
        $openUMLFeV3->setPackages($this->generatePackageObject($this->packages));
        $request->setLangCode('PL');
        $request->setPkgNumsGenerationPolicy(new PkgNumsGenerationPolicyV1());
        $request->setOpenUMLFe($openUMLFeV3);

        return $request;
    }

    /**
     * @param Package[] $packages
     *
     * @return PackageOpenUMLFeV3[]
     */
    private function generatePackageObject(array $packages): array
    {
        $packageObjects = [];
        foreach ($packages as $package) {
            $packageObject = new PackageOpenUMLFeV3();
            $packageObject->setParcels($this->generateParcelsObject($package->getParcels()));
            $packageObject->setSender($this->generateSenderObject($package->getSender()));
            $packageObject->setReceiver($this->generateReceiverObject($package->getReceiver()));
            $packageObject->setPayerType($this->generatePayerTypeObject($package->getPayerType()));
            $packageObject->setServices($this->generateServicesObject($package->getServices()));
            $packageObject->setThirdPartyFID($package->getThirdPartyFid());
            $packageObject->setRef1($package->getRef1());
            $packageObject->setRef2($package->getRef2());
            $packageObject->setRef3($package->getRef3());
            $packageObjects[] = $packageObject;
        }

        return $packageObjects;
    }

    /**
     * @param Parcel[] $parcels
     *
     * @return ParcelOpenUMLFeV1[]
     */
    private function generateParcelsObject(array $parcels): array
    {
        $parcelObjects = [];
        foreach ($parcels as $parcel) {
            $parcelObject = new ParcelOpenUMLFeV1();
            $parcelObject->setSizeX($parcel->getSizeX());
            $parcelObject->setSizeY($parcel->getSizeY());
            $parcelObject->setSizeZ($parcel->getSizeZ());
            $parcelObject->setWeight($parcel->getWeight());
            $parcelObject->setContent($parcel->getContents());
            $parcelObject->setReference($parcel->getReference());
            [$customerData1, $customerData2, $customerData3] =
                mb_split(str_pad((string)$parcel->getCustomerNotes(), 195, ' '), 65);
            $parcelObject->setCustomerData1(empty(trim($customerData1)) ? null : trim($customerData1));
            $parcelObject->setCustomerData2(empty(trim($customerData2)) ? null : trim($customerData2));
            $parcelObject->setCustomerData3(empty(trim($customerData3)) ? null : trim($customerData3));
            $parcelObjects[] = $parcelObject;
        }

        return $parcelObjects;
    }

    /**
     * @param Sender $sender
     *
     * @return PackageAddressOpenUMLFeV1
     */
    private function generateSenderObject(Sender $sender): PackageAddressOpenUMLFeV1
    {
        $address = new PackageAddressOpenUMLFeV1();
        $address->setName($sender->getName());
        $address->setAddress($sender->getAddress());
        $address->setFid($sender->getFid());
        $address->setPhone($sender->getPhone());
        $address->setPostalCode($sender->getPostalCode());
        $address->setCity($sender->getCity());
        $address->setCountryCode($sender->getCountryCode());
        $address->setCompany($sender->getCompany());
        $address->setEmail($sender->getEmail());

        return $address;
    }

    /**
     * @param Receiver $receiver
     *
     * @return PackageAddressOpenUMLFeV1
     */
    private function generateReceiverObject(Receiver $receiver): PackageAddressOpenUMLFeV1
    {
        $address = new PackageAddressOpenUMLFeV1();
        $address->setName($receiver->getName());
        $address->setAddress($receiver->getAddress());
        $address->setPhone($receiver->getPhone());
        $address->setPostalCode($receiver->getPostalCode());
        $address->setCity($receiver->getCity());
        $address->setCountryCode($receiver->getCountryCode());
        $address->setCompany($receiver->getCompany());
        $address->setEmail($receiver->getEmail());

        return $address;
    }

    /**
     * @param PayerType $payerType
     *
     * @return PayerTypeEnumOpenUMLFeV1
     */
    private function generatePayerTypeObject(PayerType $payerType): PayerTypeEnumOpenUMLFeV1
    {
        return new PayerTypeEnumOpenUMLFeV1((string) $payerType);
    }

    /**
     * @param Services $services
     *
     * @return ServicesOpenUMLFeV4
     */
    private function generateServicesObject(Services $services): ServicesOpenUMLFeV4
    {
        $servicesObject = new ServicesOpenUMLFeV4();

        if ($services->isCarryIn()) {
            $servicesObject->setCarryIn(new ServiceCarryInOpenUMLFeV1());
        }
        if ($services->isCud()) {
            $servicesObject->setCud(new ServiceCUDOpenUMLeFV1());
        }
        if ($services->isDedicatedDelivery()) {
            $servicesObject->setDedicatedDelivery(new ServiceDedicatedDeliveryOpenUMLFeV1());
        }
        if ($services->isDocumentsInternational()) {
            $servicesObject->setDocumentsInternational(new ServiceFlagOpenUMLF());
        }
        if ($services->isDox()) {
            $servicesObject->setDox(new ServicePalletOpenUMLFeV1());
        }
        if ($services->isDpdExpress()) {
            $servicesObject->setDpdExpress(new ServiceFlagOpenUMLF());
        }
        if ($services->isInPers()) {
            $servicesObject->setInPers(new ServiceInPersOpenUMLFeV1());
        }
        if ($services->isPallet()) {
            $servicesObject->setPallet(new ServicePalletOpenUMLFeV1());
        }
        if ($services->isPrivPers()) {
            $servicesObject->setPrivPers(new ServicePrivPersOpenUMLFeV1());
        }
        if ($services->isRod()) {
            $servicesObject->setRod(new ServiceRODOpenUMLFeV1());
        }
        if ($services->isTires()) {
            $servicesObject->setTires(new ServiceTiresOpenUMLFeV1());
        }
        if ($services->isTiresExport()) {
            $servicesObject->setTiresExport(new ServiceTiresExportOpenUMLFeV1());
        }
        if (null !== $services->getCodAmount() && null !== $services->getCodCurrency()) {
            $service = new ServiceCODOpenUMLFeV1();
            $service->setAmount(number_format($services->getCodAmount(), 2, '.', ''));
            $service->setCurrency(new ServiceCurrencyEnum((string) $services->getCodCurrency()));
            $servicesObject->setCod($service);
        }

        if (null !== $services->getDutyAmount() && null !== $services->getDutyCurrency()) {
            $service = new ServiceDutyOpenUMLeFV2();
            $service->setAmount($services->getDutyAmount());
            $service->setCurrency(new ServiceCurrencyEnum((string) $services->getDutyCurrency()));
            $servicesObject->setDuty($service);
        }

        if (null !== $services->getDeclaredValueAmount() && null !== $services->getDeclaredValueCurrency()) {
            $service = new ServiceDeclaredValueOpenUMLFeV1();
            $service->setAmount($services->getDeclaredValueAmount());
            $service->setCurrency(new ServiceCurrencyEnum((string) $services->getDeclaredValueCurrency()));
            $servicesObject->setDeclaredValue($service);
        }

        if (null !== $services->getGuaranteeType()) {
            $service = new ServiceGuaranteeOpenUMLFeV1();
            $service->setType(new ServiceGuaranteeTypeEnumOpenUMLFeV1((string) $services->getGuaranteeType()));
            $service->setValue($services->getGuaranteeValue());
            $servicesObject->setGuarantee($service);
        }

        if (null !== $services->getSelfCollection()) {
            $service = new ServiceSelfColOpenUMLFeV1();
            $service->setReceiver(new ServiceSelfColReceiverTypeEnumOpenUMLFeV1((string) $services->getSelfCollection()));
            $servicesObject->setSelfCol($service);
        }

        if (null !== $services->getDpdPickupPudo()) {
            $service = new ServiceDpdPickupOpenUMLFeV1();
            $service->setPudo($services->getDpdPickupPudo());
            $servicesObject->setDpdPickup($service);
        }

        return $servicesObject;
    }
}
