<?php

namespace T3ko\Dpd\Request\Serializer;

use Sabre\Xml\Service;
use Sabre\Xml\Writer;
use T3ko\Dpd\Objects\Package;
use T3ko\Dpd\Objects\Parcel;
use T3ko\Dpd\Objects\Receiver;
use T3ko\Dpd\Objects\Sender;
use T3ko\Dpd\Objects\Services;

class XmlPackagesSerializer
{
    /** @var Service */
    private $xmlEngine;

    /**
     * XmlPackagesSerializer constructor.
     */
    public function __construct()
    {
        $this->xmlEngine = new Service();
        $this->xmlEngine->classMap['T3ko\Dpd\Objects\Package'] = [$this, 'mapPackage'];
        $this->xmlEngine->classMap['T3ko\Dpd\Objects\Sender'] = [$this, 'mapAddress'];
        $this->xmlEngine->classMap['T3ko\Dpd\Objects\Receiver'] = [$this, 'mapAddress'];
        $this->xmlEngine->classMap['T3ko\Dpd\Objects\Parcel'] = [$this, 'mapParcel'];
        $this->xmlEngine->classMap['T3ko\Dpd\Objects\Services'] = [$this, 'mapServices'];
    }

    public function serialize(array $packages): string
    {
        $packagesArray = [];
        foreach ($packages as $package) {
            $packagesArray[] = [
                'name' => 'Package',
                'value' => $package,
            ];
        }
        $xml = $this->xmlEngine->write('Packages', $packagesArray);
        return $xml;
    }

    public function mapPackage(Writer $writer, $object)
    {
        /* @var Package $object */

        $parcelsArray = [];
        foreach ($object->getParcels() as $parcel) {
            $parcelsArray[] = [
                'name' => 'Parcel',
                'value' => $parcel,
            ];
        }

        $writer->write([
            'Parcels' => $parcelsArray,
            'PayerType' => (string)$object->getPayerType(),
            'Receiver' => $object->getReceiver(),
            'Reference' => '',
            'Ref1' => $object->getRef1(),
            'Ref2' => $object->getRef2(),
            'Ref3' => $object->getRef3(),
            'Sender' => $object->getSender(),
            'Services' => $object->getServices(),
            'ThirdPartyFID' => $object->getThirdPartyFid(),
            'Customer' => ['FID' => $object->getThirdPartyFid()],
        ]);
    }

    public function mapAddress(Writer $writer, $object)
    {
        /* @var Sender|Receiver $object */
        $writer->write([
            'Address' => $object->getAddress(),
            'CountryCode' => $object->getCountryCode(),
            'City' => $object->getCity(),
            'Company' => $object->getCompany(),
            'Email' => $object->getEmail(),
            'Name' => $object->getName(),
            'Phone' => $object->getPhone(),
            'PostalCode' => $object->getPostalCode(),
        ]);
    }

    public function mapParcel(Writer $writer, $object)
    {
        /* @var Parcel $object */
        $writer->write([
            'Content' => $object->getContents(),
            'CustomerData1' => $object->getCustomerNotes(),
            'CustomerData2' => '',
            'CustomerData3' => '',
            'SizeX' => $object->getSizeX(),
            'SizeY' => $object->getSizeY(),
            'SizeZ' => $object->getSizeZ(),
            'Weight' => $object->getWeight(),
        ] + (empty($object->getReference()) ? [] : ['Reference' => $object->getReference()]));
    }

    public function mapServices(Writer $writer, $object)
    {
        /* @var Services $object */
        $servicesArray = [];

        if ($object->isCarryIn()) {
            $servicesArray['CarryIn'] = '';
        }
        if ($object->getCodCurrency() && $object->getCodAmount()) {
            $servicesArray['COD'] = [
                'Currency' => (string) $object->getCodCurrency(),
                'Amount' => $object->getCodAmount(),
            ];
        }
        if ($object->isCud()) {
            $servicesArray['CUD'] = '';
        }
        if ($object->getDeclaredValueCurrency() && $object->getDeclaredValueAmount()) {
            $servicesArray['DeclaredValue'] = [
                'Currency' => (string) $object->getDeclaredValueCurrency(),
                'Amount' => $object->getDeclaredValueAmount(),
            ];
        }
        if ($object->isDedicatedDelivery()) {
            $servicesArray['DedicatedDelivery'] = '';
        }
        if ($object->isDocumentsInternational()) {
            $servicesArray['DocumentsInternational'] = '';
        }
        if ($object->isDox()) {
            $servicesArray['DOX'] = '';
        }
        if ($object->isDpdExpress()) {
            $servicesArray['DpdExpress'] = '';
        }
        if ($object->getDpdPickupPudo()) {
            $servicesArray['DpdPickup'] = $object->getDpdPickupPudo();
        }
        if ($object->getDutyCurrency() && $this->getDutyAmount()) {
            $servicesArray['Duty'] = [
                'Currency' => (string) $object->getDutyCurrency(),
                'Amount' => $object->getDutyAmount(),
            ];
        }
        if ($object->getGuaranteeType() && $object->getGuaranteeValue()) {
            $servicesArray['Guarantee'] = [
                'Type' => (string) $object->getGuaranteeType(),
                'Value' => $object->getGuaranteeValue(),
            ];
        }
        if ($object->isInPers()) {
            $servicesArray['InPers'] = '';
        }
        if ($object->isPallet()) {
            $servicesArray['Pallet'] = '';
        }
        if ($object->isPrivPers()) {
            $servicesArray['PrivPers'] = '';
        }
        if ($object->isRod()) {
            $servicesArray['ROD'] = '';
        }
        if ($object->getSelfCollection()) {
            $servicesArray['SelfCol'] = (string) $object->getSelfCollection();
        }
        if ($object->isTires()) {
            $servicesArray['Tires'] = '';
        }
        if ($object->isTiresExport()) {
            $servicesArray['TiresExport'] = '';
        }

        $writer->write($servicesArray);
    }
}
