<?php

class EclpTracesourceQueryTraceSourceInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.tracesource.queryTraceSourceInfo";
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
                                                                                                                                    private $soNo;

    public function setSoNo($soNo)
    {
        $this->soNo = $soNo;
         $this->apiParas["soNo"] = $soNo;
    }

    public function getSoNo()
    {
        return $this->soNo;
    }

                                                        private $isvSoNo;

    public function setIsvSoNo($isvSoNo)
    {
        $this->isvSoNo = $isvSoNo;
         $this->apiParas["isvSoNo"] = $isvSoNo;
    }

    public function getIsvSoNo()
    {
        return $this->isvSoNo;
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

                                                        private $pin;

    public function setPin($pin)
    {
        $this->pin = $pin;
         $this->apiParas["pin"] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }
}
