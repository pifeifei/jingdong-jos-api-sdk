<?php

namespace ACES\Request;


class LdopPickupCancelRequest
{
    private $apiParas = array();
    private $version;
    private $endReasonName;
    private $endReason;
    private $pickupCode;
    private $source;
    private $customerCode;

    public function getApiMethodName()
    {
        return "jingdong.ldop.pickup.cancel";
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

    public function getEndReasonName()
    {
        return $this->endReasonName;
    }

    public function setEndReasonName($endReasonName)
    {
        $this->endReasonName = $endReasonName;
        $this->apiParas["endReasonName"] = $endReasonName;
    }

    public function getEndReason()
    {
        return $this->endReason;
    }

    public function setEndReason($endReason)
    {
        $this->endReason = $endReason;
        $this->apiParas["endReason"] = $endReason;
    }

    public function getPickupCode()
    {
        return $this->pickupCode;
    }

    public function setPickupCode($pickupCode)
    {
        $this->pickupCode = $pickupCode;
        $this->apiParas["pickupCode"] = $pickupCode;
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

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }
}
