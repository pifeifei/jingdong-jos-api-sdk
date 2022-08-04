<?php

namespace ACES\Request;

class EclpMasterQueryWarehouseRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.queryWarehouse';
    }

    public function check()
    {
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getWarehouseNos()
    {
        return $this->apiParas['warehouseNos'];
    }

    public function setWarehouseNos($warehouseNos)
    {
        $this->apiParas['warehouseNos'] = $warehouseNos;

        return $this;
    }

    public function getStatus()
    {
        return $this->apiParas['status'];
    }

    public function setStatus($status)
    {
        $this->apiParas['status'] = $status;

        return $this;
    }
}
