<?php

namespace T3ko\Dpd\Response;

use T3ko\Dpd\Objects\RegisteredPackage;
use T3ko\Dpd\Objects\RegisteredParcel;
use T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV4Response;
use T3ko\Dpd\Soap\Types\PackagePGRV2;
use T3ko\Dpd\Soap\Types\ParcelPGRV2;

class GeneratePackageNumbersResponse
{
    private $packages;

    /**
     * GeneratePackageNumbersResponse constructor.
     *
     * @param RegisteredPackage[] $packages
     */
    protected function __construct(array $packages)
    {
        $this->packages = $packages;
    }

    /**
     * @param GeneratePackagesNumbersV4Response $response
     *
     * @throws \Exception
     *
     * @return GeneratePackageNumbersResponse
     */
    public static function from(GeneratePackagesNumbersV4Response $response)
    {
        if ('OK' !== $response->getReturn()->getStatus()) {
            throw new \Exception($response->getReturn()->getStatus());
        }

        if (null !== $response->getReturn()->getPackages() && is_array($response->getReturn()->getPackages()->Package)) {
            $packages = $response->getReturn()->getPackages()->Package;
            $registeredPackages = [];

            /** @var PackagePGRV2 $package */
            foreach ($packages as $package) {
                $packageValidationDetails = [];
                if (null !== $package->getValidationDetails() && is_array($package->getValidationDetails()->ValidationInfo)) {
                    $packageValidationDetails = $package->getValidationDetails()->ValidationInfo;
                }

                $parcels = [];
                if (null !== $package->getParcels() && is_array($package->getParcels()->Parcel)) {
                    $parcels = $package->getParcels()->Parcel;
                }

                $registeredParcels = [];
                /** @var ParcelPGRV2 $parcel */
                foreach ($parcels as $parcel) {
                    $parcelValidationDetails = [];
                    if (null !== $parcel->getValidationDetails() && is_array($parcel->getValidationDetails()->ValidationInfo)) {
                        $parcelValidationDetails = $parcel->getValidationDetails()->ValidationInfo;
                    }

                    $registeredParcels[] = new RegisteredParcel(
                        $parcel->getParcelId(),
                        $parcel->getStatus(),
                        $parcel->getReference(),
                        $parcelValidationDetails,
                        $parcel->getWaybill()
                    );
                }

                $registeredPackages[] = new RegisteredPackage(
                    $package->getPackageId(),
                    $package->getStatus(),
                    $package->getReference(),
                    $packageValidationDetails,
                    $registeredParcels
                );
            }

            return new static($registeredPackages);
        }
    }

    /**
     * @return RegisteredPackage[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
}
