<?php

namespace ACES\Request;


class EclpIbdOrderRedeclareOrderRequest
{
    private $apiParas = array();
    private $version;
    private $customsOrder;
    private $goodsList;

    public function getApiMethodName()
    {
        return "jingdong.eclp.ibd.order.redeclareOrder";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getCustomsOrder()
    {
        return $this->apiParas['customsOrder'];
    }

    public function setCustomsOrder($customsOrder)
    {
        $this->apiParas['customsOrder'] = $customsOrder;
    }

    public function getGoodsList()
    {
        return $this->apiParas['goodsList'];
    }

    public function setGoodsList($goodsList)
    {
        $this->apiParas['goodsList'] = $goodsList;
    }
}
