<?php

namespace ACES\Request;

class EclpCloudReceiveOrderInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.cloud.receiveOrderInfo';
    }

    public function check()
    {
    }

    public function getMachiningNo()
    {
        return $this->apiParas['machiningNo'];
    }

    public function setMachiningNo($machiningNo)
    {
        $this->apiParas['machiningNo'] = $machiningNo;

        return $this;
    }

    public function getMachiningType()
    {
        return $this->apiParas['machiningType'];
    }

    public function setMachiningType($machiningType)
    {
        $this->apiParas['machiningType'] = $machiningType;

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

    public function getSkuNo()
    {
        return $this->apiParas['skuNo'];
    }

    public function setSkuNo($skuNo)
    {
        $this->apiParas['skuNo'] = $skuNo;

        return $this;
    }

    public function getProductLevel()
    {
        return $this->apiParas['productLevel'];
    }

    public function setProductLevel($productLevel)
    {
        $this->apiParas['productLevel'] = $productLevel;

        return $this;
    }

    public function getQty()
    {
        return $this->apiParas['qty'];
    }

    public function setQty($qty)
    {
        $this->apiParas['qty'] = $qty;

        return $this;
    }

    public function getDestOwnerNo()
    {
        return $this->apiParas['destOwnerNo'];
    }

    public function setDestOwnerNo($destOwnerNo)
    {
        $this->apiParas['destOwnerNo'] = $destOwnerNo;

        return $this;
    }

    public function getDestSkuNo()
    {
        return $this->apiParas['destSkuNo'];
    }

    public function setDestSkuNo($destSkuNo)
    {
        $this->apiParas['destSkuNo'] = $destSkuNo;

        return $this;
    }

    public function getDestQty()
    {
        return $this->apiParas['destQty'];
    }

    public function setDestQty($destQty)
    {
        $this->apiParas['destQty'] = $destQty;

        return $this;
    }

    public function getDestProductLevel()
    {
        return $this->apiParas['destProductLevel'];
    }

    public function setDestProductLevel($destProductLevel)
    {
        $this->apiParas['destProductLevel'] = $destProductLevel;

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

    public function getTenantId()
    {
        return $this->apiParas['tenantId'];
    }

    public function setTenantId($tenantId)
    {
        $this->apiParas['tenantId'] = $tenantId;

        return $this;
    }
}
