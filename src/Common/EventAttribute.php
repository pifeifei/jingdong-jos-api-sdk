<?php

namespace ACES\Common;

class EventAttribute extends BasicAttribute
{
    public $code;
    public $event;

    public function __construct($type, $level, $service, $tid, $code, $event)
    {
        parent::__construct($type, $level, $service, $tid);
        $this->code = $code;
        $this->event = $event;
    }

//    public function jsonSerialize()
//    {
//        $vars = get_object_vars($this);
//        return $vars;
//    }
}
