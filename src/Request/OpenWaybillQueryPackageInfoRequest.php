<?php

namespace ACES\Request;

class OpenWaybillQueryPackageInfoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.open.waybill.query.packageInfo';
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
}
