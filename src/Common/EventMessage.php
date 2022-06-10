<?php

namespace ACES\Common;

use ACES\Core\MSG_LEVEL;
use ACES\Core\MSG_TYPE;

class EventMessage extends BasicMessage
{
    public function __construct($service, $tid, $event_code, $event)
    {
        $this->businessId = BasicMessage::getRandomString();
        $this->text = 'EVENT';
        $this->attributes = new EventAttribute(MSG_TYPE::EVENT, MSG_LEVEL::INFO, $service, $tid, $event_code, $event);
    }
}
