<?php

namespace ACES\Request;

class EclpCollectorQuerySoNoCheckRecordsRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.collector.querySoNoCheckRecords';
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

    public function getEclpSoNo()
    {
        return $this->apiParas['eclpSoNo'];
    }

    public function setEclpSoNo($eclpSoNo)
    {
        $this->apiParas['eclpSoNo'] = $eclpSoNo;

        return $this;
    }
}
