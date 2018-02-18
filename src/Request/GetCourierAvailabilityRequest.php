<?php

namespace T3ko\Dpd\Request;

use T3ko\Dpd\Soap\Types\GetCourierOrderAvailabilityV1Request;
use T3ko\Dpd\Soap\Types\SenderPlaceV1;

class GetCourierAvailabilityRequest
{
    private $postCode;
    private $countryCode;

    /**
     * GenerateCourierAvailabilityRequest constructor.
     *
     * @param $postCode
     * @param $countryCode
     */
    protected function __construct($postCode, $countryCode)
    {
        $this->postCode = $postCode;
        $this->countryCode = $countryCode;
    }

    public static function from($postCode, $countryCode = 'PL')
    {
        return new static($postCode, $countryCode);
    }

    public function toPayload(): GetCourierOrderAvailabilityV1Request
    {
        $request = new GetCourierOrderAvailabilityV1Request();
        $senderPlace = new SenderPlaceV1();
        $senderPlace->setCountryCode($this->countryCode);
        $senderPlace->setZipCode($this->postCode);
        $request->setSenderPlace($senderPlace);

        return $request;
    }
}
