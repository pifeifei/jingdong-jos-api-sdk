<?php

namespace ACES\Request;

class EclpB2cQueryEstimatedFreightsRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.b2c.queryEstimatedFreights';
    }

    public function check()
    {
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

    public function getSenderCountryName()
    {
        return $this->apiParas['senderCountryName'];
    }

    public function setSenderCountryName($senderCountryName)
    {
        $this->apiParas['senderCountryName'] = $senderCountryName;

        return $this;
    }

    public function getSenderCountrysideName()
    {
        return $this->apiParas['senderCountrysideName'];
    }

    public function setSenderCountrysideName($senderCountrysideName)
    {
        $this->apiParas['senderCountrysideName'] = $senderCountrysideName;

        return $this;
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

    public function getReceiverProvinceName()
    {
        return $this->apiParas['receiverProvinceName'];
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->apiParas['receiverProvinceName'] = $receiverProvinceName;

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

    public function getReceiverCountryName()
    {
        return $this->apiParas['receiverCountryName'];
    }

    public function setReceiverCountryName($receiverCountryName)
    {
        $this->apiParas['receiverCountryName'] = $receiverCountryName;

        return $this;
    }

    public function getReceiverCountrysideName()
    {
        return $this->apiParas['receiverCountrysideName'];
    }

    public function setReceiverCountrysideName($receiverCountrysideName)
    {
        $this->apiParas['receiverCountrysideName'] = $receiverCountrysideName;

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

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getBusinessType()
    {
        return $this->apiParas['businessType'];
    }

    public function setBusinessType($businessType)
    {
        $this->apiParas['businessType'] = $businessType;

        return $this;
    }

    public function getOrderTime()
    {
        return $this->apiParas['orderTime'];
    }

    public function setOrderTime($orderTime)
    {
        $this->apiParas['orderTime'] = $orderTime;

        return $this;
    }
}
