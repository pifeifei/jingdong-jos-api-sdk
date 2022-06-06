<?php

namespace ACES\Request;


class EclpCloudQueryOrderInfoRequest
{
    private $apiParas = array();
    private $version;
    private $machiningNo;
    private $machiningType;
    private $timeStart;
    private $timeEnd;
    private $warehouseNo;
    private $tenantId;

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.queryOrderInfo";
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

    public function getMachiningNo()
    {
        return $this->machiningNo;
    }

    public function setMachiningNo($machiningNo)
    {
        $this->machiningNo = $machiningNo;
        $this->apiParas["machiningNo"] = $machiningNo;
    }

    public function getMachiningType()
    {
        return $this->machiningType;
    }

    public function setMachiningType($machiningType)
    {
        $this->machiningType = $machiningType;
        $this->apiParas["machiningType"] = $machiningType;
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
