<?php

class EtmsPackageUpdateRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.etms.package.update";
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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $customerCode;

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

                                                        private $deliveryId;

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

                                                        private $packageCount;

    public function setPackageCount($packageCount)
    {
        $this->packageCount = $packageCount;
         $this->apiParas["packageCount"] = $packageCount;
    }

    public function getPackageCount()
    {
        return $this->packageCount;
    }

                                                                            private $boxCodeList;

    public function setBoxCodeList($boxCodeList)
    {
        $this->boxCodeList = $boxCodeList;
         $this->apiParas["boxCodeList"] = $boxCodeList;
    }

    public function getBoxCodeList()
    {
        return $this->boxCodeList;
    }
}
