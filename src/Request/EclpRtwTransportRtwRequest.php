<?php

namespace ACES\Request;

class EclpRtwTransportRtwRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.rtw.transportRtw';
    }

    public function check()
    {
    }

    public function getEclpSoNo()
    {
        return $this->apiParas['eclpSoNo'];
    }

    public function setEclpSoNo($eclpSoNo)
    {
        $this->apiParas['eclpSoNo'] = $eclpSoNo;

        return $this;
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

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getReson()
    {
        return $this->apiParas['reson'];
    }

    public function setReson($reson)
    {
        $this->apiParas['reson'] = $reson;

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

    public function getCustomField()
    {
        return $this->apiParas['customField'];
    }

    public function setCustomField($customField)
    {
        $this->apiParas['customField'] = $customField;

        return $this;
    }
}
