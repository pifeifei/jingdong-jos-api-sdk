<?php

namespace ACES\Request;

class LdopMiddleWaybillWaybillTrackAndTimePositionApiRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.middle.waybill.WaybillTrackAndTimePositionApi';
    }

    public function check()
    {
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

    public function getGpsTime()
    {
        return $this->apiParas['gpsTime'];
    }

    public function setGpsTime($gpsTime)
    {
        $this->apiParas['gpsTime'] = $gpsTime;

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
}
