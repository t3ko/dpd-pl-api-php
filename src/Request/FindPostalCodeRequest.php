<?php

namespace T3ko\Dpd\Request;

use T3ko\Dpd\Soap\Types\FindPostalCodeV1Request;
use T3ko\Dpd\Soap\Types\PostalCodeV1;

class FindPostalCodeRequest
{
    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * FindPostalCodeRequest constructor.
     *
     * @param string $postalCode
     * @param string $countryCode
     */
    protected function __construct($postalCode, $countryCode)
    {
        $this->postalCode = $postalCode;
        $this->countryCode = $countryCode;
    }

    public static function from($postalCode, $countryCode = 'PL'): FindPostalCodeRequest
    {
        return new static($postalCode, $countryCode);
    }

    /**
     * @return FindPostalCodeV1Request
     */
    public function toPayload(): FindPostalCodeV1Request
    {
        $request = new FindPostalCodeV1Request();
        $postalCode = new PostalCodeV1();
        $postalCode->setZipCode($this->postalCode);
        if ($this->countryCode) {
            $postalCode->setCountryCode($this->countryCode);
        }
        $request->setPostalCode($postalCode);

        return $request;
    }
}
