<?php

namespace ACES\Common;

use ACES\Core\MSG_LEVEL;
use ACES\Core\MSG_TYPE;

class KPEventMessage extends BasicMessage
{
    public function __construct($service, $tid, $event_code, $event, $major_kver, $keylist)
    {
        $this->businessId = BasicMessage::getRandomString();
        $this->text = 'EVENT';
        $this->attributes = new KPEventAttribute(
            MSG_TYPE::EVENT,
            MSG_LEVEL::INFO,
            $service,
            $tid,
            $event_code,
            $event,
            $major_kver,
            $keylist
        );
    }
}
