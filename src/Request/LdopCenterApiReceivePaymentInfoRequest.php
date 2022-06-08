<?php

namespace ACES\Request;

class LdopCenterApiReceivePaymentInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.center.api.receivePaymentInfo';
    }

    public function check()
    {
    }

    public function getDeliveryId()
    {
        return $this->apiParas['deliveryId'];
    }

    public function setDeliveryId($deliveryId)
    {
        $this->apiParas['deliveryId'] = $deliveryId;

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

    public function getRecMoney()
    {
        return $this->apiParas['recMoney'];
    }

    public function setRecMoney($recMoney)
    {
        $this->apiParas['recMoney'] = $recMoney;

        return $this;
    }

    public function getReceivedMoney()
    {
        return $this->apiParas['receivedMoney'];
    }

    public function setReceivedMoney($receivedMoney)
    {
        $this->apiParas['receivedMoney'] = $receivedMoney;

        return $this;
    }

    public function getPaymentState()
    {
        return $this->apiParas['paymentState'];
    }

    public function setPaymentState($paymentState)
    {
        $this->apiParas['paymentState'] = $paymentState;

        return $this;
    }

    public function getPaymentTime()
    {
        return $this->apiParas['paymentTime'];
    }

    public function setPaymentTime($paymentTime)
    {
        $this->apiParas['paymentTime'] = $paymentTime;

        return $this;
    }

    public function getPayer()
    {
        return $this->apiParas['payer'];
    }

    public function setPayer($payer)
    {
        $this->apiParas['payer'] = $payer;

        return $this;
    }
}
