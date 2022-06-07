<?php

namespace ACES\Request;


class EclpFeeQueryFeeAccountDetailWithPageRequest
{
    private $apiParas = array();
    private $version;
    private $accountNo;
    private $billDayStart;
    private $billDayEnd;
    private $currentPage;
    private $pageSize;

    public function getApiMethodName()
    {
        return "jingdong.eclp.fee.queryFeeAccountDetailWithPage";
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

    public function getAccountNo()
    {
        return $this->accountNo;
    }

    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        $this->apiParas["accountNo"] = $accountNo;
    }

    public function getBillDayStart()
    {
        return $this->billDayStart;
    }

    public function setBillDayStart($billDayStart)
    {
        $this->billDayStart = $billDayStart;
        $this->apiParas["billDayStart"] = $billDayStart;
    }

    public function getBillDayEnd()
    {
        return $this->billDayEnd;
    }

    public function setBillDayEnd($billDayEnd)
    {
        $this->billDayEnd = $billDayEnd;
        $this->apiParas["billDayEnd"] = $billDayEnd;
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
