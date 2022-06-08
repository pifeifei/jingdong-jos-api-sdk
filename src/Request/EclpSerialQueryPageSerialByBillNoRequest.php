<?php

namespace ACES\Request;

class EclpSerialQueryPageSerialByBillNoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.serial.queryPageSerialByBillNo';
    }

    public function check()
    {
    }

    public function getBillNo()
    {
        return $this->apiParas['billNo'];
    }

    public function setBillNo($billNo)
    {
        $this->apiParas['billNo'] = $billNo;

        return $this;
    }

    public function getBillType()
    {
        return $this->apiParas['billType'];
    }

    public function setBillType($billType)
    {
        $this->apiParas['billType'] = $billType;

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
