<?php

namespace ACES\Request;

class EclpCloudQueryOrderInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.cloud.queryOrderInfo';
    }

    public function check()
    {
    }

    public function getMachiningNo()
    {
        return $this->apiParas['machiningNo'];
    }

    public function setMachiningNo($machiningNo)
    {
        $this->apiParas['machiningNo'] = $machiningNo;

        return $this;
    }

    public function getMachiningType()
    {
        return $this->apiParas['machiningType'];
    }

    public function setMachiningType($machiningType)
    {
        $this->apiParas['machiningType'] = $machiningType;

        return $this;
    }

    public function getTimeStart()
    {
        return $this->apiParas['timeStart'];
    }

    public function setTimeStart($timeStart)
    {
        $this->apiParas['timeStart'] = $timeStart;

        return $this;
    }

    public function getTimeEnd()
    {
        return $this->apiParas['timeEnd'];
    }

    public function setTimeEnd($timeEnd)
    {
        $this->apiParas['timeEnd'] = $timeEnd;

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
