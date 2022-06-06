<?php

namespace ACES\Request;


class EclpStockSetShopStockFixedRequest
{
    private $apiParas = array();
    private $version;
    private $requestId;
    private $deptNo;
    private $shopNo;
    private $warehouseNo;
    private $stockNum;
    private $goodsNo;
    private $shopType;
    private $opUser;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.setShopStockFixed";
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

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        $this->apiParas["requestId"] = $requestId;
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

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        $this->apiParas["shopNo"] = $shopNo;
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

    public function getStockNum()
    {
        return $this->stockNum;
    }

    public function setStockNum($stockNum)
    {
        $this->stockNum = $stockNum;
        $this->apiParas["stockNum"] = $stockNum;
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

    public function getShopType()
    {
        return $this->shopType;
    }

    public function setShopType($shopType)
    {
        $this->shopType = $shopType;
        $this->apiParas["shopType"] = $shopType;
    }

    public function getOpUser()
    {
        return $this->opUser;
    }

    public function setOpUser($opUser)
    {
        $this->opUser = $opUser;
        $this->apiParas["opUser"] = $opUser;
    }
}
