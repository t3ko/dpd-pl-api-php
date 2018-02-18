<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateSpedLabelsV3Request implements RequestInterface
{

    /**
     * @var DpdServicesParamsV1
     */
    private $dpdServicesParamsV1;

    /**
     * @var OutputDocFormatDSPEnumV1
     */
    private $outputDocFormatV1;

    /**
     * @var OutputDocPageFormatDSPEnumV1
     */
    private $outputDocPageFormatV1;

    /**
     * @var OutputLabelTypeEnumV1
     */
    private $outputLabelType;

    /**
     * @var string
     */
    private $labelVariant;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return DpdServicesParamsV1
     */
    public function getDpdServicesParams() : DpdServicesParamsV1
    {
        return $this->dpdServicesParamsV1;
    }

    /**
     * @param DpdServicesParamsV1 $dpdServicesParamsV1
     * @return $this
     */
    public function setDpdServicesParams(DpdServicesParamsV1 $dpdServicesParamsV1) : GenerateSpedLabelsV3Request
    {
        $this->dpdServicesParamsV1 = $dpdServicesParamsV1;
        return $this;
    }

    /**
     * @return OutputDocFormatDSPEnumV1
     */
    public function getOutputDocFormat() : OutputDocFormatDSPEnumV1
    {
        return $this->outputDocFormatV1;
    }

    /**
     * @param OutputDocFormatDSPEnumV1 $outputDocFormatV1
     * @return $this
     */
    public function setOutputDocFormat(OutputDocFormatDSPEnumV1 $outputDocFormatV1) : GenerateSpedLabelsV3Request
    {
        $this->outputDocFormatV1 = $outputDocFormatV1;
        return $this;
    }

    /**
     * @return OutputDocPageFormatDSPEnumV1
     */
    public function getOutputDocPageFormat() : OutputDocPageFormatDSPEnumV1
    {
        return $this->outputDocPageFormatV1;
    }

    /**
     * @param OutputDocPageFormatDSPEnumV1 $outputDocPageFormatV1
     * @return $this
     */
    public function setOutputDocPageFormat(OutputDocPageFormatDSPEnumV1 $outputDocPageFormatV1) : GenerateSpedLabelsV3Request
    {
        $this->outputDocPageFormatV1 = $outputDocPageFormatV1;
        return $this;
    }

    /**
     * @return OutputLabelTypeEnumV1
     */
    public function getOutputLabelType() : OutputLabelTypeEnumV1
    {
        return $this->outputLabelType;
    }

    /**
     * @param OutputLabelTypeEnumV1 $outputLabelType
     * @return $this
     */
    public function setOutputLabelType(OutputLabelTypeEnumV1 $outputLabelType) : GenerateSpedLabelsV3Request
    {
        $this->outputLabelType = $outputLabelType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelVariant() : string
    {
        return $this->labelVariant;
    }

    /**
     * @param string $labelVariant
     * @return $this
     */
    public function setLabelVariant(string $labelVariant) : GenerateSpedLabelsV3Request
    {
        $this->labelVariant = $labelVariant;
        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthData() : AuthDataV1
    {
        return $this->authDataV1;
    }

    /**
     * @param AuthDataV1 $authDataV1
     * @return $this
     */
    public function setAuthData(AuthDataV1 $authDataV1) : GenerateSpedLabelsV3Request
    {
        $this->authDataV1 = $authDataV1;
        return $this;
    }


}

