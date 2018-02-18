<?php

namespace T3ko\Dpd\Soap\Types;

class ProtocolDPPV1
{

    /**
     * @var string
     */
    private $documentId;

    /**
     * @return string
     */
    public function getDocumentId() : string
    {
        return $this->documentId;
    }

    /**
     * @param string $documentId
     * @return $this
     */
    public function setDocumentId(string $documentId) : ProtocolDPPV1
    {
        $this->documentId = $documentId;
        return $this;
    }


}

