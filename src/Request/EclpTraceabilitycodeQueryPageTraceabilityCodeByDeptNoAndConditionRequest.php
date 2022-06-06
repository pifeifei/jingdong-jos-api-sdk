<?php

namespace ACES\Request;


class EclpTraceabilitycodeQueryPageTraceabilityCodeByDeptNoAndConditionRequest
{
    private $apiParas = array();
    private $version;
    private $pageNo;
    private $billType;
    private $pageSize;
    private $billNo;
    private $deptNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.traceabilitycode.queryPageTraceabilityCodeByDeptNoAndCondition";
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

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType)
    {
        $this->billType = $billType;
        $this->apiParas["billType"] = $billType;
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

    public function getBillNo()
    {
        return $this->billNo;
    }

    public function setBillNo($billNo)
    {
        $this->billNo = $billNo;
        $this->apiParas["billNo"] = $billNo;
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
}
