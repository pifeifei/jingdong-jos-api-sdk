<?php

namespace ACES\Request;

class EclpExceptionQueryExceptionListRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.exception.queryExceptionList';
    }

    public function check()
    {
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getOrderNos()
    {
        return $this->apiParas['orderNos'];
    }

    public function setOrderNos($orderNos)
    {
        $this->apiParas['orderNos'] = $orderNos;

        return $this;
    }

    public function getIsvOrderNos()
    {
        return $this->apiParas['isvOrderNos'];
    }

    public function setIsvOrderNos($isvOrderNos)
    {
        $this->apiParas['isvOrderNos'] = $isvOrderNos;

        return $this;
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

        return $this;
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

    public function getCreateTimeStart()
    {
        return $this->apiParas['createTimeStart'];
    }

    public function setCreateTimeStart($createTimeStart)
    {
        $this->apiParas['createTimeStart'] = $createTimeStart;

        return $this;
    }

    public function getCreateTimeEnd()
    {
        return $this->apiParas['createTimeEnd'];
    }

    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->apiParas['createTimeEnd'] = $createTimeEnd;

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
}
