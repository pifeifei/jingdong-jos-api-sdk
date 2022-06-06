<?php

namespace ACES\Request;


class EclpIbAddOutsideMainRequest
{
    private $apiParas = array();
    private $version;
    private $outsideSource;
    private $selfLiftCode;
    private $warehouseNoIn;
    private $isvOutsideNo;
    private $shipperNo;
    private $deptNo;
    private $warehouseNoOut;
    private $goodsNo;
    private $planNum;
    private $batAttrListJson;

    public function getApiMethodName()
    {
        return "jingdong.eclp.ib.addOutsideMain";
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

    public function getOutsideSource()
    {
        return $this->outsideSource;
    }

    public function setOutsideSource($outsideSource)
    {
        $this->outsideSource = $outsideSource;
        $this->apiParas["outsideSource"] = $outsideSource;
    }

    public function getSelfLiftCode()
    {
        return $this->selfLiftCode;
    }

    public function setSelfLiftCode($selfLiftCode)
    {
        $this->selfLiftCode = $selfLiftCode;
        $this->apiParas["selfLiftCode"] = $selfLiftCode;
    }

    public function getWarehouseNoIn()
    {
        return $this->warehouseNoIn;
    }

    public function setWarehouseNoIn($warehouseNoIn)
    {
        $this->warehouseNoIn = $warehouseNoIn;
        $this->apiParas["warehouseNoIn"] = $warehouseNoIn;
    }

    public function getIsvOutsideNo()
    {
        return $this->isvOutsideNo;
    }

    public function setIsvOutsideNo($isvOutsideNo)
    {
        $this->isvOutsideNo = $isvOutsideNo;
        $this->apiParas["isvOutsideNo"] = $isvOutsideNo;
    }

    public function getShipperNo()
    {
        return $this->shipperNo;
    }

    public function setShipperNo($shipperNo)
    {
        $this->shipperNo = $shipperNo;
        $this->apiParas["shipperNo"] = $shipperNo;
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

    public function getWarehouseNoOut()
    {
        return $this->warehouseNoOut;
    }

    public function setWarehouseNoOut($warehouseNoOut)
    {
        $this->warehouseNoOut = $warehouseNoOut;
        $this->apiParas["warehouseNoOut"] = $warehouseNoOut;
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

    public function getPlanNum()
    {
        return $this->planNum;
    }

    public function setPlanNum($planNum)
    {
        $this->planNum = $planNum;
        $this->apiParas["planNum"] = $planNum;
    }

    public function getBatAttrListJson()
    {
        return $this->batAttrListJson;
    }

    public function setBatAttrListJson($batAttrListJson)
    {
        $this->batAttrListJson = $batAttrListJson;
        $this->apiParas["batAttrListJson"] = $batAttrListJson;
    }
}
