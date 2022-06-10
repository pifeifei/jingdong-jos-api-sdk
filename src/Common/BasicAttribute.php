<?php

namespace ACES\Common;

use ACES\TDEClient;

class BasicAttribute
{
    public $type;
    public $host;
    public $level;
    public $service;
    public $tid;
    public $sdk_ver;
    public $env;
    public $ts;

    public function __construct($type, $level, $service, $tid)
    {
        $this->type = $type;
        $this->host = Environment::getHost();
        $this->level = $level;
        $this->service = $service;
        $this->tid = $tid;
        $this->sdk_ver = TDEClient::getSDKVer();
        $this->env = Environment::getSystemInfo();
        $this->ts = date_timestamp_get(new \DateTime()) * 1000;
    }

//    public function jsonSerialize()
//    {
//        $vars = get_object_vars($this);
//
//        return $vars;
//    }
}
