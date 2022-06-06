<?php

namespace ACES\Request;


class EclpExceptionQueryExceptionListRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $orderNos;
    private $isvOrderNos;
    private $orderType;
    private $bizType;
    private $createTimeStart;
    private $createTimeEnd;
    private $pageNo;
    private $pageSize;

    public function getApiMethodName()
    {
        return "jingdong.eclp.exception.queryExceptionList";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getOrderNos()
    {
        return $this->orderNos;
    }

    public function setOrderNos($orderNos)
    {
        $this->orderNos = $orderNos;
        $this->apiParas["orderNos"] = $orderNos;
    }

    public function getIsvOrderNos()
    {
        return $this->isvOrderNos;
    }

    public function setIsvOrderNos($isvOrderNos)
    {
        $this->isvOrderNos = $isvOrderNos;
        $this->apiParas["isvOrderNos"] = $isvOrderNos;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        $this->apiParas["bizType"] = $bizType;
    }

    public function getCreateTimeStart()
    {
        return $this->createTimeStart;
    }

    public function setCreateTimeStart($createTimeStart)
    {
        $this->createTimeStart = $createTimeStart;
        $this->apiParas["createTimeStart"] = $createTimeStart;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd = $createTimeEnd;
        $this->apiParas["createTimeEnd"] = $createTimeEnd;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }
}
