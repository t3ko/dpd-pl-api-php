<?php

namespace T3ko\Dpd\Soap\Types;

class ValidationInfoPGRV2
{

    /**
     * @var int
     */
    private $errorId;

    /**
     * @var string
     */
    private $errorCode;

    /**
     * @var string
     */
    private $fieldNames;

    /**
     * @var string
     */
    private $info;

    /**
     * @return int
     */
    public function getErrorId() : int
    {
        return $this->errorId;
    }

    /**
     * @param int $errorId
     * @return $this
     */
    public function setErrorId(int $errorId) : ValidationInfoPGRV2
    {
        $this->errorId = $errorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode() : string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     * @return $this
     */
    public function setErrorCode(string $errorCode) : ValidationInfoPGRV2
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldNames() : string
    {
        return $this->fieldNames;
    }

    /**
     * @param string $fieldNames
     * @return $this
     */
    public function setFieldNames(string $fieldNames) : ValidationInfoPGRV2
    {
        $this->fieldNames = $fieldNames;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param string $info
     * @return $this
     */
    public function setInfo(string $info) : ValidationInfoPGRV2
    {
        $this->info = $info;
        return $this;
    }


}

