<?php

namespace ExpressFetchElectronicSheet;

class CustomProperties
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "java.util.Map";
    }

    private $key;

    public function setKey($key)
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    private $value;

    public function setValue($value)
    {
        $this->params['value'] = $value ->getInstance();
    }


    function getInstance()
    {
        return $this->params;
    }
}
