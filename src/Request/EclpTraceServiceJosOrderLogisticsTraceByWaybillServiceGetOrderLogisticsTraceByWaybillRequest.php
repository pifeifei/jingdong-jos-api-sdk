<?php

namespace ACES\Request;

class EclpTraceServiceJosOrderLogisticsTraceByWaybillServiceGetOrderLogisticsTraceByWaybillRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.trace.service.JosOrderLogisticsTraceByWaybillService.getOrderLogisticsTraceByWaybill';
    }

    public function check()
    {
    }

    public function getRole()
    {
        return $this->apiParas['role'];
    }

    public function setRole($role)
    {
        $this->apiParas['role'] = $role;

        return $this;
    }

    public function getVenderCode()
    {
        return $this->apiParas['venderCode'];
    }

    public function setVenderCode($venderCode)
    {
        $this->apiParas['venderCode'] = $venderCode;

        return $this;
    }

    public function getWaybillId()
    {
        return $this->apiParas['waybillId'];
    }

    public function setWaybillId($waybillId)
    {
        $this->apiParas['waybillId'] = $waybillId;

        return $this;
    }

    public function getQueryType()
    {
        return $this->apiParas['queryType'];
    }

    public function setQueryType($queryType)
    {
        $this->apiParas['queryType'] = $queryType;

        return $this;
    }
}
