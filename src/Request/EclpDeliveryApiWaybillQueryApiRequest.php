<?php

namespace ACES\Request;


class EclpDeliveryApiWaybillQueryApiRequest
{
    private $apiParas = array();
    private $version;
    private $waybillCode;
    private $orderNo;
    private $settleType;
    private $traderCode;

    public function getApiMethodName()
    {
        return "jingdong.eclp.delivery.api.WaybillQueryApi";
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

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
        $this->apiParas["waybillCode"] = $waybillCode;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getSettleType()
    {
        return $this->settleType;
    }

    public function setSettleType($settleType)
    {
        $this->settleType = $settleType;
        $this->apiParas["settleType"] = $settleType;
    }

    public function getTraderCode()
    {
        return $this->traderCode;
    }

    public function setTraderCode($traderCode)
    {
        $this->traderCode = $traderCode;
        $this->apiParas["traderCode"] = $traderCode;
    }
}
