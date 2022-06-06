<?php

namespace PrintingPrintDataSensitivePullData;

class Parameters
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "java.util.Map";
    }

    private $key1;

    public function setKey1($key1)
    {
        $this->params['key1'] = $key1;
    }

    public function getKey1()
    {
        return $this->key1;
    }

    private $value1;

    public function setValue1($value1)
    {
        $this->params['value1'] = $value1;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    function getInstance()
    {
        return $this->params;
    }
}
