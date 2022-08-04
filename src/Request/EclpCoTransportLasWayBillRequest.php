<?php

namespace ACES\Request;

class EclpCoTransportLasWayBillRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.transportLasWayBill';
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

    public function getSenderName()
    {
        return $this->apiParas['senderName'];
    }

    public function setSenderName($senderName)
    {
        $this->apiParas['senderName'] = $senderName;

        return $this;
    }

    public function getSenderMobile()
    {
        return $this->apiParas['senderMobile'];
    }

    public function setSenderMobile($senderMobile)
    {
        $this->apiParas['senderMobile'] = $senderMobile;

        return $this;
    }

    public function getSenderPhone()
    {
        return $this->apiParas['senderPhone'];
    }

    public function setSenderPhone($senderPhone)
    {
        $this->apiParas['senderPhone'] = $senderPhone;

        return $this;
    }

    public function getSenderAddress()
    {
        return $this->apiParas['senderAddress'];
    }

    public function setSenderAddress($senderAddress)
    {
        $this->apiParas['senderAddress'] = $senderAddress;

        return $this;
    }

    public function getReceiverName()
    {
        return $this->apiParas['receiverName'];
    }

    public function setReceiverName($receiverName)
    {
        $this->apiParas['receiverName'] = $receiverName;

        return $this;
    }

    public function getReceiverMobile()
    {
        return $this->apiParas['receiverMobile'];
    }

    public function setReceiverMobile($receiverMobile)
    {
        $this->apiParas['receiverMobile'] = $receiverMobile;

        return $this;
    }

    public function getReceiverPhone()
    {
        return $this->apiParas['receiverPhone'];
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->apiParas['receiverPhone'] = $receiverPhone;

        return $this;
    }

    public function getReceiverAddress()
    {
        return $this->apiParas['receiverAddress'];
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->apiParas['receiverAddress'] = $receiverAddress;

        return $this;
    }

    public function getRemark()
    {
        return $this->apiParas['remark'];
    }

    public function setRemark($remark)
    {
        $this->apiParas['remark'] = $remark;

        return $this;
    }

    public function getIsFragile()
    {
        return $this->apiParas['isFragile'];
    }

    public function setIsFragile($isFragile)
    {
        $this->apiParas['isFragile'] = $isFragile;

        return $this;
    }

    public function getSenderTc()
    {
        return $this->apiParas['senderTc'];
    }

    public function setSenderTc($senderTc)
    {
        $this->apiParas['senderTc'] = $senderTc;

        return $this;
    }

    public function getPredictDate()
    {
        return $this->apiParas['predictDate'];
    }

    public function setPredictDate($predictDate)
    {
        $this->apiParas['predictDate'] = $predictDate;

        return $this;
    }

    public function getIsJDOrder()
    {
        return $this->apiParas['isJDOrder'];
    }

    public function setIsJDOrder($isJDOrder)
    {
        $this->apiParas['isJDOrder'] = $isJDOrder;

        return $this;
    }

    public function getIsCod()
    {
        return $this->apiParas['isCod'];
    }

    public function setIsCod($isCod)
    {
        $this->apiParas['isCod'] = $isCod;

        return $this;
    }

    public function getReceiveable()
    {
        return $this->apiParas['receiveable'];
    }

    public function setReceiveable($receiveable)
    {
        $this->apiParas['receiveable'] = $receiveable;

        return $this;
    }

    public function getOnDoorPickUp()
    {
        return $this->apiParas['onDoorPickUp'];
    }

    public function setOnDoorPickUp($onDoorPickUp)
    {
        $this->apiParas['onDoorPickUp'] = $onDoorPickUp;

        return $this;
    }

    public function getPickUpDate()
    {
        return $this->apiParas['pickUpDate'];
    }

    public function setPickUpDate($pickUpDate)
    {
        $this->apiParas['pickUpDate'] = $pickUpDate;

        return $this;
    }

    public function getIsGuarantee()
    {
        return $this->apiParas['isGuarantee'];
    }

    public function setIsGuarantee($isGuarantee)
    {
        $this->apiParas['isGuarantee'] = $isGuarantee;

        return $this;
    }

    public function getGuaranteeValue()
    {
        return $this->apiParas['guaranteeValue'];
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->apiParas['guaranteeValue'] = $guaranteeValue;

        return $this;
    }

    public function getReceiptFlag()
    {
        return $this->apiParas['receiptFlag'];
    }

    public function setReceiptFlag($receiptFlag)
    {
        $this->apiParas['receiptFlag'] = $receiptFlag;

        return $this;
    }

    public function getPaperFrom()
    {
        return $this->apiParas['paperFrom'];
    }

    public function setPaperFrom($paperFrom)
    {
        $this->apiParas['paperFrom'] = $paperFrom;

        return $this;
    }

    public function getRtnReceiverName()
    {
        return $this->apiParas['rtnReceiverName'];
    }

    public function setRtnReceiverName($rtnReceiverName)
    {
        $this->apiParas['rtnReceiverName'] = $rtnReceiverName;

        return $this;
    }

    public function getRtnReceiverMobile()
    {
        return $this->apiParas['rtnReceiverMobile'];
    }

    public function setRtnReceiverMobile($rtnReceiverMobile)
    {
        $this->apiParas['rtnReceiverMobile'] = $rtnReceiverMobile;

        return $this;
    }

    public function getRtnReceiverAddress()
    {
        return $this->apiParas['rtnReceiverAddress'];
    }

    public function setRtnReceiverAddress($rtnReceiverAddress)
    {
        $this->apiParas['rtnReceiverAddress'] = $rtnReceiverAddress;

        return $this;
    }

    public function getRtnReceiverPhone()
    {
        return $this->apiParas['rtnReceiverPhone'];
    }

    public function setRtnReceiverPhone($rtnReceiverPhone)
    {
        $this->apiParas['rtnReceiverPhone'] = $rtnReceiverPhone;

        return $this;
    }

    public function getProductType()
    {
        return $this->apiParas['productType'];
    }

    public function setProductType($productType)
    {
        $this->apiParas['productType'] = $productType;

        return $this;
    }

    public function getPickUpForNew()
    {
        return $this->apiParas['pickUpForNew'];
    }

    public function setPickUpForNew($pickUpForNew)
    {
        $this->apiParas['pickUpForNew'] = $pickUpForNew;

        return $this;
    }

    public function getPickUpAbnormalNumber()
    {
        return $this->apiParas['pickUpAbnormalNumber'];
    }

    public function setPickUpAbnormalNumber($pickUpAbnormalNumber)
    {
        $this->apiParas['pickUpAbnormalNumber'] = $pickUpAbnormalNumber;

        return $this;
    }

    public function getPickUpReceiverName()
    {
        return $this->apiParas['pickUpReceiverName'];
    }

    public function setPickUpReceiverName($pickUpReceiverName)
    {
        $this->apiParas['pickUpReceiverName'] = $pickUpReceiverName;

        return $this;
    }

    public function getPickUpReceiverMobile()
    {
        return $this->apiParas['pickUpReceiverMobile'];
    }

    public function setPickUpReceiverMobile($pickUpReceiverMobile)
    {
        $this->apiParas['pickUpReceiverMobile'] = $pickUpReceiverMobile;

        return $this;
    }

    public function getPickUpReceiverPhone()
    {
        return $this->apiParas['pickUpReceiverPhone'];
    }

    public function setPickUpReceiverPhone($pickUpReceiverPhone)
    {
        $this->apiParas['pickUpReceiverPhone'] = $pickUpReceiverPhone;

        return $this;
    }

    public function getPickUpReceiverCode()
    {
        return $this->apiParas['pickUpReceiverCode'];
    }

    public function setPickUpReceiverCode($pickUpReceiverCode)
    {
        $this->apiParas['pickUpReceiverCode'] = $pickUpReceiverCode;

        return $this;
    }

    public function getPickUpReceiverAddress()
    {
        return $this->apiParas['pickUpReceiverAddress'];
    }

    public function setPickUpReceiverAddress($pickUpReceiverAddress)
    {
        $this->apiParas['pickUpReceiverAddress'] = $pickUpReceiverAddress;

        return $this;
    }

    public function getIsSignPrint()
    {
        return $this->apiParas['isSignPrint'];
    }

    public function setIsSignPrint($isSignPrint)
    {
        $this->apiParas['isSignPrint'] = $isSignPrint;

        return $this;
    }

    public function getSameCityDelivery()
    {
        return $this->apiParas['sameCityDelivery'];
    }

    public function setSameCityDelivery($sameCityDelivery)
    {
        $this->apiParas['sameCityDelivery'] = $sameCityDelivery;

        return $this;
    }

    public function getLasDischarge()
    {
        return $this->apiParas['lasDischarge'];
    }

    public function setLasDischarge($lasDischarge)
    {
        $this->apiParas['lasDischarge'] = $lasDischarge;

        return $this;
    }

    public function getThirdPayment()
    {
        return $this->apiParas['thirdPayment'];
    }

    public function setThirdPayment($thirdPayment)
    {
        $this->apiParas['thirdPayment'] = $thirdPayment;

        return $this;
    }

    public function getExtendFieldStr()
    {
        return $this->apiParas['extendFieldStr'];
    }

    public function setExtendFieldStr($extendFieldStr)
    {
        $this->apiParas['extendFieldStr'] = $extendFieldStr;

        return $this;
    }

    public function getServProductName()
    {
        return $this->apiParas['servProductName'];
    }

    public function setServProductName($servProductName)
    {
        $this->apiParas['servProductName'] = $servProductName;

        return $this;
    }

    public function getServProductSku()
    {
        return $this->apiParas['servProductSku'];
    }

    public function setServProductSku($servProductSku)
    {
        $this->apiParas['servProductSku'] = $servProductSku;

        return $this;
    }

    public function getServProductNum()
    {
        return $this->apiParas['servProductNum'];
    }

    public function setServProductNum($servProductNum)
    {
        $this->apiParas['servProductNum'] = $servProductNum;

        return $this;
    }

    public function getServCode()
    {
        return $this->apiParas['servCode'];
    }

    public function setServCode($servCode)
    {
        $this->apiParas['servCode'] = $servCode;

        return $this;
    }

    public function getSaleOrderNo()
    {
        return $this->apiParas['saleOrderNo'];
    }

    public function setSaleOrderNo($saleOrderNo)
    {
        $this->apiParas['saleOrderNo'] = $saleOrderNo;

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

    public function getPrice()
    {
        return $this->apiParas['price'];
    }

    public function setPrice($price)
    {
        $this->apiParas['price'] = $price;

        return $this;
    }

    public function getLasInstall()
    {
        return $this->apiParas['lasInstall'];
    }

    public function setLasInstall($lasInstall)
    {
        $this->apiParas['lasInstall'] = $lasInstall;

        return $this;
    }
}
