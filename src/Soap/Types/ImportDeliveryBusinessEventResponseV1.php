<?php

namespace T3ko\Dpd\Soap\Types;

class ImportDeliveryBusinessEventResponseV1
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var ImportDeliveryBusinessEventStatusEnumV1
     */
    private $status;

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description) : ImportDeliveryBusinessEventResponseV1
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return ImportDeliveryBusinessEventStatusEnumV1
     */
    public function getStatus() : ImportDeliveryBusinessEventStatusEnumV1
    {
        return $this->status;
    }

    /**
     * @param ImportDeliveryBusinessEventStatusEnumV1 $status
     * @return $this
     */
    public function setStatus(ImportDeliveryBusinessEventStatusEnumV1 $status) : ImportDeliveryBusinessEventResponseV1
    {
        $this->status = $status;
        return $this;
    }


}

