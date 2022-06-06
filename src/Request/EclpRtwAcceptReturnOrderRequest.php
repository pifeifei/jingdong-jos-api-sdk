<?php

namespace ACES\Request;


class EclpRtwAcceptReturnOrderRequest
{
    private $apiParas = array();
    private $version;
    private $deliveryNo;
    private $receiptNo;
    private $packageCodes;
    private $sourceNo;
    private $ownerNo;
    private $billType;
    private $warehouseNo;
    private $tenantId;
    private $skuNo;
    private $skuName;
    private $expectedQty;
    private $isvLotattrs;
    private $checkLotattrs;

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.acceptReturnOrder";
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

    public function getDeliveryNo()
    {
        return $this->deliveryNo;
    }

    public function setDeliveryNo($deliveryNo)
    {
        $this->deliveryNo = $deliveryNo;
        $this->apiParas["deliveryNo"] = $deliveryNo;
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

    public function getPackageCodes()
    {
        return $this->packageCodes;
    }

    public function setPackageCodes($packageCodes)
    {
        $this->packageCodes = $packageCodes;
        $this->apiParas["packageCodes"] = $packageCodes;
    }

    public function getSourceNo()
    {
        return $this->sourceNo;
    }

    public function setSourceNo($sourceNo)
    {
        $this->sourceNo = $sourceNo;
        $this->apiParas["sourceNo"] = $sourceNo;
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

    public function getIsvLotattrs()
    {
        return $this->isvLotattrs;
    }

    public function setIsvLotattrs($isvLotattrs)
    {
        $this->isvLotattrs = $isvLotattrs;
        $this->apiParas["isvLotattrs"] = $isvLotattrs;
    }

    public function getCheckLotattrs()
    {
        return $this->checkLotattrs;
    }

    public function setCheckLotattrs($checkLotattrs)
    {
        $this->checkLotattrs = $checkLotattrs;
        $this->apiParas["checkLotattrs"] = $checkLotattrs;
    }
}
