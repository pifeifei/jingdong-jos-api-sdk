<?php

namespace ACES\Request;


class LdopDeliveryProviderCancelWayBillRequest
{
    private $apiParas = array();
    private $version;
    private $userPin;
    private $waybillCode;
    private $customerCode;
    private $source;
    private $cancelReason;
    private $operatorName;
    private $openIdBuyer;
    private $xidBuyer;

    public function getApiMethodName()
    {
        return "jingdong.ldop.delivery.provider.cancelWayBill";
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

    public function getUserPin()
    {
        return $this->userPin;
    }

    public function setUserPin($userPin)
    {
        $this->userPin = $userPin;
        $this->apiParas["userPin"] = $userPin;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
        $this->apiParas["waybillCode"] = $waybillCode;
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

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
        $this->apiParas["source"] = $source;
    }

    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    public function setCancelReason($cancelReason)
    {
        $this->cancelReason = $cancelReason;
        $this->apiParas["cancelReason"] = $cancelReason;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;
        $this->apiParas["operatorName"] = $operatorName;
    }

    public function getOpenIdBuyer()
    {
        return $this->openIdBuyer;
    }

    public function setOpenIdBuyer($openIdBuyer)
    {
        $this->openIdBuyer = $openIdBuyer;
        $this->apiParas["open_id_buyer"] = $openIdBuyer;
    }

    public function getXidBuyer()
    {
        return $this->xidBuyer;
    }

    public function setXidBuyer($xidBuyer)
    {
        $this->xidBuyer = $xidBuyer;
        $this->apiParas["xid_buyer"] = $xidBuyer;
    }
}
