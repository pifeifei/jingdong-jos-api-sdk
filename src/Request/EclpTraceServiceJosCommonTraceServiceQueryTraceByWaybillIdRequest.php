<?php

namespace ACES\Request;

class EclpTraceServiceJosCommonTraceServiceQueryTraceByWaybillIdRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.trace.service.jos.CommonTraceService.queryTraceByWaybillId';
    }

    public function check()
    {
    }

    public function getSign()
    {
        return $this->apiParas['sign'];
    }

    public function setSign($sign)
    {
        $this->apiParas['sign'] = $sign;

        return $this;
    }

    public function getT()
    {
        return $this->apiParas['t'];
    }

    public function setT($t)
    {
        $this->apiParas['t'] = $t;

        return $this;
    }

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }

    public function getCarrierCode()
    {
        return $this->apiParas['carrierCode'];
    }

    public function setCarrierCode($carrierCode)
    {
        $this->apiParas['carrierCode'] = $carrierCode;

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
}
