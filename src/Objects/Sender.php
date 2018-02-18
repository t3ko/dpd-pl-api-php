<?php

namespace T3ko\Dpd\Objects;

class Sender extends Receiver
{
    /**
     * @var int
     */
    private $fid;

    public function __construct($fid, $phone, $name, $address, $postalCode, $city, $countryCode, $company = null, $email = null)
    {
        $this->fid = $fid;
        parent::__construct($phone, $name, $address, $postalCode, $city, $countryCode, $company, $email);
    }

    /**
     * @return int
     */
    public function getFid(): int
    {
        return $this->fid;
    }
}
