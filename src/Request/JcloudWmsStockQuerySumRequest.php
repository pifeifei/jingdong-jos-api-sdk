<?php

namespace ACES\Request;


class JcloudWmsStockQuerySumRequest
{
    private $apiParas = array();
    private $version;
    private $skuNo;
    private $ownerNo;
    private $warehouseNo;
    private $tenantId;

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.stock.query.sum";
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

    public function getSkuNo()
    {
        return $this->skuNo;
    }

    public function setSkuNo($skuNo)
    {
        $this->skuNo = $skuNo;
        $this->apiParas["skuNo"] = $skuNo;
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
