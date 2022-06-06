<?php

namespace ACES\Request;


class JcloudWmsPruchaseorderCreateRequest
{
    private $apiParas = array();
    private $version;
    private $receiptNo;
    private $ownerNo;
    private $billType;
    private $supplierNo;
    private $skuNo;
    private $skuName;
    private $expectedQty;
    private $warehouseNo;
    private $tenantId;

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.pruchaseorder.create";
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

    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
        $this->apiParas["receiptNo"] = $receiptNo;
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

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType)
    {
        $this->billType = $billType;
        $this->apiParas["billType"] = $billType;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo = $supplierNo;
        $this->apiParas["supplierNo"] = $supplierNo;
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

    public function getSkuName()
    {
        return $this->skuName;
    }

    public function setSkuName($skuName)
    {
        $this->skuName = $skuName;
        $this->apiParas["skuName"] = $skuName;
    }

    public function getExpectedQty()
    {
        return $this->expectedQty;
    }

    public function setExpectedQty($expectedQty)
    {
        $this->expectedQty = $expectedQty;
        $this->apiParas["expectedQty"] = $expectedQty;
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
