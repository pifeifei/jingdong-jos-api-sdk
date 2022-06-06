<?php

namespace ACES\Request\Domain\ServiceOrderQueryList;




class ServiceApiRequest
{
    private $params = [];


    function __construct()
    {
        $this->params["@type"] = "com.jdwl.toms.b2c.api.dto.ServiceOrderDTO";
    }

    public function setDeptCode($deptCode)
    {
        $this->params['deptCode'] = $deptCode;
    }

    public function getDeptCode()
    {
        return $this->params['deptCode'];
    }


    public function setStartServiceTime($startServiceTime)
    {
        $this->params['startServiceTime'] = $startServiceTime;
    }

    public function getStartServiceTime()
    {
        return $this->params['startServiceTime'];
    }

    public function setEndServiceTime($endServiceTime)
    {
        $this->params['endServiceTime'] = $endServiceTime;
    }

    public function getEndServiceTime()
    {
        return $this->params['endServiceTime'];
    }


    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->params['pin'];
    }


    public function setServiceType($serviceType)
    {
        $this->params['serviceType'] = $serviceType;
    }

    public function getServiceType()
    {
        return $this->params['serviceType'];
    }

    function getInstance()
    {
        return $this->params;
    }
}
