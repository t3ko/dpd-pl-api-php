<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GeneratePackagesNumbersV1Request implements RequestInterface
{
    /**
     * @var OpenUMLFeV1
     */
    private $openUMLV1;

    /**
     * @var PkgNumsGenerationPolicyV1
     */
    private $pkgNumsGenerationPolicyV1;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return OpenUMLFeV1
     */
    public function getOpenUML() : OpenUMLFeV1
    {
        return $this->openUMLV1;
    }

    /**
     * @param OpenUMLFeV1 $openUMLV1
     *
     * @return $this
     */
    public function setOpenUML(OpenUMLFeV1 $openUMLV1) : GeneratePackagesNumbersV1Request
    {
        $this->openUMLV1 = $openUMLV1;

        return $this;
    }

    /**
     * @return PkgNumsGenerationPolicyV1
     */
    public function getPkgNumsGenerationPolicy() : PkgNumsGenerationPolicyV1
    {
        return $this->pkgNumsGenerationPolicyV1;
    }

    /**
     * @param PkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1
     *
     * @return $this
     */
    public function setPkgNumsGenerationPolicy(PkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1) : GeneratePackagesNumbersV1Request
    {
        $this->pkgNumsGenerationPolicyV1 = $pkgNumsGenerationPolicyV1;

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
    public function setAuthData(AuthDataV1 $authDataV1) : GeneratePackagesNumbersV1Request
    {
        $this->authDataV1 = $authDataV1;

        return $this;
    }
}
