<?php

class EclpRtwGetRtwDifListForMerchantRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $difStartTime;

    public function setDifStartTime($difStartTime)
    {
        $this->difStartTime = $difStartTime;
         $this->apiParas["difStartTime"] = $difStartTime;
    }

    public function getDifStartTime()
    {
        return $this->difStartTime;
    }

                                                        private $difEndTime;

    public function setDifEndTime($difEndTime)
    {
        $this->difEndTime = $difEndTime;
         $this->apiParas["difEndTime"] = $difEndTime;
    }

    public function getDifEndTime()
    {
        return $this->difEndTime;
    }

                                                        private $ownerNo;

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

                                                        private $difType;

    public function setDifType($difType)
    {
        $this->difType = $difType;
         $this->apiParas["difType"] = $difType;
    }

    public function getDifType()
    {
        return $this->difType;
    }

                                                        private $eclpWarehouseNo;

    public function setEclpWarehouseNo($eclpWarehouseNo)
    {
        $this->eclpWarehouseNo = $eclpWarehouseNo;
         $this->apiParas["eclpWarehouseNo"] = $eclpWarehouseNo;
    }

    public function getEclpWarehouseNo()
    {
        return $this->eclpWarehouseNo;
    }

                                                        private $pageNo;

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

                                                        private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

                                                        private $manageStatus;

    public function setManageStatus($manageStatus)
    {
        $this->manageStatus = $manageStatus;
         $this->apiParas["manageStatus"] = $manageStatus;
    }

    public function getManageStatus()
    {
        return $this->manageStatus;
    }
}
