<?php

namespace T3ko\Dpd\Soap\Types;

class PackageAddressOpenUMLFeV1
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
     * @return PackageAddressOpenUMLFeV1
     */
    public function setAddress(string $address) : PackageAddressOpenUMLFeV1
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
     * @return PackageAddressOpenUMLFeV1
     */
    public function setCity(string $city) : PackageAddressOpenUMLFeV1
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany() : ?string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return PackageAddressOpenUMLFeV1
     */
    public function setCompany(?string $company) : PackageAddressOpenUMLFeV1
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
     * @return PackageAddressOpenUMLFeV1
     */
    public function setCountryCode(string $countryCode) : PackageAddressOpenUMLFeV1
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return PackageAddressOpenUMLFeV1
     */
    public function setEmail(?string $email) : PackageAddressOpenUMLFeV1
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getFid() : ?int
    {
        return $this->fid;
    }

    /**
     * @param int $fid
     * @return PackageAddressOpenUMLFeV1
     */
    public function setFid(?int $fid) : PackageAddressOpenUMLFeV1
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
     * @return PackageAddressOpenUMLFeV1
     */
    public function setName(string $name) : PackageAddressOpenUMLFeV1
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
     * @return PackageAddressOpenUMLFeV1
     */
    public function setPhone(string $phone) : PackageAddressOpenUMLFeV1
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
     * @return PackageAddressOpenUMLFeV1
     */
    public function setPostalCode(string $postalCode) : PackageAddressOpenUMLFeV1
    {
        $this->postalCode = $postalCode;
        return $this;
    }


}

