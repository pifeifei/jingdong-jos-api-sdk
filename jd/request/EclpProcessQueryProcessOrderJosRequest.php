<?php

class EclpProcessQueryProcessOrderJosRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.process.queryProcessOrderJos";
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
                                                                                                                                    private $processedNo;

    public function setProcessedNo($processedNo)
    {
        $this->processedNo = $processedNo;
         $this->apiParas["processedNo"] = $processedNo;
    }

    public function getProcessedNo()
    {
        return $this->processedNo;
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
}
