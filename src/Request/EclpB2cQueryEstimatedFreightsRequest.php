<?php

namespace ACES\Request;


class EclpB2cQueryEstimatedFreightsRequest
{
    private $apiParas = array();
    private $version;
    private $senderProvinceName;
    private $senderCityName;
    private $senderCountryName;
    private $senderCountrysideName;
    private $senderAddress;
    private $receiverProvinceName;
    private $receiverCityName;
    private $receiverCountryName;
    private $receiverCountrysideName;
    private $receiverAddress;
    private $weight;
    private $businessType;
    private $orderTime;

    public function getApiMethodName()
    {
        return "jingdong.eclp.b2c.queryEstimatedFreights";
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

    public function getSenderCountryName()
    {
        return $this->senderCountryName;
    }

    public function setSenderCountryName($senderCountryName)
    {
        $this->senderCountryName = $senderCountryName;
        $this->apiParas["senderCountryName"] = $senderCountryName;
    }

    public function getSenderCountrysideName()
    {
        return $this->senderCountrysideName;
    }

    public function setSenderCountrysideName($senderCountrysideName)
    {
        $this->senderCountrysideName = $senderCountrysideName;
        $this->apiParas["senderCountrysideName"] = $senderCountrysideName;
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

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName = $receiverProvinceName;
        $this->apiParas["receiverProvinceName"] = $receiverProvinceName;
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

    public function getReceiverCountryName()
    {
        return $this->receiverCountryName;
    }

    public function setReceiverCountryName($receiverCountryName)
    {
        $this->receiverCountryName = $receiverCountryName;
        $this->apiParas["receiverCountryName"] = $receiverCountryName;
    }

    public function getReceiverCountrysideName()
    {
        return $this->receiverCountrysideName;
    }

    public function setReceiverCountrysideName($receiverCountrysideName)
    {
        $this->receiverCountrysideName = $receiverCountrysideName;
        $this->apiParas["receiverCountrysideName"] = $receiverCountrysideName;
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

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
        $this->apiParas["businessType"] = $businessType;
    }

    public function getOrderTime()
    {
        return $this->orderTime;
    }

    public function setOrderTime($orderTime)
    {
        $this->orderTime = $orderTime;
        $this->apiParas["orderTime"] = $orderTime;
    }
}
