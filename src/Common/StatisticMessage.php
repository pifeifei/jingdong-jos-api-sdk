<?php

namespace ACES\Common;

use ACES\Core\MSG_LEVEL;
use ACES\Core\MSG_TYPE;

class StatisticMessage extends BasicMessage
{
    public function __construct($service, $tid, $stat)
    {
        $this->businessId = BasicMessage::getRandomString();
        $this->text = 'STATISTIC';
        $this->attributes = new StatisticAttribute(MSG_TYPE::STATISTIC, MSG_LEVEL::INFO, $service, $tid, $stat);
    }
}
