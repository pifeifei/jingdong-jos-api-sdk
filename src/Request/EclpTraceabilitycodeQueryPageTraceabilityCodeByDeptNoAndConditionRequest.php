<?php

namespace ACES\Request;

class EclpTraceabilitycodeQueryPageTraceabilityCodeByDeptNoAndConditionRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.traceabilitycode.queryPageTraceabilityCodeByDeptNoAndCondition';
    }

    public function check()
    {
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

    public function getBillType()
    {
        return $this->apiParas['billType'];
    }

    public function setBillType($billType)
    {
        $this->apiParas['billType'] = $billType;

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

    public function getBillNo()
    {
        return $this->apiParas['billNo'];
    }

    public function setBillNo($billNo)
    {
        $this->apiParas['billNo'] = $billNo;

        return $this;
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
}
