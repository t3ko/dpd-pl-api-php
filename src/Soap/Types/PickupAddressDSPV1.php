<?php

namespace T3ko\Dpd\Soap\Types;

class PickupAddressDSPV1
{

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $fid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address) : PickupAddressDSPV1
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city) : PickupAddressDSPV1
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return $this
     */
    public function setCompany(string $company) : PickupAddressDSPV1
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode(string $countryCode) : PickupAddressDSPV1
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email) : PickupAddressDSPV1
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getFid() : int
    {
        return $this->fid;
    }

    /**
     * @param int $fid
     * @return $this
     */
    public function setFid(int $fid) : PickupAddressDSPV1
    {
        $this->fid = $fid;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name) : PickupAddressDSPV1
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone(string $phone) : PickupAddressDSPV1
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode(string $postalCode) : PickupAddressDSPV1
    {
        $this->postalCode = $postalCode;
        return $this;
    }


}

