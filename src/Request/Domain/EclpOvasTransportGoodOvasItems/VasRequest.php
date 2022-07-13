<?php

namespace ACES\Request\Domain\EclpOvasTransportGoodOvasItems;

class VasRequest
{
    private array $params = [];


    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.ovas.request.goods.admin.VasRequest';
    }

    public function getServiceCode()
    {
        return $this->params['serviceCode'];
    }

    public function setServiceCode($serviceCode)
    {
        $this->params['serviceCode'] = $serviceCode;
    }

    public function getGoodsDemand()
    {
        return $this->params['goodsDemand'];
    }

    public function setGoodsDemand($goodsDemand)
    {
        $this->params['goodsDemand'] = $goodsDemand;
    }

    public function getStatus()
    {
        return $this->params['status'];
    }

    public function setStatus($status)
    {
        $this->params['status'] = $status;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
