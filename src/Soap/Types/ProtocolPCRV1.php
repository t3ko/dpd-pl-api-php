<?php

namespace T3ko\Dpd\Soap\Types;

class ProtocolPCRV1
{

    /**
     * @var string
     */
    private $documentId;

    /**
     * @var StatusInfoPCRV1
     */
    private $statusInfo;

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
    public function setDocumentId(string $documentId) : ProtocolPCRV1
    {
        $this->documentId = $documentId;
        return $this;
    }

    /**
     * @return StatusInfoPCRV1
     */
    public function getStatusInfo() : StatusInfoPCRV1
    {
        return $this->statusInfo;
    }

    /**
     * @param StatusInfoPCRV1 $statusInfo
     * @return $this
     */
    public function setStatusInfo(StatusInfoPCRV1 $statusInfo) : ProtocolPCRV1
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }


}

