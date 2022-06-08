<?php

namespace ACES\Request;

class LdopOmsWaybillQueryBaseSiteInfoBySubscriptionDeliveryRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.oms.waybill.queryBaseSiteInfoBySubscriptionDelivery';
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

    public function getCarrierCode()
    {
        return $this->apiParas['carrierCode'];
    }

    public function setCarrierCode($carrierCode)
    {
        $this->apiParas['carrierCode'] = $carrierCode;

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
}
