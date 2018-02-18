<?php

namespace T3ko\Dpd\Objects;

class Receiver
{
    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $email;

    /**
     * Receiver constructor.
     *
     * @param string $phone
     * @param string $name
     * @param string $address
     * @param string $postalCode
     * @param string $city
     * @param string $countryCode
     * @param ?string $company
     * @param ?string $email
     */
    public function __construct(
        string $phone,
        string $name,
        string $address,
        string $postalCode,
        string $city,
        string $countryCode,
        string $company = null,
        string $email = null
    ) {
        $this->phone = $phone;
        $this->name = $name;
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->company = $company;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCompany(): ? string
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getEmail() : ? string
    {
        return $this->email;
    }
}
