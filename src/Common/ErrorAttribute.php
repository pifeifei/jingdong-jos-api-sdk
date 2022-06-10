<?php

namespace ACES\Common;

class ErrorAttribute extends BasicAttribute
{
    public $code;
    public $msg;
    public $heap;

    public function __construct($type, $level, $service, $tid, $err_code, $err_msg, $stacktrace)
    {
        parent::__construct($type, $level, $service, $tid);
        $this->code = $err_code;
        $this->msg = $err_msg;
        $this->heap = $stacktrace;
    }
}
