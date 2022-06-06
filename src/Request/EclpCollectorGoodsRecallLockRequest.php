<?php

namespace ACES\Request;


class EclpCollectorGoodsRecallLockRequest
{
    private $apiParas = array();
    private $version;
    private $businessLockNo;
    private $deptNo;
    private $warehouseNo;
    private $goodsNo;
    private $goodsLevel;
    private $lockReason;
    private $isLot;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getBusinessLockNo()
    {
        return $this->businessLockNo;
    }

    public function setBusinessLockNo($businessLockNo)
    {
        $this->businessLockNo = $businessLockNo;
        $this->apiParas["businessLockNo"] = $businessLockNo;
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

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getLockReason()
    {
        return $this->lockReason;
    }

    public function setLockReason($lockReason)
    {
        $this->lockReason = $lockReason;
        $this->apiParas["lockReason"] = $lockReason;
    }

    public function getIsLot()
    {
        return $this->isLot;
    }

    public function setIsLot($isLot)
    {
        $this->isLot = $isLot;
        $this->apiParas["isLot"] = $isLot;
    }
}
