<?php

namespace ACES\Common;

use ACES\Core\MSG_LEVEL;
use ACES\Core\MSG_TYPE;

class InitMessage extends BasicMessage
{
    public function __construct($service, $tid)
    {
        $this->businessId = BasicMessage::getRandomString();
        $this->text = 'INIT';
        $this->attributes = new BasicAttribute(MSG_TYPE::INIT, MSG_LEVEL::INFO, $service, $tid);
    }
}
