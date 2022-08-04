<?php

namespace ACES\Request;

class EclpIbAddOutsideMainRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.ib.addOutsideMain';
    }

    public function check()
    {
    }

    public function getOutsideSource()
    {
        return $this->apiParas['outsideSource'];
    }

    public function setOutsideSource($outsideSource)
    {
        $this->apiParas['outsideSource'] = $outsideSource;

        return $this;
    }

    public function getSelfLiftCode()
    {
        return $this->apiParas['selfLiftCode'];
    }

    public function setSelfLiftCode($selfLiftCode)
    {
        $this->apiParas['selfLiftCode'] = $selfLiftCode;

        return $this;
    }

    public function getWarehouseNoIn()
    {
        return $this->apiParas['warehouseNoIn'];
    }

    public function setWarehouseNoIn($warehouseNoIn)
    {
        $this->apiParas['warehouseNoIn'] = $warehouseNoIn;

        return $this;
    }

    public function getIsvOutsideNo()
    {
        return $this->apiParas['isvOutsideNo'];
    }

    public function setIsvOutsideNo($isvOutsideNo)
    {
        $this->apiParas['isvOutsideNo'] = $isvOutsideNo;

        return $this;
    }

    public function getShipperNo()
    {
        return $this->apiParas['shipperNo'];
    }

    public function setShipperNo($shipperNo)
    {
        $this->apiParas['shipperNo'] = $shipperNo;

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

    public function getWarehouseNoOut()
    {
        return $this->apiParas['warehouseNoOut'];
    }

    public function setWarehouseNoOut($warehouseNoOut)
    {
        $this->apiParas['warehouseNoOut'] = $warehouseNoOut;

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

    public function getPlanNum()
    {
        return $this->apiParas['planNum'];
    }

    public function setPlanNum($planNum)
    {
        $this->apiParas['planNum'] = $planNum;

        return $this;
    }

    public function getBatAttrListJson()
    {
        return $this->apiParas['batAttrListJson'];
    }

    public function setBatAttrListJson($batAttrListJson)
    {
        $this->apiParas['batAttrListJson'] = $batAttrListJson;

        return $this;
    }
}
