<?php

namespace ACES\Request;


class EclpOrderQueryOrderListByStatusRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $soStatus;
    private $pageNo;
    private $pageSize;
    private $startDate;
    private $endDate;
    private $billType;
    private $soNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderListByStatus";
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

    public function getSoStatus()
    {
        return $this->soStatus;
    }

    public function setSoStatus($soStatus)
    {
        $this->soStatus = $soStatus;
        $this->apiParas["soStatus"] = $soStatus;
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

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        $this->apiParas["startDate"] = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["endDate"] = $endDate;
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

    public function getSoNo()
    {
        return $this->soNo;
    }

    public function setSoNo($soNo)
    {
        $this->soNo = $soNo;
        $this->apiParas["soNo"] = $soNo;
    }
}
