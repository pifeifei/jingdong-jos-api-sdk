<?php

class EclpCoChangeLasWayBillPackageInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.changeLasWayBillPackageInfo";
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
                                                                                                                                    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

                                                                                                                                                                                                                                                                                                                                                                                                                           private $weight;
    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
                                                                                                                                                                                                                                                                                                                                              private $length;
    public function setLength($length)
    {
        $this->length = $length;
        $this->apiParas["length"] = $length;
    }

    public function getLength()
    {
        return $this->length;
    }
                                                                                                                                                                                                                                                                                                                                              private $width;
    public function setWidth($width)
    {
        $this->width = $width;
        $this->apiParas["width"] = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
                                                                                                                                                                                                                                                                                                                                              private $height;
    public function setHeight($height)
    {
        $this->height = $height;
        $this->apiParas["height"] = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }
                                                                                                                                                                                                                                                                                                                                              private $installFlag;
    public function setInstallFlag($installFlag)
    {
        $this->installFlag = $installFlag;
        $this->apiParas["installFlag"] = $installFlag;
    }

    public function getInstallFlag()
    {
        return $this->installFlag;
    }
                                                                                                                                                                                                                                                                                                                                              private $thirdCategoryNo;
    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->thirdCategoryNo = $thirdCategoryNo;
        $this->apiParas["thirdCategoryNo"] = $thirdCategoryNo;
    }

    public function getThirdCategoryNo()
    {
        return $this->thirdCategoryNo;
    }
                                                                                                                                                                                                                                                                                                                                              private $brandNo;
    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
        $this->apiParas["brandNo"] = $brandNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }
                                                                                                                                                                                                                                                                                                                                              private $productSku;
    public function setProductSku($productSku)
    {
        $this->productSku = $productSku;
        $this->apiParas["productSku"] = $productSku;
    }

    public function getProductSku()
    {
        return $this->productSku;
    }
                                                                                                                                                                                                                                                                                                                                              private $packageName;
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
        $this->apiParas["packageName"] = $packageName;
    }

    public function getPackageName()
    {
        return $this->packageName;
    }
                                                                                                                                                                                                                                                                                                                                              private $reverseLwb;
    public function setReverseLwb($reverseLwb)
    {
        $this->reverseLwb = $reverseLwb;
        $this->apiParas["reverseLwb"] = $reverseLwb;
    }

    public function getReverseLwb()
    {
        return $this->reverseLwb;
    }
                                                                                                                                                                                                                                                                                                                                              private $getOldService;
    public function setGetOldService($getOldService)
    {
        $this->getOldService = $getOldService;
        $this->apiParas["getOldService"] = $getOldService;
    }

    public function getGetOldService()
    {
        return $this->getOldService;
    }
                                                                                                                                                                                                                                                                                                                                              private $openBoxService;
    public function setOpenBoxService($openBoxService)
    {
        $this->openBoxService = $openBoxService;
        $this->apiParas["openBoxService"] = $openBoxService;
    }

    public function getOpenBoxService()
    {
        return $this->openBoxService;
    }
                                                                                                                                                                                                                                                                                                                                              private $deliveryInstallService;
    public function setDeliveryInstallService($deliveryInstallService)
    {
        $this->deliveryInstallService = $deliveryInstallService;
        $this->apiParas["deliveryInstallService"] = $deliveryInstallService;
    }

    public function getDeliveryInstallService()
    {
        return $this->deliveryInstallService;
    }
                                                                                                                                                                                                                                                                                                                                              private $packageIdentityCode;
    public function setPackageIdentityCode($packageIdentityCode)
    {
        $this->packageIdentityCode = $packageIdentityCode;
        $this->apiParas["packageIdentityCode"] = $packageIdentityCode;
    }

    public function getPackageIdentityCode()
    {
        return $this->packageIdentityCode;
    }
}
