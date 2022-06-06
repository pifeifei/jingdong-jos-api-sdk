<?php

namespace ACES\Request;


class EclpTraceServiceJosOrderLogisticsTraceByWaybillServiceGetOrderLogisticsTraceByWaybillRequest
{
    private $apiParas = array();
    private $version;
    private $role;
    private $venderCode;
    private $waybillId;
    private $queryType;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        $this->apiParas["role"] = $role;
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

    public function getQueryType()
    {
        return $this->queryType;
    }

    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
        $this->apiParas["queryType"] = $queryType;
    }
}
