<?php

namespace ACES\Request;


class EclpCloudReceiveOrderInfoRequest
{
    private $apiParas = array();
    private $version;
    private $machiningNo;
    private $machiningType;
    private $ownerNo;
    private $skuNo;
    private $productLevel;
    private $qty;
    private $destOwnerNo;
    private $destSkuNo;
    private $destQty;
    private $destProductLevel;
    private $warehouseNo;
    private $tenantId;

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.receiveOrderInfo";
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

    public function getMachiningNo()
    {
        return $this->machiningNo;
    }

    public function setMachiningNo($machiningNo)
    {
        $this->machiningNo = $machiningNo;
        $this->apiParas["machiningNo"] = $machiningNo;
    }

    public function getMachiningType()
    {
        return $this->machiningType;
    }

    public function setMachiningType($machiningType)
    {
        $this->machiningType = $machiningType;
        $this->apiParas["machiningType"] = $machiningType;
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

    public function getSkuNo()
    {
        return $this->skuNo;
    }

    public function setSkuNo($skuNo)
    {
        $this->skuNo = $skuNo;
        $this->apiParas["skuNo"] = $skuNo;
    }

    public function getProductLevel()
    {
        return $this->productLevel;
    }

    public function setProductLevel($productLevel)
    {
        $this->productLevel = $productLevel;
        $this->apiParas["productLevel"] = $productLevel;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
        $this->apiParas["qty"] = $qty;
    }

    public function getDestOwnerNo()
    {
        return $this->destOwnerNo;
    }

    public function setDestOwnerNo($destOwnerNo)
    {
        $this->destOwnerNo = $destOwnerNo;
        $this->apiParas["destOwnerNo"] = $destOwnerNo;
    }

    public function getDestSkuNo()
    {
        return $this->destSkuNo;
    }

    public function setDestSkuNo($destSkuNo)
    {
        $this->destSkuNo = $destSkuNo;
        $this->apiParas["destSkuNo"] = $destSkuNo;
    }

    public function getDestQty()
    {
        return $this->destQty;
    }

    public function setDestQty($destQty)
    {
        $this->destQty = $destQty;
        $this->apiParas["destQty"] = $destQty;
    }

    public function getDestProductLevel()
    {
        return $this->destProductLevel;
    }

    public function setDestProductLevel($destProductLevel)
    {
        $this->destProductLevel = $destProductLevel;
        $this->apiParas["destProductLevel"] = $destProductLevel;
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

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
        $this->apiParas["tenantId"] = $tenantId;
    }
}
