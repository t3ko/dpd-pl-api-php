<?php

namespace T3ko\Dpd\Soap\Types;

class ServiceDpdPickupOpenUMLFeV1
{

    /**
     * @var string
     */
    private $pudo;

    /**
     * @return string
     */
    public function getPudo() : string
    {
        return $this->pudo;
    }

    /**
     * @param string $pudo
     * @return $this
     */
    public function setPudo(string $pudo) : ServiceDpdPickupOpenUMLFeV1
    {
        $this->pudo = $pudo;
        return $this;
    }


}

