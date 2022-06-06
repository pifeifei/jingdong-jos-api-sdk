<?php

class OpenLasWaybillCanDeliveryQueryRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.open.lasWaybillCanDelivery.query";
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
                                                                                                                                    private $fromDcName;

    public function setFromDcName($fromDcName)
    {
        $this->fromDcName = $fromDcName;
         $this->apiParas["fromDcName"] = $fromDcName;
    }

    public function getFromDcName()
    {
        return $this->fromDcName;
    }

                                                        private $pickUpType;

    public function setPickUpType($pickUpType)
    {
        $this->pickUpType = $pickUpType;
         $this->apiParas["pickUpType"] = $pickUpType;
    }

    public function getPickUpType()
    {
        return $this->pickUpType;
    }

                                                        private $fromAddress;

    public function setFromAddress($fromAddress)
    {
        $this->fromAddress = $fromAddress;
         $this->apiParas["fromAddress"] = $fromAddress;
    }

    public function getFromAddress()
    {
        return $this->fromAddress;
    }

                                                        private $toAddress;

    public function setToAddress($toAddress)
    {
        $this->toAddress = $toAddress;
         $this->apiParas["toAddress"] = $toAddress;
    }

    public function getToAddress()
    {
        return $this->toAddress;
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
