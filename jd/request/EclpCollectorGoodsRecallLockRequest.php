<?php

class EclpCollectorGoodsRecallLockRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.goodsRecallLock";
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
                                                                                                                                                                private $businessLockNo;

    public function setBusinessLockNo($businessLockNo)
    {
        $this->businessLockNo = $businessLockNo;
         $this->apiParas["businessLockNo"] = $businessLockNo;
    }

    public function getBusinessLockNo()
    {
        return $this->businessLockNo;
    }

                                                        private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $warehouseNo;

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

                                                                                                                                                                                                                                                                                                                                                                        private $goodsNo;
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }
                                                                                                                                                                                                                                                                                                                       private $goodsLevel;
    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }
                                                                                                                                                                                                                                                                                                                       private $lockReason;
    public function setLockReason($lockReason)
    {
        $this->lockReason = $lockReason;
        $this->apiParas["lockReason"] = $lockReason;
    }

    public function getLockReason()
    {
        return $this->lockReason;
    }
                                                                                                                                                                                                                                                                                                                       private $isLot;
    public function setIsLot($isLot)
    {
        $this->isLot = $isLot;
        $this->apiParas["isLot"] = $isLot;
    }

    public function getIsLot()
    {
        return $this->isLot;
    }
}
