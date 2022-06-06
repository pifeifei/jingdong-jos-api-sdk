<?php

class OrderTraceByWaybillServiceGetOrderTraceByWaybillIdAndVenderCodeRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                                                private $venderCode;

    public function setVenderCode($venderCode)
    {
        $this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
    }

    public function getVenderCode()
    {
        return $this->venderCode;
    }

                                                        private $waybillId;

    public function setWaybillId($waybillId)
    {
        $this->waybillId = $waybillId;
         $this->apiParas["waybillId"] = $waybillId;
    }

    public function getWaybillId()
    {
        return $this->waybillId;
    }
}
