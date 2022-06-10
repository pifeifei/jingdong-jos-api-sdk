<?php

namespace ACES\Common;

class KPEventAttribute extends EventAttribute
{
    public $cur_key;
    public $keylist;

    public function __construct($type, $level, $service, $tid, $code, $event, $major_kver, $keylist)
    {
        parent::__construct($type, $level, $service, $tid, $code, $event);
        $this->cur_key = $major_kver;
        $this->keylist = $keylist;
    }
}
