<?php

namespace ACES\Request;


class EclpRtwCancelRtwOrderRequest
{
    private $apiParas = array();
    private $version;
    private $isvRtwNum;
    private $eclpRtwNum;
    private $cancelReson;
    private $ownerNo;
    private $orderInType;

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.cancelRtwOrder";
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

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
    }

    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum = $isvRtwNum;
        $this->apiParas["isvRtwNum"] = $isvRtwNum;
    }

    public function getEclpRtwNum()
    {
        return $this->eclpRtwNum;
    }

    public function setEclpRtwNum($eclpRtwNum)
    {
        $this->eclpRtwNum = $eclpRtwNum;
        $this->apiParas["eclpRtwNum"] = $eclpRtwNum;
    }

    public function getCancelReson()
    {
        return $this->cancelReson;
    }

    public function setCancelReson($cancelReson)
    {
        $this->cancelReson = $cancelReson;
        $this->apiParas["cancelReson"] = $cancelReson;
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

    public function getOrderInType()
    {
        return $this->orderInType;
    }

    public function setOrderInType($orderInType)
    {
        $this->orderInType = $orderInType;
        $this->apiParas["orderInType"] = $orderInType;
    }
}
