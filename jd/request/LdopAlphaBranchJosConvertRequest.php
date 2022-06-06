<?php

class LdopAlphaBranchJosConvertRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.branch.jos.Convert";
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
                                                                    private $branchListXml;

    public function setBranchListXml($branchListXml)
    {
        $this->branchListXml = $branchListXml;
         $this->apiParas["branchListXml"] = $branchListXml;
    }

    public function getBranchListXml()
    {
        return $this->branchListXml;
    }
}
