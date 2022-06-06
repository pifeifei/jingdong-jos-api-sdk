<?php

namespace ACES\Request;


class EclpOrderQueryOrderCustomsRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $isvUUID;
    private $pageNo;
    private $pageSize;
    private $startDate;
    private $endDate;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderCustoms";
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

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID = $isvUUID;
        $this->apiParas["isvUUID"] = $isvUUID;
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
}
