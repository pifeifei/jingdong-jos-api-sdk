<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;

class UserEnv
{
    private $params = [];
    private $pin;
    private $tradeCode;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.ldop.oms.dto.UserEnv';
    }

    public function getPin()
    {
        return $this->params['pin'];
    }

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getTradeCode()
    {
        return $this->params['tradeCode'];
    }

    public function setTradeCode($tradeCode)
    {
        $this->params['tradeCode'] = $tradeCode;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
