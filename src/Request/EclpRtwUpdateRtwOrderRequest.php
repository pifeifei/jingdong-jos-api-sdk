<?php

namespace ACES\Request;

class EclpRtwUpdateRtwOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.rtw.updateRtwOrder';
    }

    public function check()
    {
    }

    public function getEclpRtwNo()
    {
        return $this->apiParas['eclpRtwNo'];
    }

    public function setEclpRtwNo($eclpRtwNo)
    {
        $this->apiParas['eclpRtwNo'] = $eclpRtwNo;

        return $this;
    }

    public function getIsvRtwNum()
    {
        return $this->apiParas['isvRtwNum'];
    }

    public function setIsvRtwNum($isvRtwNum)
    {
        $this->apiParas['isvRtwNum'] = $isvRtwNum;

        return $this;
    }

    public function getOwnerNo()
    {
        return $this->apiParas['ownerNo'];
    }

    public function setOwnerNo($ownerNo)
    {
        $this->apiParas['ownerNo'] = $ownerNo;

        return $this;
    }

    public function getPackageNo()
    {
        return $this->apiParas['packageNo'];
    }

    public function setPackageNo($packageNo)
    {
        $this->apiParas['packageNo'] = $packageNo;

        return $this;
    }

    public function getShipperName()
    {
        return $this->apiParas['shipperName'];
    }

    public function setShipperName($shipperName)
    {
        $this->apiParas['shipperName'] = $shipperName;

        return $this;
    }

    public function getSenderName()
    {
        return $this->apiParas['senderName'];
    }

    public function setSenderName($senderName)
    {
        $this->apiParas['senderName'] = $senderName;

        return $this;
    }

    public function getSenderTelPhone()
    {
        return $this->apiParas['senderTelPhone'];
    }

    public function setSenderTelPhone($senderTelPhone)
    {
        $this->apiParas['senderTelPhone'] = $senderTelPhone;

        return $this;
    }

    public function getSenderMobilePhone()
    {
        return $this->apiParas['senderMobilePhone'];
    }

    public function setSenderMobilePhone($senderMobilePhone)
    {
        $this->apiParas['senderMobilePhone'] = $senderMobilePhone;

        return $this;
    }
}
