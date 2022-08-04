<?php

namespace ACES\Request;

class EtmsPackageUpdateRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.etms.package.update';
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

    public function getDeliveryId()
    {
        return $this->apiParas['deliveryId'];
    }

    public function setDeliveryId($deliveryId)
    {
        $this->apiParas['deliveryId'] = $deliveryId;

        return $this;
    }

    public function getPackageCount()
    {
        return $this->apiParas['packageCount'];
    }

    public function setPackageCount($packageCount)
    {
        $this->apiParas['packageCount'] = $packageCount;

        return $this;
    }

    public function getBoxCodeList()
    {
        return $this->apiParas['boxCodeList'];
    }

    public function setBoxCodeList($boxCodeList)
    {
        $this->apiParas['boxCodeList'] = $boxCodeList;

        return $this;
    }
}
