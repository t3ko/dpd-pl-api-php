<?php

namespace T3ko\Dpd;

use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Psr\Log\LoggerInterface;
use T3ko\Dpd\Request\CollectionOrderRequest;
use T3ko\Dpd\Request\FindPostalCodeRequest;
use T3ko\Dpd\Request\GenerateLabelsRequest;
use T3ko\Dpd\Request\GeneratePackageNumbersRequest;
use T3ko\Dpd\Request\GenerateProtocolRequest;
use T3ko\Dpd\Request\GetCourierAvailabilityRequest;
use T3ko\Dpd\Request\GetParcelTrackingRequest;
use T3ko\Dpd\Response\CollectionOrderResponse;
use T3ko\Dpd\Response\FindPostalCodeResponse;
use T3ko\Dpd\Response\GenerateLabelsResponse;
use T3ko\Dpd\Response\GeneratePackageNumbersResponse;
use T3ko\Dpd\Response\GenerateProtocolResponse;
use T3ko\Dpd\Response\GetCourierAvailabilityResponse;
use T3ko\Dpd\Response\GetParcelTrackingResponse;
use T3ko\Dpd\Soap\Client\AppServicesClient;
use T3ko\Dpd\Soap\Client\InfoServicesClient;
use T3ko\Dpd\Soap\Client\PackageServicesClient;
use T3ko\Dpd\Soap\Types\AuthDataV1;

class Api
{
    const PACKAGESERVICE_SANDBOX_WSDL_URL = 'http://dpdservicesdemo.dpd.com.pl/DPDPackageObjServicesService/DPDPackageObjServices?wsdl';
    const PACKAGESERVICE_PRODUCTION_WSDL_URL = 'http://dpdservices.dpd.com.pl/DPDPackageObjServicesService/DPDPackageObjServices?wsdl';
    const APPSERVICE_SANDBOX_WSDL_URL = 'http://dpdappservicesdemo.dpd.com.pl/DPDCRXmlServicesService/DPDCRXmlServices?wsdl';
    const APPSERVICE_PRODUCTION_WSDL_URL = 'http://dpdappservices.dpd.com.pl/DPDCRXmlServicesService/DPDCRXmlServices?wsdl';
    const INFOSERVICE_SANDBOX_WSDL_URL = null;
    const INFOSERVICE_PRODUCTION_WSDL_URL = 'https://dpdinfoservices.dpd.com.pl/DPDInfoServicesObjEventsService/DPDInfoServicesObjEvents?wsdl';

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $masterFid;

    /**
     * @var bool
     */
    private $sandboxMode = false;

    /**
     * @var PackageServicesClient
     */
    private $packageServicesClient;

    /**
     * @var AppServicesClient
     */
    private $appServicesClient;

    /**
     * @var InfoServicesClient
     */
    private $infoServicesClient;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Api constructor.
     *
     * @param string $login
     * @param string $password
     * @param int    $masterFid
     */
    public function __construct(string $login, string $password, int $masterFid)
    {
        $this->login = $login;
        $this->password = $password;
        $this->masterFid = $masterFid;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getMasterFid(): int
    {
        return $this->masterFid;
    }

    /**
     * @param int $masterFid
     */
    public function setMasterFid(int $masterFid)
    {
        $this->masterFid = $masterFid;
    }

    /**
     * @return bool
     */
    public function isSandboxMode(): bool
    {
        return $this->sandboxMode;
    }

    /**
     * @param bool $sandboxMode
     */
    public function setSandboxMode(bool $sandboxMode)
    {
        $this->sandboxMode = $sandboxMode;
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param string $clientClass
     *
     * @return string
     */
    private function getWsdl($clientClass)
    {
        if ($this->sandboxMode) {
            switch ($clientClass) {
                case PackageServicesClient::class:
                    return self::PACKAGESERVICE_SANDBOX_WSDL_URL;
                case AppServicesClient::class:
                    return self::APPSERVICE_SANDBOX_WSDL_URL;
                case InfoServicesClient::class:
                    //InfoServices endpoint has no sandbox mode - using production instead
                    return self::INFOSERVICE_PRODUCTION_WSDL_URL;
            }
        }

        switch ($clientClass) {
            case PackageServicesClient::class:
                return self::PACKAGESERVICE_PRODUCTION_WSDL_URL;
            case AppServicesClient::class:
                return self::APPSERVICE_PRODUCTION_WSDL_URL;
            case InfoServicesClient::class:
                return self::INFOSERVICE_PRODUCTION_WSDL_URL;
        }
    }

    /**
     * @return PackageServicesClient
     */
    private function obtainPackageServiceClient()
    {
        if ($this->packageServicesClient === null) {
            $this->packageServicesClient = $this->obtainClient(PackageServicesClient::class);
        }

        return $this->packageServicesClient;
    }

    /**
     * @return AppServicesClient
     */
    private function obtainAppServiceClient()
    {
        if ($this->appServicesClient === null) {
            $this->appServicesClient = $this->obtainClient(AppServicesClient::class);
        }

        return $this->appServicesClient;
    }

    /**
     * @return InfoServicesClient
     */
    private function obtainInfoServiceClient()
    {
        if ($this->infoServicesClient === null) {
            $this->infoServicesClient = $this->obtainClient(InfoServicesClient::class);
        }

        return $this->infoServicesClient;
    }

    /**
     * @param $clientClass
     *
     * @return \Phpro\SoapClient\ClientInterface
     */
    private function obtainClient($clientClass)
    {
        $factory = new ClientFactory($clientClass);
        $builder = new ClientBuilder(
            $factory,
            $this->getWsdl($clientClass),
            [
                'cache_wsdl' => WSDL_CACHE_NONE,
            ]
        );
        $builder->withHandler(HttPlugHandle::createWithDefaultClient());
        $builder->withClassMaps($this->getClassMaps());
        if ($this->logger instanceof LoggerInterface) {
            $builder->withLogger($this->logger);
        }

        return $builder->build();
    }

    private function getClassMaps()
    {
        return new ClassMapCollection([
            new ClassMap('generatePackagesNumbersV1', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV1Request::class),
            new ClassMap('openUMLFeV1', \T3ko\Dpd\Soap\Types\OpenUMLFeV1::class),
            new ClassMap('packageOpenUMLFeV1', \T3ko\Dpd\Soap\Types\PackageOpenUMLFeV1::class),
            new ClassMap('parcelOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ParcelOpenUMLFeV1::class),
            new ClassMap('packageAddressOpenUMLFeV1', \T3ko\Dpd\Soap\Types\PackageAddressOpenUMLFeV1::class),
            new ClassMap('servicesOpenUMLFeV2', \T3ko\Dpd\Soap\Types\ServicesOpenUMLFeV2::class),
            new ClassMap('serviceCarryInOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceCarryInOpenUMLFeV1::class),
            new ClassMap('serviceCODOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceCODOpenUMLFeV1::class),
            new ClassMap('serviceCUDOpenUMLeFV1', \T3ko\Dpd\Soap\Types\ServiceCUDOpenUMLeFV1::class),
            new ClassMap('serviceDeclaredValueOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceDeclaredValueOpenUMLFeV1::class),
            new ClassMap('serviceDedicatedDeliveryOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceDedicatedDeliveryOpenUMLFeV1::class),
            new ClassMap('servicePalletOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServicePalletOpenUMLFeV1::class),
            new ClassMap('serviceDutyOpenUMLeFV1', \T3ko\Dpd\Soap\Types\ServiceDutyOpenUMLeFV1::class),
            new ClassMap('serviceGuaranteeOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceGuaranteeOpenUMLFeV1::class),
            new ClassMap('serviceInPersOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceInPersOpenUMLFeV1::class),
            new ClassMap('servicePrivPersOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServicePrivPersOpenUMLFeV1::class),
            new ClassMap('serviceRODOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceRODOpenUMLFeV1::class),
            new ClassMap('serviceSelfColOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceSelfColOpenUMLFeV1::class),
            new ClassMap('serviceTiresOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceTiresOpenUMLFeV1::class),
            new ClassMap('serviceTiresExportOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceTiresExportOpenUMLFeV1::class),
            new ClassMap('authDataV1', \T3ko\Dpd\Soap\Types\AuthDataV1::class),
            new ClassMap('generatePackagesNumbersV1Response', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV1Response::class),
            new ClassMap('packagesGenerationResponseV1', \T3ko\Dpd\Soap\Types\PackagesGenerationResponseV1::class),
            new ClassMap('sessionPGRV1', \T3ko\Dpd\Soap\Types\SessionPGRV1::class),
            new ClassMap('packagePGRV1', \T3ko\Dpd\Soap\Types\PackagePGRV1::class),
            new ClassMap('invalidFieldPGRV1', \T3ko\Dpd\Soap\Types\InvalidFieldPGRV1::class),
            new ClassMap('parcelPGRV1', \T3ko\Dpd\Soap\Types\ParcelPGRV1::class),
            new ClassMap('DPDServiceException', \T3ko\Dpd\Soap\Types\DPDServiceException::class),
            new ClassMap('packagesPickupCallV4', \T3ko\Dpd\Soap\Types\PackagesPickupCallV4Request::class),
            new ClassMap('dpdPickupCallParamsV3', \T3ko\Dpd\Soap\Types\DpdPickupCallParamsV3::class),
            new ClassMap('pickupCallSimplifiedDetailsDPPV1', \T3ko\Dpd\Soap\Types\PickupCallSimplifiedDetailsDPPV1::class),
            new ClassMap('pickupPackagesParamsDPPV1', \T3ko\Dpd\Soap\Types\PickupPackagesParamsDPPV1::class),
            new ClassMap('pickupCustomerDPPV1', \T3ko\Dpd\Soap\Types\PickupCustomerDPPV1::class),
            new ClassMap('pickupPayerDPPV1', \T3ko\Dpd\Soap\Types\PickupPayerDPPV1::class),
            new ClassMap('pickupSenderDPPV1', \T3ko\Dpd\Soap\Types\PickupSenderDPPV1::class),
            new ClassMap('packagesPickupCallV4Response', \T3ko\Dpd\Soap\Types\PackagesPickupCallV4Response::class),
            new ClassMap('packagesPickupCallResponseV3', \T3ko\Dpd\Soap\Types\PackagesPickupCallResponseV3::class),
            new ClassMap('statusInfoPCRV2', \T3ko\Dpd\Soap\Types\StatusInfoPCRV2::class),
            new ClassMap('errorDetailsPCRV2', \T3ko\Dpd\Soap\Types\ErrorDetailsPCRV2::class),
            new ClassMap('packagesPickupCallV3', \T3ko\Dpd\Soap\Types\PackagesPickupCallV3Request::class),
            new ClassMap('packagesPickupCallV3Response', \T3ko\Dpd\Soap\Types\PackagesPickupCallV3Response::class),
            new ClassMap('getCourierOrderAvailabilityV1', \T3ko\Dpd\Soap\Types\GetCourierOrderAvailabilityV1Request::class),
            new ClassMap('senderPlaceV1', \T3ko\Dpd\Soap\Types\SenderPlaceV1::class),
            new ClassMap('getCourierOrderAvailabilityV1Response', \T3ko\Dpd\Soap\Types\GetCourierOrderAvailabilityV1Response::class),
            new ClassMap('getCourierOrderAvailabilityResponseV1', \T3ko\Dpd\Soap\Types\GetCourierOrderAvailabilityResponseV1::class),
            new ClassMap('courierOrderAvailabilityRangeV1', \T3ko\Dpd\Soap\Types\CourierOrderAvailabilityRangeV1::class),
            new ClassMap('Exception', \T3ko\Dpd\Soap\Types\Exception::class),
            new ClassMap('packagesPickupCallV2', \T3ko\Dpd\Soap\Types\PackagesPickupCallV2Request::class),
            new ClassMap('dpdPickupCallParamsV2', \T3ko\Dpd\Soap\Types\DpdPickupCallParamsV2::class),
            new ClassMap('packagesPickupCallV2Response', \T3ko\Dpd\Soap\Types\PackagesPickupCallV2Response::class),
            new ClassMap('packagesPickupCallResponseV2', \T3ko\Dpd\Soap\Types\PackagesPickupCallResponseV2::class),
            new ClassMap('generatePackagesNumbersV4', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV4Request::class),
            new ClassMap('openUMLFeV3', \T3ko\Dpd\Soap\Types\OpenUMLFeV3::class),
            new ClassMap('packageOpenUMLFeV3', \T3ko\Dpd\Soap\Types\PackageOpenUMLFeV3::class),
            new ClassMap('servicesOpenUMLFeV4', \T3ko\Dpd\Soap\Types\ServicesOpenUMLFeV4::class),
            new ClassMap('serviceFlagOpenUMLF', \T3ko\Dpd\Soap\Types\ServiceFlagOpenUMLF::class),
            new ClassMap('serviceDpdPickupOpenUMLFeV1', \T3ko\Dpd\Soap\Types\ServiceDpdPickupOpenUMLFeV1::class),
            new ClassMap('serviceDutyOpenUMLeFV2', \T3ko\Dpd\Soap\Types\ServiceDutyOpenUMLeFV2::class),
            new ClassMap('generatePackagesNumbersV4Response', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV4Response::class),
            new ClassMap('packagesGenerationResponseV2', \T3ko\Dpd\Soap\Types\PackagesGenerationResponseV2::class),
            new ClassMap('sessionPGRV2', \T3ko\Dpd\Soap\Types\SessionPGRV2::class),
            new ClassMap('packagePGRV2', \T3ko\Dpd\Soap\Types\PackagePGRV2::class),
            new ClassMap('ValidationDetails', \T3ko\Dpd\Soap\Types\ValidationDetails::class),
            new ClassMap('validationInfoPGRV2', \T3ko\Dpd\Soap\Types\ValidationInfoPGRV2::class),
            new ClassMap('parcelPGRV2', \T3ko\Dpd\Soap\Types\ParcelPGRV2::class),
            new ClassMap('packagesPickupCallV1', \T3ko\Dpd\Soap\Types\PackagesPickupCallV1Request::class),
            new ClassMap('dpdPickupCallParamsV1', \T3ko\Dpd\Soap\Types\DpdPickupCallParamsV1::class),
            new ClassMap('contactInfoDPPV1', \T3ko\Dpd\Soap\Types\ContactInfoDPPV1::class),
            new ClassMap('pickupAddressDSPV1', \T3ko\Dpd\Soap\Types\PickupAddressDSPV1::class),
            new ClassMap('protocolDPPV1', \T3ko\Dpd\Soap\Types\ProtocolDPPV1::class),
            new ClassMap('packagesPickupCallV1Response', \T3ko\Dpd\Soap\Types\PackagesPickupCallV1Response::class),
            new ClassMap('packagesPickupCallResponseV1', \T3ko\Dpd\Soap\Types\PackagesPickupCallResponseV1::class),
            new ClassMap('protocolPCRV1', \T3ko\Dpd\Soap\Types\ProtocolPCRV1::class),
            new ClassMap('statusInfoPCRV1', \T3ko\Dpd\Soap\Types\StatusInfoPCRV1::class),
            new ClassMap('generatePackagesNumbersV2', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV2Request::class),
            new ClassMap('generatePackagesNumbersV2Response', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV2Response::class),
            new ClassMap('appendParcelsToPackageV1', \T3ko\Dpd\Soap\Types\AppendParcelsToPackageV1Request::class),
            new ClassMap('parcelsAppendV1', \T3ko\Dpd\Soap\Types\ParcelsAppendV1::class),
            new ClassMap('parcelsAppendSearchCriteriaPAV1', \T3ko\Dpd\Soap\Types\ParcelsAppendSearchCriteriaPAV1::class),
            new ClassMap('parcelAppendPAV1', \T3ko\Dpd\Soap\Types\ParcelAppendPAV1::class),
            new ClassMap('appendParcelsToPackageV1Response', \T3ko\Dpd\Soap\Types\AppendParcelsToPackageV1Response::class),
            new ClassMap('parcelsAppendResponseV1', \T3ko\Dpd\Soap\Types\ParcelsAppendResponseV1::class),
            new ClassMap('invalidFieldPAV1', \T3ko\Dpd\Soap\Types\InvalidFieldPAV1::class),
            new ClassMap('parcelsAppendParcelPAV1', \T3ko\Dpd\Soap\Types\ParcelsAppendParcelPAV1::class),
            new ClassMap('generatePackagesNumbersV3', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV3Request::class),
            new ClassMap('openUMLFeV2', \T3ko\Dpd\Soap\Types\OpenUMLFeV2::class),
            new ClassMap('packageOpenUMLFeV2', \T3ko\Dpd\Soap\Types\PackageOpenUMLFeV2::class),
            new ClassMap('servicesOpenUMLFeV3', \T3ko\Dpd\Soap\Types\ServicesOpenUMLFeV3::class),
            new ClassMap('generatePackagesNumbersV3Response', \T3ko\Dpd\Soap\Types\GeneratePackagesNumbersV3Response::class),
            new ClassMap('importDeliveryBusinessEventV1', \T3ko\Dpd\Soap\Types\ImportDeliveryBusinessEventV1Request::class),
            new ClassMap('dpdParcelBusinessEventV1', \T3ko\Dpd\Soap\Types\DpdParcelBusinessEventV1::class),
            new ClassMap('dpdParcelBusinessEventDataV1', \T3ko\Dpd\Soap\Types\DpdParcelBusinessEventDataV1::class),
            new ClassMap('importDeliveryBusinessEventV1Response', \T3ko\Dpd\Soap\Types\ImportDeliveryBusinessEventV1Response::class),
            new ClassMap('importDeliveryBusinessEventResponseV1', \T3ko\Dpd\Soap\Types\ImportDeliveryBusinessEventResponseV1::class),
            new ClassMap('DeniedAccessWSException', \T3ko\Dpd\Soap\Types\DeniedAccessWSException::class),
            new ClassMap('SchemaValidationException', \T3ko\Dpd\Soap\Types\SchemaValidationException::class),
            new ClassMap('generateSpedLabelsV1', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV1Request::class),
            new ClassMap('dpdServicesParamsV1', \T3ko\Dpd\Soap\Types\DpdServicesParamsV1::class),
            new ClassMap('sessionDSPV1', \T3ko\Dpd\Soap\Types\SessionDSPV1::class),
            new ClassMap('packageDSPV1', \T3ko\Dpd\Soap\Types\PackageDSPV1::class),
            new ClassMap('parcelDSPV1', \T3ko\Dpd\Soap\Types\ParcelDSPV1::class),
            new ClassMap('generateSpedLabelsV1Response', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV1Response::class),
            new ClassMap('documentGenerationResponseV1', \T3ko\Dpd\Soap\Types\DocumentGenerationResponseV1::class),
            new ClassMap('sessionDGRV1', \T3ko\Dpd\Soap\Types\SessionDGRV1::class),
            new ClassMap('packageDGRV1', \T3ko\Dpd\Soap\Types\PackageDGRV1::class),
            new ClassMap('parcelDGRV1', \T3ko\Dpd\Soap\Types\ParcelDGRV1::class),
            new ClassMap('statusInfoDGRV1', \T3ko\Dpd\Soap\Types\StatusInfoDGRV1::class),
            new ClassMap('findPostalCodeV1', \T3ko\Dpd\Soap\Types\FindPostalCodeV1Request::class),
            new ClassMap('postalCodeV1', \T3ko\Dpd\Soap\Types\PostalCodeV1::class),
            new ClassMap('findPostalCodeV1Response', \T3ko\Dpd\Soap\Types\FindPostalCodeV1Response::class),
            new ClassMap('findPostalCodeResponseV1', \T3ko\Dpd\Soap\Types\FindPostalCodeResponseV1::class),
            new ClassMap('generateProtocolV1', \T3ko\Dpd\Soap\Types\GenerateProtocolV1Request::class),
            new ClassMap('generateProtocolV1Response', \T3ko\Dpd\Soap\Types\GenerateProtocolV1Response::class),
            new ClassMap('generateProtocolsWithDestinationsV2', \T3ko\Dpd\Soap\Types\GenerateProtocolsWithDestinationsV2Request::class),
            new ClassMap('dpdServicesParamsV2', \T3ko\Dpd\Soap\Types\DpdServicesParamsV2::class),
            new ClassMap('DeliveryDestinations', \T3ko\Dpd\Soap\Types\DeliveryDestinations::class),
            new ClassMap('sessionDSPV2', \T3ko\Dpd\Soap\Types\SessionDSPV2::class),
            new ClassMap('packageDSPV2', \T3ko\Dpd\Soap\Types\PackageDSPV2::class),
            new ClassMap('parcelDSPV2', \T3ko\Dpd\Soap\Types\ParcelDSPV2::class),
            new ClassMap('pickupAddressDSPV2', \T3ko\Dpd\Soap\Types\PickupAddressDSPV2::class),
            new ClassMap('deliveryDestination', \T3ko\Dpd\Soap\Types\DeliveryDestination::class),
            new ClassMap('DepotList', \T3ko\Dpd\Soap\Types\DepotList::class),
            new ClassMap('protocolDepot', \T3ko\Dpd\Soap\Types\ProtocolDepot::class),
            new ClassMap('generateProtocolsWithDestinationsV2Response', \T3ko\Dpd\Soap\Types\GenerateProtocolsWithDestinationsV2Response::class),
            new ClassMap('documentGenerationResponseV2', \T3ko\Dpd\Soap\Types\DocumentGenerationResponseV2::class),
            new ClassMap('DestinationDataList', \T3ko\Dpd\Soap\Types\DestinationDataList::class),
            new ClassMap('destinationsData', \T3ko\Dpd\Soap\Types\DestinationsData::class),
            new ClassMap('nonMatchingData', \T3ko\Dpd\Soap\Types\NonMatchingData::class),
            new ClassMap('sessionDGRV2', \T3ko\Dpd\Soap\Types\SessionDGRV2::class),
            new ClassMap('packageDGRV2', \T3ko\Dpd\Soap\Types\PackageDGRV2::class),
            new ClassMap('parcelDGRV2', \T3ko\Dpd\Soap\Types\ParcelDGRV2::class),
            new ClassMap('statusInfoDGRV2', \T3ko\Dpd\Soap\Types\StatusInfoDGRV2::class),
            new ClassMap('generateSpedLabelsV4', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV4Request::class),
            new ClassMap('generateSpedLabelsV4Response', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV4Response::class),
            new ClassMap('generateProtocolsWithDestinationsV1', \T3ko\Dpd\Soap\Types\GenerateProtocolsWithDestinationsV1Request::class),
            new ClassMap('generateProtocolsWithDestinationsV1Response', \T3ko\Dpd\Soap\Types\GenerateProtocolsWithDestinationsV1Response::class),
            new ClassMap('generateProtocolV2', \T3ko\Dpd\Soap\Types\GenerateProtocolV2Request::class),
            new ClassMap('generateProtocolV2Response', \T3ko\Dpd\Soap\Types\GenerateProtocolV2Response::class),
            new ClassMap('generateSpedLabelsV3', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV3Request::class),
            new ClassMap('generateSpedLabelsV3Response', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV3Response::class),
            new ClassMap('generateSpedLabelsV2', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV2Request::class),
            new ClassMap('generateSpedLabelsV2Response', \T3ko\Dpd\Soap\Types\GenerateSpedLabelsV2Response::class),
            new ClassMap('importPackagesXV1', \T3ko\Dpd\Soap\Types\ImportPackagesXV1Request::class),
            new ClassMap('importPackagesXV1Response', \T3ko\Dpd\Soap\Types\ImportPackagesXV1Response::class),
            new ClassMap('getEventsForCustomerV4', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV4Request::class),
            new ClassMap('getEventsForCustomerV4Response', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV4Response::class),
            new ClassMap('customerEventsResponseV2', \T3ko\Dpd\Soap\Types\CustomerEventsResponseV2::class),
            new ClassMap('customerEventV2', \T3ko\Dpd\Soap\Types\CustomerEventV2::class),
            new ClassMap('customerEventDataV2', \T3ko\Dpd\Soap\Types\CustomerEventDataV2::class),
            new ClassMap('getEventsForCustomerV3', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV3Request::class),
            new ClassMap('getEventsForCustomerV3Response', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV3Response::class),
            new ClassMap('getEventsForCustomerV2', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV2Request::class),
            new ClassMap('getEventsForCustomerV2Response', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV2Response::class),
            new ClassMap('customerEventsResponseV1', \T3ko\Dpd\Soap\Types\CustomerEventsResponseV1::class),
            new ClassMap('customerEventV1', \T3ko\Dpd\Soap\Types\CustomerEventV1::class),
            new ClassMap('getEventsForCustomerV1', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV1Request::class),
            new ClassMap('getEventsForCustomerV1Response', \T3ko\Dpd\Soap\Types\GetEventsForCustomerV1Response::class),
            new ClassMap('getEventsForWaybillV1', \T3ko\Dpd\Soap\Types\GetEventsForWaybillV1Request::class),
            new ClassMap('getEventsForWaybillV1Response', \T3ko\Dpd\Soap\Types\GetEventsForWaybillV1Response::class),
            new ClassMap('customerEventsResponseV3', \T3ko\Dpd\Soap\Types\CustomerEventsResponseV3::class),
            new ClassMap('customerEventV3', \T3ko\Dpd\Soap\Types\CustomerEventV3::class),
            new ClassMap('customerEventDataV3', \T3ko\Dpd\Soap\Types\CustomerEventDataV3::class),
            new ClassMap('markEventsAsProcessedV1Response', \T3ko\Dpd\Soap\Types\MarkEventsAsProcessedV1Response::class),
        ]);
    }

    private function getAuthDataStruct() : AuthDataV1
    {
        $authData = new AuthDataV1();
        $authData->setLogin($this->login);
        $authData->setPassword($this->password);
        $authData->setMasterFid($this->masterFid);

        return $authData;
    }

    /**
     * @param FindPostalCodeRequest $request
     *
     * @return FindPostalCodeResponse
     */
    public function findPostalCode(FindPostalCodeRequest $request): FindPostalCodeResponse
    {
        $payload = $request->toPayload();
        $payload->setAuthData($this->getAuthDataStruct());
        $response = $this->obtainPackageServiceClient()->findPostalCodeV1($payload);

        return FindPostalCodeResponse::from($response);
    }

    /**
     * @param GeneratePackageNumbersRequest $request
     *
     * @return GeneratePackageNumbersResponse
     */
    public function generatePackageNumbers(GeneratePackageNumbersRequest $request): GeneratePackageNumbersResponse
    {
        $payload = $request->toPayload();
        $payload->setAuthData($this->getAuthDataStruct());
        $response = $this->obtainPackageServiceClient()->generatePackagesNumbersV4($payload);

        return GeneratePackageNumbersResponse::from($response);
    }

    /**
     * @param GenerateLabelsRequest $request
     *
     * @return GenerateLabelsResponse
     */
    public function generateLabels(GenerateLabelsRequest $request): GenerateLabelsResponse
    {
        $payload = $request->toPayload();
        $payload->setAuthData($this->getAuthDataStruct());
        $response = $this->obtainPackageServiceClient()->generateSpedLabelsV1($payload);

        return GenerateLabelsResponse::from($response);
    }

    /**
     * @param GenerateProtocolRequest $request
     *
     * @return GenerateProtocolResponse
     */
    public function generateProtocol(GenerateProtocolRequest $request): GenerateProtocolResponse
    {
        $payload = $request->toPayload();
        $payload->setAuthData($this->getAuthDataStruct());
        $response = $this->obtainPackageServiceClient()->generateProtocolV2($payload);

        return GenerateProtocolResponse::from($response);
    }

    /**
     * @param GetCourierAvailabilityRequest $request
     *
     * @return GetCourierAvailabilityResponse
     */
    public function getCourierAvailability(GetCourierAvailabilityRequest $request): GetCourierAvailabilityResponse
    {
        $payload = $request->toPayload();
        $payload->setAuthData($this->getAuthDataStruct());
        $response = $this->obtainPackageServiceClient()->getCourierOrderAvailabilityV1($payload);

        return GetCourierAvailabilityResponse::from($response);
    }

    /**
     * @param CollectionOrderRequest $request
     *
     * @return CollectionOrderResponse
     */
    public function collectionOrder(CollectionOrderRequest $request): CollectionOrderResponse
    {
        $payload = $request->toPayload();
        $payload->setAuthDataV1($this->getAuthDataStruct());
        $response = $this->obtainAppServiceClient()->importPackagesXV1($payload);

        return CollectionOrderResponse::from($response);
    }

    /**
     * @param GetParcelTrackingRequest $request
     *
     * @return GetParcelTrackingResponse
     */
    public function getParcelTracking(GetParcelTrackingRequest $request): GetParcelTrackingResponse
    {
        $payload = $request->toPayload();
        $payload->setAuthData($this->getAuthDataStruct());
        $response = $this->obtainInfoServiceClient()->getEventsForWaybillV1($payload);

        return GetParcelTrackingResponse::from($response);
    }
}
