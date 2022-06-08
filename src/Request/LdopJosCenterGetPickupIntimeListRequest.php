<?php

namespace ACES\Request;

class LdopJosCenterGetPickupIntimeListRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.jos.center.getPickupIntimeList';
    }

    public function check()
    {
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

    public function getDetailAddress()
    {
        return $this->apiParas['detailAddress'];
    }

    public function setDetailAddress($detailAddress)
    {
        $this->apiParas['detailAddress'] = $detailAddress;

        return $this;
    }
}
