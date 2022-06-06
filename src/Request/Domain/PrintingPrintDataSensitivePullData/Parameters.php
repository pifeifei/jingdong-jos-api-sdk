<?php

namespace ACES\Request\Domain\PrintingPrintDataSensitivePullData;




class Parameters
{
    private $params = array();
    private $key1;
    private $value1;

    function __construct()
    {
        $this->params["@type"] = "java.util.Map";
    }

    public function getKey1()
    {
        return $this->key1;
    }

    public function setKey1($key1)
    {
        $this->params['key1'] = $key1;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    public function setValue1($value1)
    {
        $this->params['value1'] = $value1;
    }

    function getInstance()
    {
        return $this->params;
    }
}
