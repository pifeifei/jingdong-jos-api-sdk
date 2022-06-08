<?php

namespace ACES\Request;

class EclpRtwAcceptReturnOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.rtw.acceptReturnOrder';
    }

    public function check()
    {
    }

    public function getDeliveryNo()
    {
        return $this->apiParas['deliveryNo'];
    }

    public function setDeliveryNo($deliveryNo)
    {
        $this->apiParas['deliveryNo'] = $deliveryNo;

        return $this;
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

    public function getPackageCodes()
    {
        return $this->apiParas['packageCodes'];
    }

    public function setPackageCodes($packageCodes)
    {
        $this->apiParas['packageCodes'] = $packageCodes;

        return $this;
    }

    public function getSourceNo()
    {
        return $this->apiParas['sourceNo'];
    }

    public function setSourceNo($sourceNo)
    {
        $this->apiParas['sourceNo'] = $sourceNo;

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

    public function getIsvLotattrs()
    {
        return $this->apiParas['isvLotattrs'];
    }

    public function setIsvLotattrs($isvLotattrs)
    {
        $this->apiParas['isvLotattrs'] = $isvLotattrs;

        return $this;
    }

    public function getCheckLotattrs()
    {
        return $this->apiParas['checkLotattrs'];
    }

    public function setCheckLotattrs($checkLotattrs)
    {
        $this->apiParas['checkLotattrs'] = $checkLotattrs;

        return $this;
    }
}
