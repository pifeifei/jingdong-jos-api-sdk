<?php

namespace ACES\Request;

class EclpFeeQueryFeeAccountDetailWithPageRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.fee.queryFeeAccountDetailWithPage';
    }

    public function check()
    {
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

    public function getBillDayStart()
    {
        return $this->apiParas['billDayStart'];
    }

    public function setBillDayStart($billDayStart)
    {
        $this->apiParas['billDayStart'] = $billDayStart;

        return $this;
    }

    public function getBillDayEnd()
    {
        return $this->apiParas['billDayEnd'];
    }

    public function setBillDayEnd($billDayEnd)
    {
        $this->apiParas['billDayEnd'] = $billDayEnd;

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
