<?php

namespace ACES\Request;


class EclpTraceServiceJosSubscribeWaybillTraceServiceRequest
{
    private $apiParas = array();
    private $version;
    private $source;
    private $waybillId;
    private $carrierCode;
    private $sign;
    private $t;

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.SubscribeWaybillTraceService";
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

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
        $this->apiParas["source"] = $source;
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

    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
        $this->apiParas["carrierCode"] = $carrierCode;
    }

    public function getSign()
    {
        return $this->sign;
    }

    public function setSign($sign)
    {
        $this->sign = $sign;
        $this->apiParas["sign"] = $sign;
    }

    public function getT()
    {
        return $this->t;
    }

    public function setT($t)
    {
        $this->t = $t;
        $this->apiParas["t"] = $t;
    }
}
