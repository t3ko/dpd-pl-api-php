<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GeneratePackagesNumbersV3Request implements RequestInterface
{
    /**
     * @var OpenUMLFeV2
     */
    private $openUMLFeV2;

    /**
     * @var PkgNumsGenerationPolicyV1
     */
    private $pkgNumsGenerationPolicyV1;

    /**
     * @var string
     */
    private $langCode;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return OpenUMLFeV2
     */
    public function getOpenUMLFe() : OpenUMLFeV2
    {
        return $this->openUMLFeV2;
    }

    /**
     * @param OpenUMLFeV2 $openUMLFeV2
     *
     * @return $this
     */
    public function setOpenUMLFe(OpenUMLFeV2 $openUMLFeV2) : GeneratePackagesNumbersV3Request
    {
        $this->openUMLFeV2 = $openUMLFeV2;

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
    public function setPkgNumsGenerationPolicy(PkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1) : GeneratePackagesNumbersV3Request
    {
        $this->pkgNumsGenerationPolicyV1 = $pkgNumsGenerationPolicyV1;

        return $this;
    }

    /**
     * @return string
     */
    public function getLangCode() : string
    {
        return $this->langCode;
    }

    /**
     * @param string $langCode
     *
     * @return $this
     */
    public function setLangCode(string $langCode) : GeneratePackagesNumbersV3Request
    {
        $this->langCode = $langCode;

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
    public function setAuthData(AuthDataV1 $authDataV1) : GeneratePackagesNumbersV3Request
    {
        $this->authDataV1 = $authDataV1;

        return $this;
    }
}
