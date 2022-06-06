<?php

namespace ACES\Request;


class EclpMasterQueryWarehouseRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $warehouseNos;
    private $status;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryWarehouse";
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

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getWarehouseNos()
    {
        return $this->warehouseNos;
    }

    public function setWarehouseNos($warehouseNos)
    {
        $this->warehouseNos = $warehouseNos;
        $this->apiParas["warehouseNos"] = $warehouseNos;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }
}
