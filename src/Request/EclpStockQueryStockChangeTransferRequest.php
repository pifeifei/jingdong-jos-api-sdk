<?php

namespace ACES\Request;

class EclpStockQueryStockChangeTransferRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.stock.queryStockChangeTransfer';
    }

    public function check()
    {
    }

    public function getChangeNo()
    {
        return $this->apiParas['changeNo'];
    }

    public function setChangeNo($changeNo)
    {
        $this->apiParas['changeNo'] = $changeNo;

        return $this;
    }

    public function getChangeType()
    {
        return $this->apiParas['changeType'];
    }

    public function setChangeType($changeType)
    {
        $this->apiParas['changeType'] = $changeType;

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
