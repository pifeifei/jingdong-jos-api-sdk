<?php

class EclpCollectorQueryPoAcceptanceRecordsRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.queryPoAcceptanceRecords";
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
                                                                                                                                                                private $bizType;

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
         $this->apiParas["bizType"] = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

                                                        private $poOrderNo;

    public function setPoOrderNo($poOrderNo)
    {
        $this->poOrderNo = $poOrderNo;
         $this->apiParas["poOrderNo"] = $poOrderNo;
    }

    public function getPoOrderNo()
    {
        return $this->poOrderNo;
    }
}
