<?php

class EclpRtwUpdateRtwOrderRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
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

                                                        private $ownerNo;

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

                                                        private $packageNo;

    public function setPackageNo($packageNo)
    {
        $this->packageNo = $packageNo;
         $this->apiParas["packageNo"] = $packageNo;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }

                                                        private $shipperName;

    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
         $this->apiParas["shipperName"] = $shipperName;
    }

    public function getShipperName()
    {
        return $this->shipperName;
    }

                                                        private $senderName;

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
         $this->apiParas["senderName"] = $senderName;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

                                                        private $senderTelPhone;

    public function setSenderTelPhone($senderTelPhone)
    {
        $this->senderTelPhone = $senderTelPhone;
         $this->apiParas["senderTelPhone"] = $senderTelPhone;
    }

    public function getSenderTelPhone()
    {
        return $this->senderTelPhone;
    }

                                                        private $senderMobilePhone;

    public function setSenderMobilePhone($senderMobilePhone)
    {
        $this->senderMobilePhone = $senderMobilePhone;
         $this->apiParas["senderMobilePhone"] = $senderMobilePhone;
    }

    public function getSenderMobilePhone()
    {
        return $this->senderMobilePhone;
    }
}
