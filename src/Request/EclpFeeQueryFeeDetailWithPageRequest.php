<?php

namespace ACES\Request;

class EclpFeeQueryFeeDetailWithPageRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.fee.queryFeeDetailWithPage';
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

    public function getBillDay()
    {
        return $this->apiParas['billDay'];
    }

    public function setBillDay($billDay)
    {
        $this->apiParas['billDay'] = $billDay;

        return $this;
    }

    public function getCurrentPage()
    {
        return $this->apiParas['currentPage'];
    }

    public function setCurrentPage($currentPage)
    {
        $this->apiParas['currentPage'] = $currentPage;

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
