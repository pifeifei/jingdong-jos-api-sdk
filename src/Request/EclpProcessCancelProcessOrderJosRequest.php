<?php

namespace ACES\Request;


class EclpProcessCancelProcessOrderJosRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $parentProcessedNo;
    private $sellerProcessedNo;
    private $sellerNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.process.cancelProcessOrderJos";
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

    public function getParentProcessedNo()
    {
        return $this->parentProcessedNo;
    }

    public function setParentProcessedNo($parentProcessedNo)
    {
        $this->parentProcessedNo = $parentProcessedNo;
        $this->apiParas["parentProcessedNo"] = $parentProcessedNo;
    }

    public function getSellerProcessedNo()
    {
        return $this->sellerProcessedNo;
    }

    public function setSellerProcessedNo($sellerProcessedNo)
    {
        $this->sellerProcessedNo = $sellerProcessedNo;
        $this->apiParas["sellerProcessedNo"] = $sellerProcessedNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
    }
}
