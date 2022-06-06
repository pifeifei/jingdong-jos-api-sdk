<?php

namespace ExpressFetchElectronicSheet;

class Value
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.ldop.oms.dto.CustomerPropertyRequest";
    }

    private $customProperty;

    public function setCustomProperty($customProperty)
    {
        $this->params['customProperty'] = $customProperty;
    }

    public function getCustomProperty()
    {
        return $this->customProperty;
    }

    function getInstance()
    {
        return $this->params;
    }
}
