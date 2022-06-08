<?php

namespace ACES\Request;

class EclpFeeQueryFeeAccountWithPageRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.fee.queryFeeAccountWithPage';
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

    public function getAccountNo()
    {
        return $this->apiParas['accountNo'];
    }

    public function setAccountNo($accountNo)
    {
        $this->apiParas['accountNo'] = $accountNo;

        return $this;
    }

    public function getAccountDayStart()
    {
        return $this->apiParas['accountDayStart'];
    }

    public function setAccountDayStart($accountDayStart)
    {
        $this->apiParas['accountDayStart'] = $accountDayStart;

        return $this;
    }

    public function getAccountDayEnd()
    {
        return $this->apiParas['accountDayEnd'];
    }

    public function setAccountDayEnd($accountDayEnd)
    {
        $this->apiParas['accountDayEnd'] = $accountDayEnd;

        return $this;
    }

    public function getStatus()
    {
        return $this->apiParas['status'];
    }

    public function setStatus($status)
    {
        $this->apiParas['status'] = $status;

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
