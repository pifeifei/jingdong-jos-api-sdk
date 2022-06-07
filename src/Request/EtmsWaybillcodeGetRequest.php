<?php

namespace ACES\Request;


class EtmsWaybillcodeGetRequest
{
    private $apiParas = array();
    private $version;
    private $preNum;
    private $customerCode;
    private $orderType;

    public function getApiMethodName()
    {
        return "jingdong.etms.waybillcode.get";
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

    public function getPreNum()
    {
        return $this->preNum;
    }

    public function setPreNum($preNum)
    {
        $this->preNum = $preNum;
        $this->apiParas["preNum"] = $preNum;
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

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
    }
}
