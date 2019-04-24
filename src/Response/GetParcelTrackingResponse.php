<?php

namespace T3ko\Dpd\Response;

use T3ko\Dpd\Objects\ParcelEvent;
use T3ko\Dpd\Objects\ParcelEventAdditionalData;
use T3ko\Dpd\Soap\Types\GetEventsForWaybillV1Response;

class GetParcelTrackingResponse
{

    /**
     * @var ParcelEvent[]
     */
    private $events;

    /**
     * GetParcelTrackingResponse constructor.
     * @param ParcelEvent[] $events
     */
    private function __construct(array $events)
    {
        $this->events = $events;
    }

    /**
     * @param GetEventsForWaybillV1Response $response
     *
     * @return GetParcelTrackingResponse
     */
    public static function from(GetEventsForWaybillV1Response $response)
    {
        $events = [];

        $eventList = $response->getReturn()->getEventsList();

        if (!empty($eventList)) {
            foreach ($eventList as $event) {

                $eventAdditionalData = [];
                if (!empty($event->getEventDataList())) {
                    foreach ($event->getEventDataList() as $eventData) {
                        $eventAdditionalData[] = new ParcelEventAdditionalData(
                            $eventData->getCode(),
                            $eventData->getDescription(),
                            $eventData->getValue()
                        );
                    }
                }

                $events[] = new ParcelEvent(
                    $event->getBusinessCode(),
                    $event->getCountry(),
                    $event->getDepot(),
                    $event->getDepotName(),
                    $event->getDescription(),
                    $eventAdditionalData,
                    new \DateTime($event->getEventTime()),
                    $event->getPackageReference(),
                    $event->getParcelReference(),
                    $event->getWaybill()
                );
            }
        }

        return new static($events);
    }

    /**
     * @return ParcelEvent[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }


}
