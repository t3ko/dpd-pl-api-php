<?php

namespace T3ko\Dpd\Soap\Types;

class CustomerEventsResponseV3
{

    /**
     * @var string
     */
    private $confirmId;

    /**
     * @var CustomerEventV3[]|null
     */
    private $eventsList;

    /**
     * @return string
     */
    public function getConfirmId() : string
    {
        return $this->confirmId;
    }

    /**
     * @return CustomerEventV3[]
     */
    public function getEventsList() : ?array
    {
        return $this->eventsList;
    }


}

