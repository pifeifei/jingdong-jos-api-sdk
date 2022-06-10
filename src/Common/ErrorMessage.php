<?php

namespace ACES\Common;

use ACES\Core\MSG_TYPE;

class ErrorMessage extends BasicMessage
{
    public function __construct($service, $tid, $level, $err_code, $err_msg, $stacktrace)
    {
        $this->businessId = BasicMessage::getRandomString();
        $this->text = 'EXCEPTION';
        $this->attributes = new ErrorAttribute(
            MSG_TYPE::EXCEPTION,
            $level,
            $service,
            $tid,
            $err_code,
            $err_msg,
            $stacktrace
        );
    }
}
