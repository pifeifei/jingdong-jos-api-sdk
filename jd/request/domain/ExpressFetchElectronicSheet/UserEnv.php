<?php

namespace ExpressFetchElectronicSheet;

class UserEnv
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.ldop.oms.dto.UserEnv";
    }

    private $pin;

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $tradeCode;

    public function setTradeCode($tradeCode)
    {
        $this->params['tradeCode'] = $tradeCode;
    }

    public function getTradeCode()
    {
        return $this->tradeCode;
    }

    function getInstance()
    {
        return $this->params;
    }
}
