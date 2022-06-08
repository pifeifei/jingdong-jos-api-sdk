<?php

namespace ACES\Request;

class EclpRtwGetRtwDifListForMerchantRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.rtw.getRtwDifListForMerchant';
    }

    public function check()
    {
    }

    public function getDifStartTime()
    {
        return $this->apiParas['difStartTime'];
    }

    public function setDifStartTime($difStartTime)
    {
        $this->apiParas['difStartTime'] = $difStartTime;

        return $this;
    }

    public function getDifEndTime()
    {
        return $this->apiParas['difEndTime'];
    }

    public function setDifEndTime($difEndTime)
    {
        $this->apiParas['difEndTime'] = $difEndTime;

        return $this;
    }

    public function getOwnerNo()
    {
        return $this->apiParas['ownerNo'];
    }

    public function setOwnerNo($ownerNo)
    {
        $this->apiParas['ownerNo'] = $ownerNo;

        return $this;
    }

    public function getDifType()
    {
        return $this->apiParas['difType'];
    }

    public function setDifType($difType)
    {
        $this->apiParas['difType'] = $difType;

        return $this;
    }

    public function getEclpWarehouseNo()
    {
        return $this->apiParas['eclpWarehouseNo'];
    }

    public function setEclpWarehouseNo($eclpWarehouseNo)
    {
        $this->apiParas['eclpWarehouseNo'] = $eclpWarehouseNo;

        return $this;
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

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;

        return $this;
    }

    public function getManageStatus()
    {
        return $this->apiParas['manageStatus'];
    }

    public function setManageStatus($manageStatus)
    {
        $this->apiParas['manageStatus'] = $manageStatus;

        return $this;
    }
}
