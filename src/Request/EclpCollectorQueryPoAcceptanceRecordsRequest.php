<?php

namespace ACES\Request;

class EclpCollectorQueryPoAcceptanceRecordsRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.collector.queryPoAcceptanceRecords';
    }

    public function check()
    {
    }

    public function getBizType()
    {
        return $this->apiParas['bizType'];
    }

    public function setBizType($bizType)
    {
        $this->apiParas['bizType'] = $bizType;

        return $this;
    }

    public function getPoOrderNo()
    {
        return $this->apiParas['poOrderNo'];
    }

    public function setPoOrderNo($poOrderNo)
    {
        $this->apiParas['poOrderNo'] = $poOrderNo;

        return $this;
    }
}
