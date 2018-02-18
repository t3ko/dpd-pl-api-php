<?php

namespace T3ko\Dpd\Soap\Types;

class ServiceSelfColOpenUMLFeV1
{

    /**
     * @var ServiceSelfColReceiverTypeEnumOpenUMLFeV1
     */
    private $receiver;

    /**
     * @return ServiceSelfColReceiverTypeEnumOpenUMLFeV1
     */
    public function getReceiver() : ServiceSelfColReceiverTypeEnumOpenUMLFeV1
    {
        return $this->receiver;
    }

    /**
     * @param ServiceSelfColReceiverTypeEnumOpenUMLFeV1 $receiver
     * @return $this
     */
    public function setReceiver(ServiceSelfColReceiverTypeEnumOpenUMLFeV1 $receiver) : ServiceSelfColOpenUMLFeV1
    {
        $this->receiver = $receiver;
        return $this;
    }


}

