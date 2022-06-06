<?php

namespace ACES\Request;


class EclpSnowPickupAndDeliveryAbilityCheckRequest
{
    private $apiParas = array();
    private $version;
    private $senderAddress;
    private $senderProvinceName;
    private $senderCityName;
    private $deliveryType;
    private $deptNo;
    private $receiverAddress;
    private $grossWeight;
    private $senderCountyName;
    private $receiverCityName;
    private $grossVolume;
    private $senderTownName;
    private $receiverTownName;
    private $receiverProvinceName;
    private $receiverCountyName;
    private $packageNum;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
        $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getSenderProvinceName()
    {
        return $this->senderProvinceName;
    }

    public function setSenderProvinceName($senderProvinceName)
    {
        $this->senderProvinceName = $senderProvinceName;
        $this->apiParas["senderProvinceName"] = $senderProvinceName;
    }

    public function getSenderCityName()
    {
        return $this->senderCityName;
    }

    public function setSenderCityName($senderCityName)
    {
        $this->senderCityName = $senderCityName;
        $this->apiParas["senderCityName"] = $senderCityName;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
        $this->apiParas["deliveryType"] = $deliveryType;
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

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
        $this->apiParas["receiverAddress"] = $receiverAddress;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
        $this->apiParas["grossWeight"] = $grossWeight;
    }

    public function getSenderCountyName()
    {
        return $this->senderCountyName;
    }

    public function setSenderCountyName($senderCountyName)
    {
        $this->senderCountyName = $senderCountyName;
        $this->apiParas["senderCountyName"] = $senderCountyName;
    }

    public function getReceiverCityName()
    {
        return $this->receiverCityName;
    }

    public function setReceiverCityName($receiverCityName)
    {
        $this->receiverCityName = $receiverCityName;
        $this->apiParas["receiverCityName"] = $receiverCityName;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume = $grossVolume;
        $this->apiParas["grossVolume"] = $grossVolume;
    }

    public function getSenderTownName()
    {
        return $this->senderTownName;
    }

    public function setSenderTownName($senderTownName)
    {
        $this->senderTownName = $senderTownName;
        $this->apiParas["senderTownName"] = $senderTownName;
    }

    public function getReceiverTownName()
    {
        return $this->receiverTownName;
    }

    public function setReceiverTownName($receiverTownName)
    {
        $this->receiverTownName = $receiverTownName;
        $this->apiParas["receiverTownName"] = $receiverTownName;
    }

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName = $receiverProvinceName;
        $this->apiParas["receiverProvinceName"] = $receiverProvinceName;
    }

    public function getReceiverCountyName()
    {
        return $this->receiverCountyName;
    }

    public function setReceiverCountyName($receiverCountyName)
    {
        $this->receiverCountyName = $receiverCountyName;
        $this->apiParas["receiverCountyName"] = $receiverCountyName;
    }

    public function getPackageNum()
    {
        return $this->packageNum;
    }

    public function setPackageNum($packageNum)
    {
        $this->packageNum = $packageNum;
        $this->apiParas["packageNum"] = $packageNum;
    }
}
