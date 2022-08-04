<?php

namespace ACES\Request;

class TraceO2oTracebywaybillserviceRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.trace.o2o.tracebywaybillservice';
    }

    public function check()
    {
    }

    public function getWaybillCode()
    {
        return $this->apiParas['waybillCode'];
    }

    public function setWaybillCode($waybillCode)
    {
        $this->apiParas['waybillCode'] = $waybillCode;

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
}
