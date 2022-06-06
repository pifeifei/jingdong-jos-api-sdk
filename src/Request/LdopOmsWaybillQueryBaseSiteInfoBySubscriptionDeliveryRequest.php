<?php

namespace ACES\Request;


class LdopOmsWaybillQueryBaseSiteInfoBySubscriptionDeliveryRequest
{
    private $apiParas = array();
    private $version;
    private $deliveryId;
    private $carrierCode;
    private $source;

    public function getApiMethodName()
    {
        return "jingdong.ldop.oms.waybill.queryBaseSiteInfoBySubscriptionDelivery";
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

    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
        $this->apiParas["carrierCode"] = $carrierCode;
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
}
