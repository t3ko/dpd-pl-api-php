<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AppendParcelsToPackageV1Request implements RequestInterface
{
    /**
     * @var ParcelsAppendV1
     */
    private $parcelsAppend;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return ParcelsAppendV1
     */
    public function getParcelsAppend() : ParcelsAppendV1
    {
        return $this->parcelsAppend;
    }

    /**
     * @param ParcelsAppendV1 $parcelsAppend
     *
     * @return $this
     */
    public function setParcelsAppend(ParcelsAppendV1 $parcelsAppend) : AppendParcelsToPackageV1Request
    {
        $this->parcelsAppend = $parcelsAppend;

        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthData() : AuthDataV1
    {
        return $this->authDataV1;
    }

    /**
     * @param AuthDataV1 $authDataV1
     *
     * @return $this
     */
    public function setAuthData(AuthDataV1 $authDataV1) : AppendParcelsToPackageV1Request
    {
        $this->authDataV1 = $authDataV1;

        return $this;
    }
}
