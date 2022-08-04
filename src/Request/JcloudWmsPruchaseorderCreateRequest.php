<?php

namespace ACES\Request;

class JcloudWmsPruchaseorderCreateRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.jcloud.wms.pruchaseorder.create';
    }

    public function check()
    {
    }

    public function getReceiptNo()
    {
        return $this->apiParas['receiptNo'];
    }

    public function setReceiptNo($receiptNo)
    {
        $this->apiParas['receiptNo'] = $receiptNo;

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

    public function getBillType()
    {
        return $this->apiParas['billType'];
    }

    public function setBillType($billType)
    {
        $this->apiParas['billType'] = $billType;

        return $this;
    }

    public function getSupplierNo()
    {
        return $this->apiParas['supplierNo'];
    }

    public function setSupplierNo($supplierNo)
    {
        $this->apiParas['supplierNo'] = $supplierNo;

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

    public function getSkuName()
    {
        return $this->apiParas['skuName'];
    }

    public function setSkuName($skuName)
    {
        $this->apiParas['skuName'] = $skuName;

        return $this;
    }

    public function getExpectedQty()
    {
        return $this->apiParas['expectedQty'];
    }

    public function setExpectedQty($expectedQty)
    {
        $this->apiParas['expectedQty'] = $expectedQty;

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
