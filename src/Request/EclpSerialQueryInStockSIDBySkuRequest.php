<?php

namespace ACES\Request;

class EclpSerialQueryInStockSIDBySkuRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.serial.queryInStockSIDBySku';
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

    public function getPageNo()
    {
        return $this->apiParas['pageNo'];
    }

    public function setPageNo($pageNo)
    {
        $this->apiParas['pageNo'] = $pageNo;

        return $this;
    }

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;

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
