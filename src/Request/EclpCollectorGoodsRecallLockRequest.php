<?php

namespace ACES\Request;

class EclpCollectorGoodsRecallLockRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.collector.goodsRecallLock';
    }

    public function check()
    {
    }

    public function getBusinessLockNo()
    {
        return $this->apiParas['businessLockNo'];
    }

    public function setBusinessLockNo($businessLockNo)
    {
        $this->apiParas['businessLockNo'] = $businessLockNo;

        return $this;
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    public function getGoodsLevel()
    {
        return $this->apiParas['goodsLevel'];
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->apiParas['goodsLevel'] = $goodsLevel;

        return $this;
    }

    public function getLockReason()
    {
        return $this->apiParas['lockReason'];
    }

    public function setLockReason($lockReason)
    {
        $this->apiParas['lockReason'] = $lockReason;

        return $this;
    }

    public function getIsLot()
    {
        return $this->apiParas['isLot'];
    }

    public function setIsLot($isLot)
    {
        $this->apiParas['isLot'] = $isLot;

        return $this;
    }
}
