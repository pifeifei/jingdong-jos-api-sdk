<?php

class KysPrintServiceWsRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.kys.PrintServiceWs";
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
                                                                                                                                                        private $noList;

    public function setNoList($noList)
    {
        $this->noList = $noList;
         $this->apiParas["noList"] = $noList;
    }

    public function getNoList()
    {
        return $this->noList;
    }

                                                                                    private $noType;

    public function setNoType($noType)
    {
        $this->noType = $noType;
         $this->apiParas["noType"] = $noType;
    }

    public function getNoType()
    {
        return $this->noType;
    }

                                                        private $deptId;

    public function setDeptId($deptId)
    {
        $this->deptId = $deptId;
         $this->apiParas["deptId"] = $deptId;
    }

    public function getDeptId()
    {
        return $this->deptId;
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
