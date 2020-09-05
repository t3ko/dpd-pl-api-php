<?php


namespace T3ko\Dpd\Objects;

class ParcelEventAdditionalData
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $value;

    /**
     * ParcelEventAdditionalData constructor.
     * @param string $code
     * @param string $description
     * @param string $value
     */
    public function __construct($code, $description, $value)
    {
        $this->code = $code;
        $this->description = $description;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}