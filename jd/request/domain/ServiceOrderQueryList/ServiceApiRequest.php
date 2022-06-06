<?php

namespace ServiceOrderQueryList;

class ServiceApiRequest
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jdwl.toms.b2c.api.dto.ServiceOrderDTO";
    }

    private $deptCode;

    public function setDeptCode($deptCode)
    {
        $this->params['deptCode'] = $deptCode;
    }

    public function getDeptCode()
    {
        return $this->deptCode;
    }

    private $startServiceTime;

    public function setStartServiceTime($startServiceTime)
    {
        $this->params['startServiceTime'] = $startServiceTime;
    }

    public function getStartServiceTime()
    {
        return $this->startServiceTime;
    }

    private $endServiceTime;

    public function setEndServiceTime($endServiceTime)
    {
        $this->params['endServiceTime'] = $endServiceTime;
    }

    public function getEndServiceTime()
    {
        return $this->endServiceTime;
    }

    private $pin;

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $serviceType;

    public function setServiceType($serviceType)
    {
        $this->params['serviceType'] = $serviceType;
    }

    public function getServiceType()
    {
        return $this->serviceType;
    }

    function getInstance()
    {
        return $this->params;
    }
}
