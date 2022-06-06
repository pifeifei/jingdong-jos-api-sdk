<?php

class EclpCollectorQueryMaintenanceResultRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.queryMaintenanceResult";
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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                                                private $startTime;

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

                                                        private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $endTime;

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

                                                        private $warehouseNo;

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }
}
