<?php

namespace ACES\Request\Domain\PrintingPrintDataPullData;

class Parameters
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    public function getKey1()
    {
        return $this->params['key1'];
    }

    public function setKey1($key1)
    {
        $this->params['key1'] = $key1;
    }

    public function getValue1()
    {
        return $this->params['value1'];
    }

    public function setValue1($value1)
    {
        $this->params['value1'] = $value1;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
