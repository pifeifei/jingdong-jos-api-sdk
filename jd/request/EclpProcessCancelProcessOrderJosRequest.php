<?php

class EclpProcessCancelProcessOrderJosRequest
{
    private $apiParas = array();

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

                                                        private $parentProcessedNo;

    public function setParentProcessedNo($parentProcessedNo)
    {
        $this->parentProcessedNo = $parentProcessedNo;
         $this->apiParas["parentProcessedNo"] = $parentProcessedNo;
    }

    public function getParentProcessedNo()
    {
        return $this->parentProcessedNo;
    }

                                                        private $sellerProcessedNo;

    public function setSellerProcessedNo($sellerProcessedNo)
    {
        $this->sellerProcessedNo = $sellerProcessedNo;
         $this->apiParas["sellerProcessedNo"] = $sellerProcessedNo;
    }

    public function getSellerProcessedNo()
    {
        return $this->sellerProcessedNo;
    }

                                                        private $sellerNo;

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }
}
