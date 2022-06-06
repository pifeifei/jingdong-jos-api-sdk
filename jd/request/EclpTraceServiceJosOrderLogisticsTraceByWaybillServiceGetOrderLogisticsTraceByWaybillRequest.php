<?php

class EclpTraceServiceJosOrderLogisticsTraceByWaybillServiceGetOrderLogisticsTraceByWaybillRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.JosOrderLogisticsTraceByWaybillService.getOrderLogisticsTraceByWaybill";
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
                                                                                                                                    private $role;

    public function setRole($role)
    {
        $this->role = $role;
         $this->apiParas["role"] = $role;
    }

    public function getRole()
    {
        return $this->role;
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

                                                        private $queryType;

    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
         $this->apiParas["queryType"] = $queryType;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }
}
