<?php

namespace T3ko\Dpd\Soap\Types;

class DocumentGenerationResponseV2
{
    /**
     * @var DestinationDataList
     */
    private $destinationDataList;

    /**
     * @var string
     */
    private $documentData;

    /**
     * @var NonMatchingData
     */
    private $nonMatchingDataList;

    /**
     * @var SessionDGRV2
     */
    private $session;

    /**
     * @return DestinationDataList
     */
    public function getDestinationDataList() : DestinationDataList
    {
        return $this->destinationDataList;
    }

    /**
     * @param DestinationDataList $destinationDataList
     *
     * @return $this
     */
    public function setDestinationDataList(DestinationDataList $destinationDataList) : DocumentGenerationResponseV2
    {
        $this->destinationDataList = $destinationDataList;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentData() : string
    {
        return $this->documentData;
    }

    /**
     * @param string $documentData
     *
     * @return $this
     */
    public function setDocumentData(string $documentData) : DocumentGenerationResponseV2
    {
        $this->documentData = $documentData;

        return $this;
    }

    /**
     * @return NonMatchingData
     */
    public function getNonMatchingDataList() : NonMatchingData
    {
        return $this->nonMatchingDataList;
    }

    /**
     * @param NonMatchingData $nonMatchingDataList
     *
     * @return $this
     */
    public function setNonMatchingDataList(NonMatchingData $nonMatchingDataList) : DocumentGenerationResponseV2
    {
        $this->nonMatchingDataList = $nonMatchingDataList;

        return $this;
    }

    /**
     * @return SessionDGRV2
     */
    public function getSession() : SessionDGRV2
    {
        return $this->session;
    }

    /**
     * @param SessionDGRV2 $session
     *
     * @return $this
     */
    public function setSession(SessionDGRV2 $session) : DocumentGenerationResponseV2
    {
        $this->session = $session;

        return $this;
    }
}
