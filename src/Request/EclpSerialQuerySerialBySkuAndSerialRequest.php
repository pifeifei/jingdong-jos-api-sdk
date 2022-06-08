<?php

namespace ACES\Request;

class EclpSerialQuerySerialBySkuAndSerialRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.serial.querySerialBySkuAndSerial';
    }

    public function check()
    {
    }

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    public function getGoodsSID()
    {
        return $this->apiParas['goodsSID'];
    }

    public function setGoodsSID($goodsSID)
    {
        $this->apiParas['goodsSID'] = $goodsSID;

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
