<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;

class CustomProperties
{
    private $params = [];
    private $key;
    private $value;

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
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

    public function getInstance()
    {
        return $this->params;
    }
}
