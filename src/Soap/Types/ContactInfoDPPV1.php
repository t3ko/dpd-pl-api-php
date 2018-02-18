<?php

namespace T3ko\Dpd\Soap\Types;

class ContactInfoDPPV1
{
    /**
     * @var string
     */
    private $comments;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phone;

    /**
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function setComments(string $comments) : ContactInfoDPPV1
    {
        $this->comments = $comments;

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
     *
     * @return $this
     */
    public function setCompany(string $company) : ContactInfoDPPV1
    {
        $this->company = $company;

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
     *
     * @return $this
     */
    public function setEmail(string $email) : ContactInfoDPPV1
    {
        $this->email = $email;

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
     *
     * @return $this
     */
    public function setName(string $name) : ContactInfoDPPV1
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
     *
     * @return $this
     */
    public function setPhone(string $phone) : ContactInfoDPPV1
    {
        $this->phone = $phone;

        return $this;
    }
}
