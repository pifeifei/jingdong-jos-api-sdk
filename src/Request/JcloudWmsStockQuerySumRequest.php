<?php

namespace ACES\Request;

class JcloudWmsStockQuerySumRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.jcloud.wms.stock.query.sum';
    }

    public function check()
    {
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

    public function getOwnerNo()
    {
        return $this->apiParas['ownerNo'];
    }

    public function setOwnerNo($ownerNo)
    {
        $this->apiParas['ownerNo'] = $ownerNo;

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
