<?php

class EclpTraceabilitycodeQueryPageTraceabilityCodeByDeptNoAndConditionRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.traceabilitycode.queryPageTraceabilityCodeByDeptNoAndCondition";
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
                                                                                                                                    private $pageNo;

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

                                                        private $billType;

    public function setBillType($billType)
    {
        $this->billType = $billType;
         $this->apiParas["billType"] = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

                                                        private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

                                                        private $billNo;

    public function setBillNo($billNo)
    {
        $this->billNo = $billNo;
         $this->apiParas["billNo"] = $billNo;
    }

    public function getBillNo()
    {
        return $this->billNo;
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
}
