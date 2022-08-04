<?php

namespace ACES\Request;

class EclpCollectorQueryPoReceiveRecordsRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.collector.queryPoReceiveRecords';
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
