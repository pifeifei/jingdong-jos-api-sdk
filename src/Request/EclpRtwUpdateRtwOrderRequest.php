<?php

namespace ACES\Request;


class EclpRtwUpdateRtwOrderRequest
{
    private $apiParas = array();
    private $version;
    private $eclpRtwNo;
    private $isvRtwNum;
    private $ownerNo;
    private $packageNo;
    private $shipperName;
    private $senderName;
    private $senderTelPhone;
    private $senderMobilePhone;

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.updateRtwOrder";
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

    public function getEclpRtwNo()
    {
        return $this->eclpRtwNo;
    }

    public function setEclpRtwNo($eclpRtwNo)
    {
        $this->eclpRtwNo = $eclpRtwNo;
        $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
    }

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
    }

    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum = $isvRtwNum;
        $this->apiParas["isvRtwNum"] = $isvRtwNum;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
        $this->apiParas["ownerNo"] = $ownerNo;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }

    public function setPackageNo($packageNo)
    {
        $this->packageNo = $packageNo;
        $this->apiParas["packageNo"] = $packageNo;
    }

    public function getShipperName()
    {
        return $this->shipperName;
    }

    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
        $this->apiParas["shipperName"] = $shipperName;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
        $this->apiParas["senderName"] = $senderName;
    }

    public function getSenderTelPhone()
    {
        return $this->senderTelPhone;
    }

    public function setSenderTelPhone($senderTelPhone)
    {
        $this->senderTelPhone = $senderTelPhone;
        $this->apiParas["senderTelPhone"] = $senderTelPhone;
    }

    public function getSenderMobilePhone()
    {
        return $this->senderMobilePhone;
    }

    public function setSenderMobilePhone($senderMobilePhone)
    {
        $this->senderMobilePhone = $senderMobilePhone;
        $this->apiParas["senderMobilePhone"] = $senderMobilePhone;
    }
}
