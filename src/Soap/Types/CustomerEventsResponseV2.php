<?php

namespace T3ko\Dpd\Soap\Types;

class CustomerEventsResponseV2
{

    /**
     * @var string
     */
    private $confirmId;

    /**
     * @var CustomerEventV2
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
     * @return CustomerEventV2
     */
    public function getEventsList() : CustomerEventV2
    {
        return $this->eventsList;
    }


}

