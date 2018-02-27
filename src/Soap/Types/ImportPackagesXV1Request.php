<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ImportPackagesXV1Request implements RequestInterface
{

    /**
     * @var string
     */
    private $openUMLFXV2;

    /**
     * @var PkgNumsGenerationPolicyV1
     */
    private $pkgNumsGenerationPolicyV1;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return string
     */
    public function getOpenUMLFXV2() : String
    {
        return $this->openUMLFXV2;
    }

    /**
     * @param string $openUMLFXV2
     * @return ImportPackagesXV1Request
     */
    public function setOpenUMLFXV2($openUMLFXV2) : ImportPackagesXV1Request
    {
        $this->openUMLFXV2 = $openUMLFXV2;
        return $this;
    }

    /**
     * @return PkgNumsGenerationPolicyV1
     */
    public function getPkgNumsGenerationPolicyV1() : PkgNumsGenerationPolicyV1
    {
        return $this->pkgNumsGenerationPolicyV1;
    }

    /**
     * @param PkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1
     * @return ImportPackagesXV1Request
     */
    public function setPkgNumsGenerationPolicyV1($pkgNumsGenerationPolicyV1) : ImportPackagesXV1Request
    {
        $this->pkgNumsGenerationPolicyV1 = $pkgNumsGenerationPolicyV1;
        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthDataV1() : AuthDataV1
    {
        return $this->authDataV1;
    }

    /**
     * @param AuthDataV1 $authDataV1
     * @return ImportPackagesXV1Request
     */
    public function setAuthDataV1($authDataV1) : ImportPackagesXV1Request
    {
        $this->authDataV1 = $authDataV1;
        return $this;
    }


}

