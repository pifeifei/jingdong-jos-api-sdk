<?php

namespace ACES\Request;

class PopOrderGetmobilelistRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.pop.order.getmobilelist';
    }

    public function check()
    {
    }

    public function getAppName()
    {
        return $this->apiParas['appName'];
    }

    public function setAppName($appName)
    {
        $this->apiParas['appName'] = $appName;

        return $this;
    }

    public function getRegion()
    {
        return $this->apiParas['region'];
    }

    public function setRegion($region)
    {
        $this->apiParas['region'] = $region;

        return $this;
    }

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;

        return $this;
    }

    public function getExpiration()
    {
        return $this->apiParas['expiration'];
    }

    public function setExpiration($expiration)
    {
        $this->apiParas['expiration'] = $expiration;

        return $this;
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

        return $this;
    }
}
