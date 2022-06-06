<?php

namespace ACES\Request;


class LdopJosCenterGetPickupIntimeListRequest
{
    private $apiParas = array();
    private $version;
    private $customerCode;
    private $detailAddress;

    public function getApiMethodName()
    {
        return "jingdong.ldop.jos.center.getPickupIntimeList";
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

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress = $detailAddress;
        $this->apiParas["detailAddress"] = $detailAddress;
    }
}
