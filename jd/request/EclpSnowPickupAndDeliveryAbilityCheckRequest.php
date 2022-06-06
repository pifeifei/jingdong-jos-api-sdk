<?php

class EclpSnowPickupAndDeliveryAbilityCheckRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.snow.pickupAndDeliveryAbilityCheck";
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
                                                                                                                                                                private $senderAddress;

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

                                                        private $senderProvinceName;

    public function setSenderProvinceName($senderProvinceName)
    {
        $this->senderProvinceName = $senderProvinceName;
         $this->apiParas["senderProvinceName"] = $senderProvinceName;
    }

    public function getSenderProvinceName()
    {
        return $this->senderProvinceName;
    }

                                                        private $senderCityName;

    public function setSenderCityName($senderCityName)
    {
        $this->senderCityName = $senderCityName;
         $this->apiParas["senderCityName"] = $senderCityName;
    }

    public function getSenderCityName()
    {
        return $this->senderCityName;
    }

                                                        private $deliveryType;

    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
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

                                                        private $receiverAddress;

    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

                                                        private $grossWeight;

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
         $this->apiParas["grossWeight"] = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

                                                        private $senderCountyName;

    public function setSenderCountyName($senderCountyName)
    {
        $this->senderCountyName = $senderCountyName;
         $this->apiParas["senderCountyName"] = $senderCountyName;
    }

    public function getSenderCountyName()
    {
        return $this->senderCountyName;
    }

                                                        private $receiverCityName;

    public function setReceiverCityName($receiverCityName)
    {
        $this->receiverCityName = $receiverCityName;
         $this->apiParas["receiverCityName"] = $receiverCityName;
    }

    public function getReceiverCityName()
    {
        return $this->receiverCityName;
    }

                                                        private $grossVolume;

    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume = $grossVolume;
         $this->apiParas["grossVolume"] = $grossVolume;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

                                                        private $senderTownName;

    public function setSenderTownName($senderTownName)
    {
        $this->senderTownName = $senderTownName;
         $this->apiParas["senderTownName"] = $senderTownName;
    }

    public function getSenderTownName()
    {
        return $this->senderTownName;
    }

                                                        private $receiverTownName;

    public function setReceiverTownName($receiverTownName)
    {
        $this->receiverTownName = $receiverTownName;
         $this->apiParas["receiverTownName"] = $receiverTownName;
    }

    public function getReceiverTownName()
    {
        return $this->receiverTownName;
    }

                                                        private $receiverProvinceName;

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName = $receiverProvinceName;
         $this->apiParas["receiverProvinceName"] = $receiverProvinceName;
    }

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

                                                        private $receiverCountyName;

    public function setReceiverCountyName($receiverCountyName)
    {
        $this->receiverCountyName = $receiverCountyName;
         $this->apiParas["receiverCountyName"] = $receiverCountyName;
    }

    public function getReceiverCountyName()
    {
        return $this->receiverCountyName;
    }

                                                        private $packageNum;

    public function setPackageNum($packageNum)
    {
        $this->packageNum = $packageNum;
         $this->apiParas["packageNum"] = $packageNum;
    }

    public function getPackageNum()
    {
        return $this->packageNum;
    }
}
