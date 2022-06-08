<?php

namespace ACES\Request;

class EclpCloudQueryReceivingResultRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.cloud.queryReceivingResult';
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
}
