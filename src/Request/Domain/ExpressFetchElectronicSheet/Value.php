<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;




class Value
{
    private $params = array();
    private $customProperty;

    function __construct()
    {
        $this->params["@type"] = "com.jd.ldop.oms.dto.CustomerPropertyRequest";
    }

    public function getCustomProperty()
    {
        return $this->customProperty;
    }

    public function setCustomProperty($customProperty)
    {
        $this->params['customProperty'] = $customProperty;
    }

    function getInstance()
    {
        return $this->params;
    }
}
