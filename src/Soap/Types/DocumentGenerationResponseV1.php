<?php

namespace T3ko\Dpd\Soap\Types;

class DocumentGenerationResponseV1
{
    /**
     * @var string
     */
    private $documentData;

    /**
     * @var string
     */
    private $documentId;

    /**
     * @var SessionDGRV1
     */
    private $session;

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
    public function setDocumentData(string $documentData) : DocumentGenerationResponseV1
    {
        $this->documentData = $documentData;

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
    public function setDocumentId(string $documentId) : DocumentGenerationResponseV1
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return SessionDGRV1
     */
    public function getSession() : SessionDGRV1
    {
        return $this->session;
    }

    /**
     * @param SessionDGRV1 $session
     *
     * @return $this
     */
    public function setSession(SessionDGRV1 $session) : DocumentGenerationResponseV1
    {
        $this->session = $session;

        return $this;
    }
}
