<?php

namespace EclpOvasTransportGoodOvasItems;

class VasRequest
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.ovas.request.goods.admin.VasRequest";
    }

    private $serviceCode;

    public function setServiceCode($serviceCode)
    {
        $this->params['serviceCode'] = $serviceCode;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    private $goodsDemand;

    public function setGoodsDemand($goodsDemand)
    {
        $this->params['goodsDemand'] = $goodsDemand;
    }

    public function getGoodsDemand()
    {
        return $this->goodsDemand;
    }

    private $status;

    public function setStatus($status)
    {
        $this->params['status'] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    function getInstance()
    {
        return $this->params;
    }
}
