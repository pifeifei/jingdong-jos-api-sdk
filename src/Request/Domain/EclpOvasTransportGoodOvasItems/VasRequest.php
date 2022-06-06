<?php

namespace ACES\Request\Domain\EclpOvasTransportGoodOvasItems;




class VasRequest
{
    private $params = array();
    private $serviceCode;
    private $goodsDemand;
    private $status;

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.ovas.request.goods.admin.VasRequest";
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function setServiceCode($serviceCode)
    {
        $this->params['serviceCode'] = $serviceCode;
    }

    public function getGoodsDemand()
    {
        return $this->goodsDemand;
    }

    public function setGoodsDemand($goodsDemand)
    {
        $this->params['goodsDemand'] = $goodsDemand;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->params['status'] = $status;
    }

    function getInstance()
    {
        return $this->params;
    }
}
