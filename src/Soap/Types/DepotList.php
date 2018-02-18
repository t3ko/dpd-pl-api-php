<?php

namespace T3ko\Dpd\Soap\Types;

class DepotList
{
    /**
     * @var ProtocolDepot
     */
    private $protocolDepot;

    /**
     * @return ProtocolDepot
     */
    public function getProtocolDepot() : ProtocolDepot
    {
        return $this->protocolDepot;
    }

    /**
     * @param ProtocolDepot $protocolDepot
     *
     * @return $this
     */
    public function setProtocolDepot(ProtocolDepot $protocolDepot) : DepotList
    {
        $this->protocolDepot = $protocolDepot;

        return $this;
    }
}
