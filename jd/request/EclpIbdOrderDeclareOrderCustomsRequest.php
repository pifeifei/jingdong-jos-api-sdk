<?php

class EclpIbdOrderDeclareOrderCustomsRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.ibd.order.declareOrderCustoms";
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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
    private $customsOrder;

    public function setCustomsOrder($customsOrder)
    {
        $this->apiParas['customsOrder'] = $customsOrder;
    }
    public function getCustomsOrder()
    {
        return $this->apiParas['customsOrder'];
    }
    private $goodsList;

    public function setGoodsList($goodsList)
    {
        $this->apiParas['goodsList'] = $goodsList;
    }
    public function getGoodsList()
    {
        return $this->apiParas['goodsList'];
    }
}
