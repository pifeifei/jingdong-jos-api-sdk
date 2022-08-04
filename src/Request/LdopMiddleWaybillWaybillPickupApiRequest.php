<?php

namespace ACES\Request;

class LdopMiddleWaybillWaybillPickupApiRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.middle.waybill.WaybillPickupApi';
    }

    public function check()
    {
    }

    public function getVendorCode()
    {
        return $this->apiParas['vendorCode'];
    }

    public function setVendorCode($vendorCode)
    {
        $this->apiParas['vendorCode'] = $vendorCode;

        return $this;
    }

    public function getPickupCode()
    {
        return $this->apiParas['pickupCode'];
    }

    public function setPickupCode($pickupCode)
    {
        $this->apiParas['pickupCode'] = $pickupCode;

        return $this;
    }
}
