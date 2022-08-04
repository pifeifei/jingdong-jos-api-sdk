<?php

namespace ACES\Request;

class EclpSnowPickupAndDeliveryAbilityCheckRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.snow.pickupAndDeliveryAbilityCheck';
    }

    public function check()
    {
    }

    public function getSenderAddress()
    {
        return $this->apiParas['senderAddress'];
    }

    public function setSenderAddress($senderAddress)
    {
        $this->apiParas['senderAddress'] = $senderAddress;

        return $this;
    }

    public function getSenderProvinceName()
    {
        return $this->apiParas['senderProvinceName'];
    }

    public function setSenderProvinceName($senderProvinceName)
    {
        $this->apiParas['senderProvinceName'] = $senderProvinceName;

        return $this;
    }

    public function getSenderCityName()
    {
        return $this->apiParas['senderCityName'];
    }

    public function setSenderCityName($senderCityName)
    {
        $this->apiParas['senderCityName'] = $senderCityName;

        return $this;
    }

    public function getDeliveryType()
    {
        return $this->apiParas['deliveryType'];
    }

    public function setDeliveryType($deliveryType)
    {
        $this->apiParas['deliveryType'] = $deliveryType;

        return $this;
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getReceiverAddress()
    {
        return $this->apiParas['receiverAddress'];
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->apiParas['receiverAddress'] = $receiverAddress;

        return $this;
    }

    public function getGrossWeight()
    {
        return $this->apiParas['grossWeight'];
    }

    public function setGrossWeight($grossWeight)
    {
        $this->apiParas['grossWeight'] = $grossWeight;

        return $this;
    }

    public function getSenderCountyName()
    {
        return $this->apiParas['senderCountyName'];
    }

    public function setSenderCountyName($senderCountyName)
    {
        $this->apiParas['senderCountyName'] = $senderCountyName;

        return $this;
    }

    public function getReceiverCityName()
    {
        return $this->apiParas['receiverCityName'];
    }

    public function setReceiverCityName($receiverCityName)
    {
        $this->apiParas['receiverCityName'] = $receiverCityName;

        return $this;
    }

    public function getGrossVolume()
    {
        return $this->apiParas['grossVolume'];
    }

    public function setGrossVolume($grossVolume)
    {
        $this->apiParas['grossVolume'] = $grossVolume;

        return $this;
    }

    public function getSenderTownName()
    {
        return $this->apiParas['senderTownName'];
    }

    public function setSenderTownName($senderTownName)
    {
        $this->apiParas['senderTownName'] = $senderTownName;

        return $this;
    }

    public function getReceiverTownName()
    {
        return $this->apiParas['receiverTownName'];
    }

    public function setReceiverTownName($receiverTownName)
    {
        $this->apiParas['receiverTownName'] = $receiverTownName;

        return $this;
    }

    public function getReceiverProvinceName()
    {
        return $this->apiParas['receiverProvinceName'];
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->apiParas['receiverProvinceName'] = $receiverProvinceName;

        return $this;
    }

    public function getReceiverCountyName()
    {
        return $this->apiParas['receiverCountyName'];
    }

    public function setReceiverCountyName($receiverCountyName)
    {
        $this->apiParas['receiverCountyName'] = $receiverCountyName;

        return $this;
    }

    public function getPackageNum()
    {
        return $this->apiParas['packageNum'];
    }

    public function setPackageNum($packageNum)
    {
        $this->apiParas['packageNum'] = $packageNum;

        return $this;
    }
}
