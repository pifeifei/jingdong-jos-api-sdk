<?php

namespace ACES\Request;

class LdopAlphaWaybillUnbindRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.waybill.unbind';
    }

    public function check()
    {
    }

    public function getPlatformOrderNo()
    {
        return $this->apiParas['platformOrderNo'];
    }

    public function setPlatformOrderNo($platformOrderNo)
    {
        $this->apiParas['platformOrderNo'] = $platformOrderNo;

        return $this;
    }

    public function getProviderId()
    {
        return $this->apiParas['providerId'];
    }

    public function setProviderId($providerId)
    {
        $this->apiParas['providerId'] = $providerId;

        return $this;
    }

    public function getProviderCode()
    {
        return $this->apiParas['providerCode'];
    }

    public function setProviderCode($providerCode)
    {
        $this->apiParas['providerCode'] = $providerCode;

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

    public function getOperatorTime()
    {
        return $this->apiParas['operatorTime'];
    }

    public function setOperatorTime($operatorTime)
    {
        $this->apiParas['operatorTime'] = $operatorTime;

        return $this;
    }

    public function getWaybillCodeList()
    {
        return $this->apiParas['waybillCodeList'];
    }

    public function setWaybillCodeList($waybillCodeList)
    {
        $this->apiParas['waybillCodeList'] = $waybillCodeList;

        return $this;
    }
}
