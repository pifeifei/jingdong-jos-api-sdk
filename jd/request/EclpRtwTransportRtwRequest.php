<?php

class EclpRtwTransportRtwRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.transportRtw";
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
                                                                                                                                    private $eclpSoNo;

    public function setEclpSoNo($eclpSoNo)
    {
        $this->eclpSoNo = $eclpSoNo;
         $this->apiParas["eclpSoNo"] = $eclpSoNo;
    }

    public function getEclpSoNo()
    {
        return $this->eclpSoNo;
    }

                                                        private $eclpRtwNo;

    public function setEclpRtwNo($eclpRtwNo)
    {
        $this->eclpRtwNo = $eclpRtwNo;
         $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
    }

    public function getEclpRtwNo()
    {
        return $this->eclpRtwNo;
    }

                                                        private $isvRtwNum;

    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum = $isvRtwNum;
         $this->apiParas["isvRtwNum"] = $isvRtwNum;
    }

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
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

                                                        private $reson;

    public function setReson($reson)
    {
        $this->reson = $reson;
         $this->apiParas["reson"] = $reson;
    }

    public function getReson()
    {
        return $this->reson;
    }

                                                        private $orderInType;

    public function setOrderInType($orderInType)
    {
        $this->orderInType = $orderInType;
         $this->apiParas["orderInType"] = $orderInType;
    }

    public function getOrderInType()
    {
        return $this->orderInType;
    }

                                                        private $customField;

    public function setCustomField($customField)
    {
        $this->customField = $customField;
         $this->apiParas["customField"] = $customField;
    }

    public function getCustomField()
    {
        return $this->customField;
    }
}
