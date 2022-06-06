<?php

namespace ACES\Request;


class EclpFeeQueryFeeDetailWithPageRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $billDay;
    private $currentPage;
    private $pageSize;

    public function getApiMethodName()
    {
        return "jingdong.eclp.fee.queryFeeDetailWithPage";
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

    public function getBillDay()
    {
        return $this->billDay;
    }

    public function setBillDay($billDay)
    {
        $this->billDay = $billDay;
        $this->apiParas["billDay"] = $billDay;
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
