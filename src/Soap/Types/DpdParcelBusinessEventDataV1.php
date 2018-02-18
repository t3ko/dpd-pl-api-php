<?php

namespace T3ko\Dpd\Soap\Types;

class DpdParcelBusinessEventDataV1
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode(string $code) : DpdParcelBusinessEventDataV1
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue(string $value) : DpdParcelBusinessEventDataV1
    {
        $this->value = $value;

        return $this;
    }
}
