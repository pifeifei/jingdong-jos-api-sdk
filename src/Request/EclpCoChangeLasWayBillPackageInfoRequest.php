<?php

namespace ACES\Request;

class EclpCoChangeLasWayBillPackageInfoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.changeLasWayBillPackageInfo';
    }

    public function check()
    {
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getLength()
    {
        return $this->apiParas['length'];
    }

    public function setLength($length)
    {
        $this->apiParas['length'] = $length;

        return $this;
    }

    public function getWidth()
    {
        return $this->apiParas['width'];
    }

    public function setWidth($width)
    {
        $this->apiParas['width'] = $width;

        return $this;
    }

    public function getHeight()
    {
        return $this->apiParas['height'];
    }

    public function setHeight($height)
    {
        $this->apiParas['height'] = $height;

        return $this;
    }

    public function getInstallFlag()
    {
        return $this->apiParas['installFlag'];
    }

    public function setInstallFlag($installFlag)
    {
        $this->apiParas['installFlag'] = $installFlag;

        return $this;
    }

    public function getThirdCategoryNo()
    {
        return $this->apiParas['thirdCategoryNo'];
    }

    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->apiParas['thirdCategoryNo'] = $thirdCategoryNo;

        return $this;
    }

    public function getBrandNo()
    {
        return $this->apiParas['brandNo'];
    }

    public function setBrandNo($brandNo)
    {
        $this->apiParas['brandNo'] = $brandNo;

        return $this;
    }

    public function getProductSku()
    {
        return $this->apiParas['productSku'];
    }

    public function setProductSku($productSku)
    {
        $this->apiParas['productSku'] = $productSku;

        return $this;
    }

    public function getPackageName()
    {
        return $this->apiParas['packageName'];
    }

    public function setPackageName($packageName)
    {
        $this->apiParas['packageName'] = $packageName;

        return $this;
    }

    public function getReverseLwb()
    {
        return $this->apiParas['reverseLwb'];
    }

    public function setReverseLwb($reverseLwb)
    {
        $this->apiParas['reverseLwb'] = $reverseLwb;

        return $this;
    }

    public function getGetOldService()
    {
        return $this->apiParas['getOldService'];
    }

    public function setGetOldService($getOldService)
    {
        $this->apiParas['getOldService'] = $getOldService;

        return $this;
    }

    public function getOpenBoxService()
    {
        return $this->apiParas['openBoxService'];
    }

    public function setOpenBoxService($openBoxService)
    {
        $this->apiParas['openBoxService'] = $openBoxService;

        return $this;
    }

    public function getDeliveryInstallService()
    {
        return $this->apiParas['deliveryInstallService'];
    }

    public function setDeliveryInstallService($deliveryInstallService)
    {
        $this->apiParas['deliveryInstallService'] = $deliveryInstallService;

        return $this;
    }

    public function getPackageIdentityCode()
    {
        return $this->apiParas['packageIdentityCode'];
    }

    public function setPackageIdentityCode($packageIdentityCode)
    {
        $this->apiParas['packageIdentityCode'] = $packageIdentityCode;

        return $this;
    }
}
