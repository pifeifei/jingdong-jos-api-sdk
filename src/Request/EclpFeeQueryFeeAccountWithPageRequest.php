<?php

namespace ACES\Request;


class EclpFeeQueryFeeAccountWithPageRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $accountNo;
    private $accountDayStart;
    private $accountDayEnd;
    private $status;
    private $currentPage;
    private $pageSize;

    public function getApiMethodName()
    {
        return "jingdong.eclp.fee.queryFeeAccountWithPage";
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

    public function getAccountNo()
    {
        return $this->accountNo;
    }

    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        $this->apiParas["accountNo"] = $accountNo;
    }

    public function getAccountDayStart()
    {
        return $this->accountDayStart;
    }

    public function setAccountDayStart($accountDayStart)
    {
        $this->accountDayStart = $accountDayStart;
        $this->apiParas["accountDayStart"] = $accountDayStart;
    }

    public function getAccountDayEnd()
    {
        return $this->accountDayEnd;
    }

    public function setAccountDayEnd($accountDayEnd)
    {
        $this->accountDayEnd = $accountDayEnd;
        $this->apiParas["accountDayEnd"] = $accountDayEnd;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
        $this->apiParas["currentPage"] = $currentPage;
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
