<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;




class CustomProperties
{
    private $params = array();
    private $key;
    private $value;

    function __construct()
    {
        $this->params["@type"] = "java.util.Map";
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->params['key'] = $key;
    }

    public function setValue($value)
    {
        $this->params['value'] = $value->getInstance();
    }


    function getInstance()
    {
        return $this->params;
    }
}
