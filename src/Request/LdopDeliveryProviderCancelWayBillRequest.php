<?php

namespace ACES\Request;

class LdopDeliveryProviderCancelWayBillRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.delivery.provider.cancelWayBill';
    }

    public function check()
    {
    }

    public function getUserPin()
    {
        return $this->apiParas['userPin'];
    }

    public function setUserPin($userPin)
    {
        $this->apiParas['userPin'] = $userPin;

        return $this;
    }

    public function getWaybillCode()
    {
        return $this->apiParas['waybillCode'];
    }

    public function setWaybillCode($waybillCode)
    {
        $this->apiParas['waybillCode'] = $waybillCode;

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

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }

    public function getCancelReason()
    {
        return $this->apiParas['cancelReason'];
    }

    public function setCancelReason($cancelReason)
    {
        $this->apiParas['cancelReason'] = $cancelReason;

        return $this;
    }

    public function getOperatorName()
    {
        return $this->apiParas['operatorName'];
    }

    public function setOperatorName($operatorName)
    {
        $this->apiParas['operatorName'] = $operatorName;

        return $this;
    }

    public function getOpenIdBuyer()
    {
        return $this->apiParas['openIdBuyer'];
    }

    public function setOpenIdBuyer($openIdBuyer)
    {
        $this->apiParas['openIdBuyer'] = $openIdBuyer;

        return $this;
    }

    public function getXidBuyer()
    {
        return $this->apiParas['xidBuyer'];
    }

    public function setXidBuyer($xidBuyer)
    {
        $this->apiParas['xidBuyer'] = $xidBuyer;

        return $this;
    }
}
