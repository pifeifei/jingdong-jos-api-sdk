<?php

namespace ACES\Request;


class OrderTraceByWaybillServiceGetOrderTraceByWaybillIdAndVenderCodeRequest
{
    private $apiParas = array();
    private $version;
    private $venderCode;
    private $waybillId;

    public function getApiMethodName()
    {
        return "jingdong.orderTraceByWaybillService.getOrderTraceByWaybillIdAndVenderCode";
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

    public function getVenderCode()
    {
        return $this->venderCode;
    }

    public function setVenderCode($venderCode)
    {
        $this->venderCode = $venderCode;
        $this->apiParas["venderCode"] = $venderCode;
    }

    public function getWaybillId()
    {
        return $this->waybillId;
    }

    public function setWaybillId($waybillId)
    {
        $this->waybillId = $waybillId;
        $this->apiParas["waybillId"] = $waybillId;
    }
}
