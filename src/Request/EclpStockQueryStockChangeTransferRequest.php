<?php

namespace ACES\Request;


class EclpStockQueryStockChangeTransferRequest
{
    private $apiParas = array();
    private $version;
    private $changeNo;
    private $changeType;
    private $timeStart;
    private $timeEnd;
    private $warehouseNo;
    private $tenantId;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryStockChangeTransfer";
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

    public function getChangeNo()
    {
        return $this->changeNo;
    }

    public function setChangeNo($changeNo)
    {
        $this->changeNo = $changeNo;
        $this->apiParas["changeNo"] = $changeNo;
    }

    public function getChangeType()
    {
        return $this->changeType;
    }

    public function setChangeType($changeType)
    {
        $this->changeType = $changeType;
        $this->apiParas["changeType"] = $changeType;
    }

    public function getTimeStart()
    {
        return $this->timeStart;
    }

    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;
        $this->apiParas["timeStart"] = $timeStart;
    }

    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;
        $this->apiParas["timeEnd"] = $timeEnd;
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
