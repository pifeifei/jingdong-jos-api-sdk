<?php

namespace ACES\Request;

class EclpRtwCancelRtwOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.rtw.cancelRtwOrder';
    }

    public function check()
    {
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

    public function getEclpRtwNum()
    {
        return $this->apiParas['eclpRtwNum'];
    }

    public function setEclpRtwNum($eclpRtwNum)
    {
        $this->apiParas['eclpRtwNum'] = $eclpRtwNum;

        return $this;
    }

    public function getCancelReson()
    {
        return $this->apiParas['cancelReson'];
    }

    public function setCancelReson($cancelReson)
    {
        $this->apiParas['cancelReson'] = $cancelReson;

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

    public function getOrderInType()
    {
        return $this->apiParas['orderInType'];
    }

    public function setOrderInType($orderInType)
    {
        $this->apiParas['orderInType'] = $orderInType;

        return $this;
    }
}
