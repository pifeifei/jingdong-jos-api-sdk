<?php

namespace ACES\Request;


class EclpCoChangeLasWayBillPackageInfoRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $orderNo;
    private $weight;
    private $length;
    private $width;
    private $height;
    private $installFlag;
    private $thirdCategoryNo;
    private $brandNo;
    private $productSku;
    private $packageName;
    private $reverseLwb;
    private $getOldService;
    private $openBoxService;
    private $deliveryInstallService;
    private $packageIdentityCode;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        $this->apiParas["length"] = $length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $this->apiParas["width"] = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        $this->apiParas["height"] = $height;
    }

    public function getInstallFlag()
    {
        return $this->installFlag;
    }

    public function setInstallFlag($installFlag)
    {
        $this->installFlag = $installFlag;
        $this->apiParas["installFlag"] = $installFlag;
    }

    public function getThirdCategoryNo()
    {
        return $this->thirdCategoryNo;
    }

    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->thirdCategoryNo = $thirdCategoryNo;
        $this->apiParas["thirdCategoryNo"] = $thirdCategoryNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
        $this->apiParas["brandNo"] = $brandNo;
    }

    public function getProductSku()
    {
        return $this->productSku;
    }

    public function setProductSku($productSku)
    {
        $this->productSku = $productSku;
        $this->apiParas["productSku"] = $productSku;
    }

    public function getPackageName()
    {
        return $this->packageName;
    }

    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
        $this->apiParas["packageName"] = $packageName;
    }

    public function getReverseLwb()
    {
        return $this->reverseLwb;
    }

    public function setReverseLwb($reverseLwb)
    {
        $this->reverseLwb = $reverseLwb;
        $this->apiParas["reverseLwb"] = $reverseLwb;
    }

    public function getGetOldService()
    {
        return $this->getOldService;
    }

    public function setGetOldService($getOldService)
    {
        $this->getOldService = $getOldService;
        $this->apiParas["getOldService"] = $getOldService;
    }

    public function getOpenBoxService()
    {
        return $this->openBoxService;
    }

    public function setOpenBoxService($openBoxService)
    {
        $this->openBoxService = $openBoxService;
        $this->apiParas["openBoxService"] = $openBoxService;
    }

    public function getDeliveryInstallService()
    {
        return $this->deliveryInstallService;
    }

    public function setDeliveryInstallService($deliveryInstallService)
    {
        $this->deliveryInstallService = $deliveryInstallService;
        $this->apiParas["deliveryInstallService"] = $deliveryInstallService;
    }

    public function getPackageIdentityCode()
    {
        return $this->packageIdentityCode;
    }

    public function setPackageIdentityCode($packageIdentityCode)
    {
        $this->packageIdentityCode = $packageIdentityCode;
        $this->apiParas["packageIdentityCode"] = $packageIdentityCode;
    }
}
