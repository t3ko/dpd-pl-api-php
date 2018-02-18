<?php

namespace T3ko\Dpd\Soap\Types;

class AuthDataV1
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var int
     */
    private $masterFid;

    /**
     * @var string
     */
    private $password;

    /**
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }

    /**
     * @param string $login
     *
     * @return $this
     */
    public function setLogin(string $login) : AuthDataV1
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return int
     */
    public function getMasterFid() : int
    {
        return $this->masterFid;
    }

    /**
     * @param int $masterFid
     *
     * @return $this
     */
    public function setMasterFid(int $masterFid) : AuthDataV1
    {
        $this->masterFid = $masterFid;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password) : AuthDataV1
    {
        $this->password = $password;

        return $this;
    }
}
