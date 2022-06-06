<?php

namespace ACES\Request;


class LdopCenterApiReceivePaymentInfoRequest
{
    private $apiParas = array();
    private $version;
    private $deliveryId;
    private $customerCode;
    private $recMoney;
    private $receivedMoney;
    private $paymentState;
    private $paymentTime;
    private $payer;

    public function getApiMethodName()
    {
        return "jingdong.ldop.center.api.receivePaymentInfo";
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

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
        $this->apiParas["deliveryId"] = $deliveryId;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }

    public function getRecMoney()
    {
        return $this->recMoney;
    }

    public function setRecMoney($recMoney)
    {
        $this->recMoney = $recMoney;
        $this->apiParas["recMoney"] = $recMoney;
    }

    public function getReceivedMoney()
    {
        return $this->receivedMoney;
    }

    public function setReceivedMoney($receivedMoney)
    {
        $this->receivedMoney = $receivedMoney;
        $this->apiParas["receivedMoney"] = $receivedMoney;
    }

    public function getPaymentState()
    {
        return $this->paymentState;
    }

    public function setPaymentState($paymentState)
    {
        $this->paymentState = $paymentState;
        $this->apiParas["paymentState"] = $paymentState;
    }

    public function getPaymentTime()
    {
        return $this->paymentTime;
    }

    public function setPaymentTime($paymentTime)
    {
        $this->paymentTime = $paymentTime;
        $this->apiParas["paymentTime"] = $paymentTime;
    }

    public function getPayer()
    {
        return $this->payer;
    }

    public function setPayer($payer)
    {
        $this->payer = $payer;
        $this->apiParas["payer"] = $payer;
    }
}
