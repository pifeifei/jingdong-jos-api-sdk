<?php

class EclpMasterQuerySupplierRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.querySupplier";
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

                                                        private $supplierNos;

    public function setSupplierNos($supplierNos)
    {
        $this->supplierNos = $supplierNos;
         $this->apiParas["supplierNos"] = $supplierNos;
    }

    public function getSupplierNos()
    {
        return $this->supplierNos;
    }
}
