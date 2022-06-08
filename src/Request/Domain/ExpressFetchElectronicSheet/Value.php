<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;

class Value
{
    private $params = [];
    private $customProperty;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.ldop.oms.dto.CustomerPropertyRequest';
    }

    public function getCustomProperty()
    {
        return $this->customProperty;
    }

    public function setCustomProperty($customProperty)
    {
        $this->params['customProperty'] = $customProperty;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
