<?php

namespace T3ko\Dpd\Soap\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ImportDeliveryBusinessEventV1Request implements RequestInterface
{

    /**
     * @var DpdParcelBusinessEventV1
     */
    private $dpdParcelBusinessEventV1;

    /**
     * @var AuthDataV1
     */
    private $authDataV1;

    /**
     * @return DpdParcelBusinessEventV1
     */
    public function getDpdParcelBusinessEvent() : DpdParcelBusinessEventV1
    {
        return $this->dpdParcelBusinessEventV1;
    }

    /**
     * @param DpdParcelBusinessEventV1 $dpdParcelBusinessEventV1
     * @return $this
     */
    public function setDpdParcelBusinessEvent(DpdParcelBusinessEventV1 $dpdParcelBusinessEventV1) : ImportDeliveryBusinessEventV1Request
    {
        $this->dpdParcelBusinessEventV1 = $dpdParcelBusinessEventV1;
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
     * @return $this
     */
    public function setAuthData(AuthDataV1 $authDataV1) : ImportDeliveryBusinessEventV1Request
    {
        $this->authDataV1 = $authDataV1;
        return $this;
    }


}

