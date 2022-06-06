<?php

namespace ACES\Request;


class EclpRtwGetRtwDifListForMerchantRequest
{
    private $apiParas = array();
    private $version;
    private $difStartTime;
    private $difEndTime;
    private $ownerNo;
    private $difType;
    private $eclpWarehouseNo;
    private $pageNo;
    private $pageSize;
    private $manageStatus;

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.getRtwDifListForMerchant";
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

    public function getDifStartTime()
    {
        return $this->difStartTime;
    }

    public function setDifStartTime($difStartTime)
    {
        $this->difStartTime = $difStartTime;
        $this->apiParas["difStartTime"] = $difStartTime;
    }

    public function getDifEndTime()
    {
        return $this->difEndTime;
    }

    public function setDifEndTime($difEndTime)
    {
        $this->difEndTime = $difEndTime;
        $this->apiParas["difEndTime"] = $difEndTime;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
        $this->apiParas["ownerNo"] = $ownerNo;
    }

    public function getDifType()
    {
        return $this->difType;
    }

    public function setDifType($difType)
    {
        $this->difType = $difType;
        $this->apiParas["difType"] = $difType;
    }

    public function getEclpWarehouseNo()
    {
        return $this->eclpWarehouseNo;
    }

    public function setEclpWarehouseNo($eclpWarehouseNo)
    {
        $this->eclpWarehouseNo = $eclpWarehouseNo;
        $this->apiParas["eclpWarehouseNo"] = $eclpWarehouseNo;
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

    public function getManageStatus()
    {
        return $this->manageStatus;
    }

    public function setManageStatus($manageStatus)
    {
        $this->manageStatus = $manageStatus;
        $this->apiParas["manageStatus"] = $manageStatus;
    }
}
