<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GeneratePackagesNumbersV4Request implements RequestInterface
{
    /**
     * @var OpenUMLFeV3
     */
    private $openUMLFeV3;

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
     * @return OpenUMLFeV3
     */
    public function getOpenUMLFe() : OpenUMLFeV3
    {
        return $this->openUMLFeV3;
    }

    /**
     * @param OpenUMLFeV3 $openUMLFeV3
     *
     * @return GeneratePackagesNumbersV4Request
     */
    public function setOpenUMLFe(OpenUMLFeV3 $openUMLFeV3) : GeneratePackagesNumbersV4Request
    {
        $this->openUMLFeV3 = $openUMLFeV3;

        return $this;
    }

    /**
     * @return PkgNumsGenerationPolicyV1
     */
    public function getPkgNumsGenerationPolicy() : ?PkgNumsGenerationPolicyV1
    {
        return $this->pkgNumsGenerationPolicyV1;
    }

    /**
     * @param PkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1
     *
     * @return GeneratePackagesNumbersV4Request
     */
    public function setPkgNumsGenerationPolicy(PkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1) : GeneratePackagesNumbersV4Request
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
     * @return GeneratePackagesNumbersV4Request
     */
    public function setLangCode(string $langCode) : GeneratePackagesNumbersV4Request
    {
        $this->langCode = $langCode;

        return $this;
    }

    /**
     * @return AuthDataV1
     */
    public function getAuthData() : ?AuthDataV1
    {
        return $this->authDataV1;
    }

    /**
     * @param AuthDataV1 $authDataV1
     *
     * @return GeneratePackagesNumbersV4Request
     */
    public function setAuthData(AuthDataV1 $authDataV1) : GeneratePackagesNumbersV4Request
    {
        $this->authDataV1 = $authDataV1;

        return $this;
    }
}
