<?php

namespace ACES\Request;


class JcloudWmsPruchaseorderCancelRequest
{
    private $apiParas = array();
    private $version;
    private $receiptNo;
    private $billType;
    private $warehouseNo;
    private $tenantId;

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.pruchaseorder.cancel";
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
}
