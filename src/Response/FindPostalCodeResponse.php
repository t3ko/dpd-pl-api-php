<?php

namespace T3ko\Dpd\Response;

use T3ko\Dpd\Soap\Types\FindPostalCodeV1Response;

class FindPostalCodeResponse
{
    const STATUS_OK = 'OK';
    const STATUS_NONEXISTING_COUNTRY_CODE = 'NONEXISTING_COUNTRY_CODE';
    const STATUS_NONEXISTING_POSTAL_CODE = 'NONEXISTING_POSTAL_CODE';
    const STATUS_WRONG_POSTAL_PATTERN = 'WRONG_POSTAL_PATTERN';

    /**
     * @var string
     */
    private $status;

    /**
     * FindPostalCodeResponse constructor.
     *
     * @param string $status
     */
    protected function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @param FindPostalCodeV1Response $response
     *
     * @return FindPostalCodeResponse
     */
    public static function from(FindPostalCodeV1Response $response)
    {
        return new static($response->getReturn()->getStatus());
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}
