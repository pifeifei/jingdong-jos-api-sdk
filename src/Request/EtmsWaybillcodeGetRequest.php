<?php

namespace ACES\Request;

class EtmsWaybillcodeGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.etms.waybillcode.get';
    }

    public function check()
    {
    }

    public function getPreNum()
    {
        return $this->apiParas['preNum'];
    }

    public function setPreNum($preNum)
    {
        $this->apiParas['preNum'] = $preNum;

        return $this;
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

        return $this;
    }
}
