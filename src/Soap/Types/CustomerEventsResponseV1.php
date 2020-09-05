<?php

namespace T3ko\Dpd\Soap\Types;

class CustomerEventsResponseV1
{

    /**
     * @var string
     */
    private $confirmId;

    /**
     * @var CustomerEventV1
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
     * @return CustomerEventV1
     */
    public function getEventsList() : CustomerEventV1
    {
        return $this->eventsList;
    }


}

