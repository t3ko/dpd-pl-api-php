<?php

namespace T3ko\Dpd\Response;

use T3ko\Dpd\Soap\Types\GenerateProtocolV2Response;

class GenerateProtocolResponse
{
    private $fileContent;

    /**
     * GenerateLabelsResponse constructor.
     *
     * @param $fileContent
     */
    protected function __construct($fileContent)
    {
        $this->fileContent = $fileContent;
    }

    public static function from(GenerateProtocolV2Response $response)
    {
        return new static($response->getReturn()->getDocumentData());
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }
}
