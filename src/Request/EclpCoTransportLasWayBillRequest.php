<?php

namespace ACES\Request;


class EclpCoTransportLasWayBillRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $orderNo;
    private $senderName;
    private $senderMobile;
    private $senderPhone;
    private $senderAddress;
    private $receiverName;
    private $receiverMobile;
    private $receiverPhone;
    private $receiverAddress;
    private $remark;
    private $isFragile;
    private $senderTc;
    private $predictDate;
    private $isJDOrder;
    private $isCod;
    private $receiveable;
    private $onDoorPickUp;
    private $pickUpDate;
    private $isGuarantee;
    private $guaranteeValue;
    private $receiptFlag;
    private $paperFrom;
    private $rtnReceiverName;
    private $rtnReceiverMobile;
    private $rtnReceiverAddress;
    private $rtnReceiverPhone;
    private $productType;
    private $pickUpForNew;
    private $pickUpAbnormalNumber;
    private $pickUpReceiverName;
    private $pickUpReceiverMobile;
    private $pickUpReceiverPhone;
    private $pickUpReceiverCode;
    private $pickUpReceiverAddress;
    private $isSignPrint;
    private $sameCityDelivery;
    private $lasDischarge;
    private $thirdPayment;
    private $extendFieldStr;
    private $servProductName;
    private $servProductSku;
    private $servProductNum;
    private $servCode;
    private $saleOrderNo;
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
    private $price;
    private $lasInstall;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.transportLasWayBill";
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

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
        $this->apiParas["senderName"] = $senderName;
    }

    public function getSenderMobile()
    {
        return $this->senderMobile;
    }

    public function setSenderMobile($senderMobile)
    {
        $this->senderMobile = $senderMobile;
        $this->apiParas["senderMobile"] = $senderMobile;
    }

    public function getSenderPhone()
    {
        return $this->senderPhone;
    }

    public function setSenderPhone($senderPhone)
    {
        $this->senderPhone = $senderPhone;
        $this->apiParas["senderPhone"] = $senderPhone;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
        $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getReceiverName()
    {
        return $this->receiverName;
    }

    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
        $this->apiParas["receiverName"] = $receiverName;
    }

    public function getReceiverMobile()
    {
        return $this->receiverMobile;
    }

    public function setReceiverMobile($receiverMobile)
    {
        $this->receiverMobile = $receiverMobile;
        $this->apiParas["receiverMobile"] = $receiverMobile;
    }

    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone = $receiverPhone;
        $this->apiParas["receiverPhone"] = $receiverPhone;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
        $this->apiParas["receiverAddress"] = $receiverAddress;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getIsFragile()
    {
        return $this->isFragile;
    }

    public function setIsFragile($isFragile)
    {
        $this->isFragile = $isFragile;
        $this->apiParas["isFragile"] = $isFragile;
    }

    public function getSenderTc()
    {
        return $this->senderTc;
    }

    public function setSenderTc($senderTc)
    {
        $this->senderTc = $senderTc;
        $this->apiParas["senderTc"] = $senderTc;
    }

    public function getPredictDate()
    {
        return $this->predictDate;
    }

    public function setPredictDate($predictDate)
    {
        $this->predictDate = $predictDate;
        $this->apiParas["predictDate"] = $predictDate;
    }

    public function getIsJDOrder()
    {
        return $this->isJDOrder;
    }

    public function setIsJDOrder($isJDOrder)
    {
        $this->isJDOrder = $isJDOrder;
        $this->apiParas["isJDOrder"] = $isJDOrder;
    }

    public function getIsCod()
    {
        return $this->isCod;
    }

    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;
        $this->apiParas["isCod"] = $isCod;
    }

    public function getReceiveable()
    {
        return $this->receiveable;
    }

    public function setReceiveable($receiveable)
    {
        $this->receiveable = $receiveable;
        $this->apiParas["receiveable"] = $receiveable;
    }

    public function getOnDoorPickUp()
    {
        return $this->onDoorPickUp;
    }

    public function setOnDoorPickUp($onDoorPickUp)
    {
        $this->onDoorPickUp = $onDoorPickUp;
        $this->apiParas["onDoorPickUp"] = $onDoorPickUp;
    }

    public function getPickUpDate()
    {
        return $this->pickUpDate;
    }

    public function setPickUpDate($pickUpDate)
    {
        $this->pickUpDate = $pickUpDate;
        $this->apiParas["pickUpDate"] = $pickUpDate;
    }

    public function getIsGuarantee()
    {
        return $this->isGuarantee;
    }

    public function setIsGuarantee($isGuarantee)
    {
        $this->isGuarantee = $isGuarantee;
        $this->apiParas["isGuarantee"] = $isGuarantee;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue = $guaranteeValue;
        $this->apiParas["guaranteeValue"] = $guaranteeValue;
    }

    public function getReceiptFlag()
    {
        return $this->receiptFlag;
    }

    public function setReceiptFlag($receiptFlag)
    {
        $this->receiptFlag = $receiptFlag;
        $this->apiParas["receiptFlag"] = $receiptFlag;
    }

    public function getPaperFrom()
    {
        return $this->paperFrom;
    }

    public function setPaperFrom($paperFrom)
    {
        $this->paperFrom = $paperFrom;
        $this->apiParas["paperFrom"] = $paperFrom;
    }

    public function getRtnReceiverName()
    {
        return $this->rtnReceiverName;
    }

    public function setRtnReceiverName($rtnReceiverName)
    {
        $this->rtnReceiverName = $rtnReceiverName;
        $this->apiParas["rtnReceiverName"] = $rtnReceiverName;
    }

    public function getRtnReceiverMobile()
    {
        return $this->rtnReceiverMobile;
    }

    public function setRtnReceiverMobile($rtnReceiverMobile)
    {
        $this->rtnReceiverMobile = $rtnReceiverMobile;
        $this->apiParas["rtnReceiverMobile"] = $rtnReceiverMobile;
    }

    public function getRtnReceiverAddress()
    {
        return $this->rtnReceiverAddress;
    }

    public function setRtnReceiverAddress($rtnReceiverAddress)
    {
        $this->rtnReceiverAddress = $rtnReceiverAddress;
        $this->apiParas["rtnReceiverAddress"] = $rtnReceiverAddress;
    }

    public function getRtnReceiverPhone()
    {
        return $this->rtnReceiverPhone;
    }

    public function setRtnReceiverPhone($rtnReceiverPhone)
    {
        $this->rtnReceiverPhone = $rtnReceiverPhone;
        $this->apiParas["rtnReceiverPhone"] = $rtnReceiverPhone;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function setProductType($productType)
    {
        $this->productType = $productType;
        $this->apiParas["productType"] = $productType;
    }

    public function getPickUpForNew()
    {
        return $this->pickUpForNew;
    }

    public function setPickUpForNew($pickUpForNew)
    {
        $this->pickUpForNew = $pickUpForNew;
        $this->apiParas["pickUpForNew"] = $pickUpForNew;
    }

    public function getPickUpAbnormalNumber()
    {
        return $this->pickUpAbnormalNumber;
    }

    public function setPickUpAbnormalNumber($pickUpAbnormalNumber)
    {
        $this->pickUpAbnormalNumber = $pickUpAbnormalNumber;
        $this->apiParas["pickUpAbnormalNumber"] = $pickUpAbnormalNumber;
    }

    public function getPickUpReceiverName()
    {
        return $this->pickUpReceiverName;
    }

    public function setPickUpReceiverName($pickUpReceiverName)
    {
        $this->pickUpReceiverName = $pickUpReceiverName;
        $this->apiParas["pickUpReceiverName"] = $pickUpReceiverName;
    }

    public function getPickUpReceiverMobile()
    {
        return $this->pickUpReceiverMobile;
    }

    public function setPickUpReceiverMobile($pickUpReceiverMobile)
    {
        $this->pickUpReceiverMobile = $pickUpReceiverMobile;
        $this->apiParas["pickUpReceiverMobile"] = $pickUpReceiverMobile;
    }

    public function getPickUpReceiverPhone()
    {
        return $this->pickUpReceiverPhone;
    }

    public function setPickUpReceiverPhone($pickUpReceiverPhone)
    {
        $this->pickUpReceiverPhone = $pickUpReceiverPhone;
        $this->apiParas["pickUpReceiverPhone"] = $pickUpReceiverPhone;
    }

    public function getPickUpReceiverCode()
    {
        return $this->pickUpReceiverCode;
    }

    public function setPickUpReceiverCode($pickUpReceiverCode)
    {
        $this->pickUpReceiverCode = $pickUpReceiverCode;
        $this->apiParas["pickUpReceiverCode"] = $pickUpReceiverCode;
    }

    public function getPickUpReceiverAddress()
    {
        return $this->pickUpReceiverAddress;
    }

    public function setPickUpReceiverAddress($pickUpReceiverAddress)
    {
        $this->pickUpReceiverAddress = $pickUpReceiverAddress;
        $this->apiParas["pickUpReceiverAddress"] = $pickUpReceiverAddress;
    }

    public function getIsSignPrint()
    {
        return $this->isSignPrint;
    }

    public function setIsSignPrint($isSignPrint)
    {
        $this->isSignPrint = $isSignPrint;
        $this->apiParas["isSignPrint"] = $isSignPrint;
    }

    public function getSameCityDelivery()
    {
        return $this->sameCityDelivery;
    }

    public function setSameCityDelivery($sameCityDelivery)
    {
        $this->sameCityDelivery = $sameCityDelivery;
        $this->apiParas["sameCityDelivery"] = $sameCityDelivery;
    }

    public function getLasDischarge()
    {
        return $this->lasDischarge;
    }

    public function setLasDischarge($lasDischarge)
    {
        $this->lasDischarge = $lasDischarge;
        $this->apiParas["lasDischarge"] = $lasDischarge;
    }

    public function getThirdPayment()
    {
        return $this->thirdPayment;
    }

    public function setThirdPayment($thirdPayment)
    {
        $this->thirdPayment = $thirdPayment;
        $this->apiParas["thirdPayment"] = $thirdPayment;
    }

    public function getExtendFieldStr()
    {
        return $this->extendFieldStr;
    }

    public function setExtendFieldStr($extendFieldStr)
    {
        $this->extendFieldStr = $extendFieldStr;
        $this->apiParas["extendFieldStr"] = $extendFieldStr;
    }

    public function getServProductName()
    {
        return $this->servProductName;
    }

    public function setServProductName($servProductName)
    {
        $this->servProductName = $servProductName;
        $this->apiParas["servProductName"] = $servProductName;
    }

    public function getServProductSku()
    {
        return $this->servProductSku;
    }

    public function setServProductSku($servProductSku)
    {
        $this->servProductSku = $servProductSku;
        $this->apiParas["servProductSku"] = $servProductSku;
    }

    public function getServProductNum()
    {
        return $this->servProductNum;
    }

    public function setServProductNum($servProductNum)
    {
        $this->servProductNum = $servProductNum;
        $this->apiParas["servProductNum"] = $servProductNum;
    }

    public function getServCode()
    {
        return $this->servCode;
    }

    public function setServCode($servCode)
    {
        $this->servCode = $servCode;
        $this->apiParas["servCode"] = $servCode;
    }

    public function getSaleOrderNo()
    {
        return $this->saleOrderNo;
    }

    public function setSaleOrderNo($saleOrderNo)
    {
        $this->saleOrderNo = $saleOrderNo;
        $this->apiParas["saleOrderNo"] = $saleOrderNo;
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

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        $this->apiParas["price"] = $price;
    }

    public function getLasInstall()
    {
        return $this->lasInstall;
    }

    public function setLasInstall($lasInstall)
    {
        $this->lasInstall = $lasInstall;
        $this->apiParas["lasInstall"] = $lasInstall;
    }
}
