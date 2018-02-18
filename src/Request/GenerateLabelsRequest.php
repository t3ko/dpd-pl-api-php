<?php

namespace T3ko\Dpd\Request;

use T3ko\Dpd\Objects\Enum\FileType;
use T3ko\Dpd\Objects\Enum\LabelPrintingPolicy;
use T3ko\Dpd\Objects\Enum\PageSize;
use T3ko\Dpd\Objects\Enum\SessionType;
use T3ko\Dpd\Soap\Types\DpdServicesParamsV1;
use T3ko\Dpd\Soap\Types\GenerateSpedLabelsV1Request;
use T3ko\Dpd\Soap\Types\OutputDocFormatDSPEnumV1;
use T3ko\Dpd\Soap\Types\OutputDocPageFormatDSPEnumV1;
use T3ko\Dpd\Soap\Types\PackageDSPV1;
use T3ko\Dpd\Soap\Types\ParcelDSPV1;
use T3ko\Dpd\Soap\Types\PolicyDSPEnumV1;
use T3ko\Dpd\Soap\Types\SessionDSPV1;
use T3ko\Dpd\Soap\Types\SessionTypeDSPEnumV1;

class GenerateLabelsRequest
{
    private $pageFormat;
    private $pageSize;
    private $parcelIds;
    private $references;
    private $waybills;
    private $printingPolicy;

    /**
     * GenerateLabelsRequest constructor.
     *
     * @param $parcelIds
     * @param $references
     * @param $waybills
     */
    protected function __construct(array $parcelIds = [], array $references = [], array $waybills = [])
    {
        $this->parcelIds = $parcelIds;
        $this->references = $references;
        $this->waybills = $waybills;
        $this->pageFormat = FileType::PDF();
        $this->pageSize = PageSize::A4();
        $this->printingPolicy = LabelPrintingPolicy::IGNORE_ERRORS();
    }

    public static function fromParcelIds(array $parcelIds): GenerateLabelsRequest
    {
        return new static($parcelIds);
    }

    public static function fromReferences(array $references): GenerateLabelsRequest
    {
        return new static([], $references);
    }

    public static function fromWaybills(array $waybills): GenerateLabelsRequest
    {
        return new static([], [], $waybills);
    }

    /**
     * @return GenerateSpedLabelsV1Request
     */
    public function toPayload(): GenerateSpedLabelsV1Request
    {
        $request = new GenerateSpedLabelsV1Request();
        $request->setOutputDocFormat(new OutputDocFormatDSPEnumV1((string) $this->pageFormat));
        $request->setOutputDocPageFormat(new OutputDocPageFormatDSPEnumV1((string) $this->pageSize));

        $serviceParams = new DpdServicesParamsV1();
        $serviceParams->setPolicy(new PolicyDSPEnumV1((string) $this->printingPolicy));

        $session = new SessionDSPV1();
        $session->setSessionType(new SessionTypeDSPEnumV1((string) SessionType::DOMESTIC()));

        $parcels = [];
        if (!empty($this->parcelIds)) {
            foreach ($this->parcelIds as $parcelId) {
                $parcel = new ParcelDSPV1();
                $parcel->setParcelId($parcelId);
                $parcels[] = $parcel;
            }
        }

        if (!empty($this->references)) {
            foreach ($this->references as $reference) {
                //$package = new PackageDSPV1();
                $parcel = new ParcelDSPV1();
                $parcel->setReference($reference);
                $parcels[] = $parcel;
            }
        }

        if (!empty($this->waybills)) {
            foreach ($this->waybills as $waybill) {
                //$package = new PackageDSPV1();
                $parcel = new ParcelDSPV1();
                $parcel->setWaybill($waybill);
                $parcels[] = $parcel;
            }
        }
        $package = new PackageDSPV1();
        $package->setParcels($parcels);
        $session->setPackages([$package]);
        $serviceParams->setSession($session);
        $request->setDpdServicesParams($serviceParams);

        return $request;
    }
}
