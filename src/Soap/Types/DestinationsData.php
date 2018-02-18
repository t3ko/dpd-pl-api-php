<?php

namespace T3ko\Dpd\Soap\Types;

class DestinationsData
{
    /**
     * @var string
     */
    private $destinationName;

    /**
     * @var string
     */
    private $documentId;

    /**
     * @var bool
     */
    private $domestic;

    /**
     * @return string
     */
    public function getDestinationName() : string
    {
        return $this->destinationName;
    }

    /**
     * @param string $destinationName
     *
     * @return $this
     */
    public function setDestinationName(string $destinationName) : DestinationsData
    {
        $this->destinationName = $destinationName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentId() : string
    {
        return $this->documentId;
    }

    /**
     * @param string $documentId
     *
     * @return $this
     */
    public function setDocumentId(string $documentId) : DestinationsData
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDomestic() : bool
    {
        return $this->domestic;
    }

    /**
     * @param bool $domestic
     *
     * @return $this
     */
    public function setDomestic(bool $domestic) : DestinationsData
    {
        $this->domestic = $domestic;

        return $this;
    }
}
