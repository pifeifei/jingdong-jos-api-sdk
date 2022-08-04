<?php

namespace ACES\Request;

class EclpOrderEquatorOrderCustomsRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.equatorOrderCustoms';
    }

    public function check()
    {
    }

    public function getIsvUUID()
    {
        return $this->apiParas['isvUUID'];
    }

    public function setIsvUUID($isvUUID)
    {
        $this->apiParas['isvUUID'] = $isvUUID;

        return $this;
    }

    public function getIsvSource()
    {
        return $this->apiParas['isvSource'];
    }

    public function setIsvSource($isvSource)
    {
        $this->apiParas['isvSource'] = $isvSource;

        return $this;
    }

    public function getPlatformId()
    {
        return $this->apiParas['platformId'];
    }

    public function setPlatformId($platformId)
    {
        $this->apiParas['platformId'] = $platformId;

        return $this;
    }

    public function getPlatformName()
    {
        return $this->apiParas['platformName'];
    }

    public function setPlatformName($platformName)
    {
        $this->apiParas['platformName'] = $platformName;

        return $this;
    }

    public function getPlatformType()
    {
        return $this->apiParas['platformType'];
    }

    public function setPlatformType($platformType)
    {
        $this->apiParas['platformType'] = $platformType;

        return $this;
    }

    public function getSpSoNo()
    {
        return $this->apiParas['spSoNo'];
    }

    public function setSpSoNo($spSoNo)
    {
        $this->apiParas['spSoNo'] = $spSoNo;

        return $this;
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

    public function getInJdwms()
    {
        return $this->apiParas['inJdwms'];
    }

    public function setInJdwms($inJdwms)
    {
        $this->apiParas['inJdwms'] = $inJdwms;

        return $this;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->apiParas['salesPlatformCreateTime'];
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->apiParas['salesPlatformCreateTime'] = $salesPlatformCreateTime;

        return $this;
    }

    public function getVenderId()
    {
        return $this->apiParas['venderId'];
    }

    public function setVenderId($venderId)
    {
        $this->apiParas['venderId'] = $venderId;

        return $this;
    }

    public function getVenderName()
    {
        return $this->apiParas['venderName'];
    }

    public function setVenderName($venderName)
    {
        $this->apiParas['venderName'] = $venderName;

        return $this;
    }

    public function getConsigneeName()
    {
        return $this->apiParas['consigneeName'];
    }

    public function setConsigneeName($consigneeName)
    {
        $this->apiParas['consigneeName'] = $consigneeName;

        return $this;
    }

    public function getConsigneeMobile()
    {
        return $this->apiParas['consigneeMobile'];
    }

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->apiParas['consigneeMobile'] = $consigneeMobile;

        return $this;
    }

    public function getConsigneePhone()
    {
        return $this->apiParas['consigneePhone'];
    }

    public function setConsigneePhone($consigneePhone)
    {
        $this->apiParas['consigneePhone'] = $consigneePhone;

        return $this;
    }

    public function getConsigneeEmail()
    {
        return $this->apiParas['consigneeEmail'];
    }

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->apiParas['consigneeEmail'] = $consigneeEmail;

        return $this;
    }

    public function getConsigneeAddress()
    {
        return $this->apiParas['consigneeAddress'];
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->apiParas['consigneeAddress'] = $consigneeAddress;

        return $this;
    }

    public function getConsigneePostcode()
    {
        return $this->apiParas['consigneePostcode'];
    }

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->apiParas['consigneePostcode'] = $consigneePostcode;

        return $this;
    }

    public function getConsigneeCountry()
    {
        return $this->apiParas['consigneeCountry'];
    }

    public function setConsigneeCountry($consigneeCountry)
    {
        $this->apiParas['consigneeCountry'] = $consigneeCountry;

        return $this;
    }

    public function getAddressProvince()
    {
        return $this->apiParas['addressProvince'];
    }

    public function setAddressProvince($addressProvince)
    {
        $this->apiParas['addressProvince'] = $addressProvince;

        return $this;
    }

    public function getAddressCity()
    {
        return $this->apiParas['addressCity'];
    }

    public function setAddressCity($addressCity)
    {
        $this->apiParas['addressCity'] = $addressCity;

        return $this;
    }

    public function getAddressCounty()
    {
        return $this->apiParas['addressCounty'];
    }

    public function setAddressCounty($addressCounty)
    {
        $this->apiParas['addressCounty'] = $addressCounty;

        return $this;
    }

    public function getAddressTown()
    {
        return $this->apiParas['addressTown'];
    }

    public function setAddressTown($addressTown)
    {
        $this->apiParas['addressTown'] = $addressTown;

        return $this;
    }

    public function getDeclareOrder()
    {
        return $this->apiParas['declareOrder'];
    }

    public function setDeclareOrder($declareOrder)
    {
        $this->apiParas['declareOrder'] = $declareOrder;

        return $this;
    }

    public function getCcProvider()
    {
        return $this->apiParas['ccProvider'];
    }

    public function setCcProvider($ccProvider)
    {
        $this->apiParas['ccProvider'] = $ccProvider;

        return $this;
    }

    public function getCcProviderName()
    {
        return $this->apiParas['ccProviderName'];
    }

    public function setCcProviderName($ccProviderName)
    {
        $this->apiParas['ccProviderName'] = $ccProviderName;

        return $this;
    }

    public function getPostType()
    {
        return $this->apiParas['postType'];
    }

    public function setPostType($postType)
    {
        $this->apiParas['postType'] = $postType;

        return $this;
    }

    public function getPattern()
    {
        return $this->apiParas['pattern'];
    }

    public function setPattern($pattern)
    {
        $this->apiParas['pattern'] = $pattern;

        return $this;
    }

    public function getCustoms()
    {
        return $this->apiParas['customs'];
    }

    public function setCustoms($customs)
    {
        $this->apiParas['customs'] = $customs;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getEbpCode()
    {
        return $this->apiParas['ebpCode'];
    }

    public function setEbpCode($ebpCode)
    {
        $this->apiParas['ebpCode'] = $ebpCode;

        return $this;
    }

    public function getEbpName()
    {
        return $this->apiParas['ebpName'];
    }

    public function setEbpName($ebpName)
    {
        $this->apiParas['ebpName'] = $ebpName;

        return $this;
    }

    public function getEbcCode()
    {
        return $this->apiParas['ebcCode'];
    }

    public function setEbcCode($ebcCode)
    {
        $this->apiParas['ebcCode'] = $ebcCode;

        return $this;
    }

    public function getEbcName()
    {
        return $this->apiParas['ebcName'];
    }

    public function setEbcName($ebcName)
    {
        $this->apiParas['ebcName'] = $ebcName;

        return $this;
    }

    public function getDelivery()
    {
        return $this->apiParas['delivery'];
    }

    public function setDelivery($delivery)
    {
        $this->apiParas['delivery'] = $delivery;

        return $this;
    }

    public function getDiscount()
    {
        return $this->apiParas['discount'];
    }

    public function setDiscount($discount)
    {
        $this->apiParas['discount'] = $discount;

        return $this;
    }

    public function getDiscountNote()
    {
        return $this->apiParas['discountNote'];
    }

    public function setDiscountNote($discountNote)
    {
        $this->apiParas['discountNote'] = $discountNote;

        return $this;
    }

    public function getIstax()
    {
        return $this->apiParas['istax'];
    }

    public function setIstax($istax)
    {
        $this->apiParas['istax'] = $istax;

        return $this;
    }

    public function getTaxTotal()
    {
        return $this->apiParas['taxTotal'];
    }

    public function setTaxTotal($taxTotal)
    {
        $this->apiParas['taxTotal'] = $taxTotal;

        return $this;
    }

    public function getFreight()
    {
        return $this->apiParas['freight'];
    }

    public function setFreight($freight)
    {
        $this->apiParas['freight'] = $freight;

        return $this;
    }

    public function getOtherPrice()
    {
        return $this->apiParas['otherPrice'];
    }

    public function setOtherPrice($otherPrice)
    {
        $this->apiParas['otherPrice'] = $otherPrice;

        return $this;
    }

    public function getGoodsValue()
    {
        return $this->apiParas['goodsValue'];
    }

    public function setGoodsValue($goodsValue)
    {
        $this->apiParas['goodsValue'] = $goodsValue;

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

    public function getNetWeight()
    {
        return $this->apiParas['netWeight'];
    }

    public function setNetWeight($netWeight)
    {
        $this->apiParas['netWeight'] = $netWeight;

        return $this;
    }

    public function getBatchNumbers()
    {
        return $this->apiParas['batchNumbers'];
    }

    public function setBatchNumbers($batchNumbers)
    {
        $this->apiParas['batchNumbers'] = $batchNumbers;

        return $this;
    }

    public function getBuyerRegNo()
    {
        return $this->apiParas['buyerRegNo'];
    }

    public function setBuyerRegNo($buyerRegNo)
    {
        $this->apiParas['buyerRegNo'] = $buyerRegNo;

        return $this;
    }

    public function getBuyerPhone()
    {
        return $this->apiParas['buyerPhone'];
    }

    public function setBuyerPhone($buyerPhone)
    {
        $this->apiParas['buyerPhone'] = $buyerPhone;

        return $this;
    }

    public function getBuyerName()
    {
        return $this->apiParas['buyerName'];
    }

    public function setBuyerName($buyerName)
    {
        $this->apiParas['buyerName'] = $buyerName;

        return $this;
    }

    public function getBuyerIdType()
    {
        return $this->apiParas['buyerIdType'];
    }

    public function setBuyerIdType($buyerIdType)
    {
        $this->apiParas['buyerIdType'] = $buyerIdType;

        return $this;
    }

    public function getBuyerIdNumber()
    {
        return $this->apiParas['buyerIdNumber'];
    }

    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->apiParas['buyerIdNumber'] = $buyerIdNumber;

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

    public function getSenderCompanyName()
    {
        return $this->apiParas['senderCompanyName'];
    }

    public function setSenderCompanyName($senderCompanyName)
    {
        $this->apiParas['senderCompanyName'] = $senderCompanyName;

        return $this;
    }

    public function getSenderCountry()
    {
        return $this->apiParas['senderCountry'];
    }

    public function setSenderCountry($senderCountry)
    {
        $this->apiParas['senderCountry'] = $senderCountry;

        return $this;
    }

    public function getSenderZip()
    {
        return $this->apiParas['senderZip'];
    }

    public function setSenderZip($senderZip)
    {
        $this->apiParas['senderZip'] = $senderZip;

        return $this;
    }

    public function getSenderCity()
    {
        return $this->apiParas['senderCity'];
    }

    public function setSenderCity($senderCity)
    {
        $this->apiParas['senderCity'] = $senderCity;

        return $this;
    }

    public function getSenderProvince()
    {
        return $this->apiParas['senderProvince'];
    }

    public function setSenderProvince($senderProvince)
    {
        $this->apiParas['senderProvince'] = $senderProvince;

        return $this;
    }

    public function getSenderTel()
    {
        return $this->apiParas['senderTel'];
    }

    public function setSenderTel($senderTel)
    {
        $this->apiParas['senderTel'] = $senderTel;

        return $this;
    }

    public function getSenderAddr()
    {
        return $this->apiParas['senderAddr'];
    }

    public function setSenderAddr($senderAddr)
    {
        $this->apiParas['senderAddr'] = $senderAddr;

        return $this;
    }

    public function getCustomsRemark()
    {
        return $this->apiParas['customsRemark'];
    }

    public function setCustomsRemark($customsRemark)
    {
        $this->apiParas['customsRemark'] = $customsRemark;

        return $this;
    }

    public function getDeclarePaymentList()
    {
        return $this->apiParas['declarePaymentList'];
    }

    public function setDeclarePaymentList($declarePaymentList)
    {
        $this->apiParas['declarePaymentList'] = $declarePaymentList;

        return $this;
    }

    public function getPaymentType()
    {
        return $this->apiParas['paymentType'];
    }

    public function setPaymentType($paymentType)
    {
        $this->apiParas['paymentType'] = $paymentType;

        return $this;
    }

    public function getPayCode()
    {
        return $this->apiParas['payCode'];
    }

    public function setPayCode($payCode)
    {
        $this->apiParas['payCode'] = $payCode;

        return $this;
    }

    public function getPayName()
    {
        return $this->apiParas['payName'];
    }

    public function setPayName($payName)
    {
        $this->apiParas['payName'] = $payName;

        return $this;
    }

    public function getPayTransactionId()
    {
        return $this->apiParas['payTransactionId'];
    }

    public function setPayTransactionId($payTransactionId)
    {
        $this->apiParas['payTransactionId'] = $payTransactionId;

        return $this;
    }

    public function getCurrency()
    {
        return $this->apiParas['currency'];
    }

    public function setCurrency($currency)
    {
        $this->apiParas['currency'] = $currency;

        return $this;
    }

    public function getPaymentConfirmTime()
    {
        return $this->apiParas['paymentConfirmTime'];
    }

    public function setPaymentConfirmTime($paymentConfirmTime)
    {
        $this->apiParas['paymentConfirmTime'] = $paymentConfirmTime;

        return $this;
    }

    public function getShouldPay()
    {
        return $this->apiParas['shouldPay'];
    }

    public function setShouldPay($shouldPay)
    {
        $this->apiParas['shouldPay'] = $shouldPay;

        return $this;
    }

    public function getReceiveNo()
    {
        return $this->apiParas['receiveNo'];
    }

    public function setReceiveNo($receiveNo)
    {
        $this->apiParas['receiveNo'] = $receiveNo;

        return $this;
    }

    public function getPayRemark()
    {
        return $this->apiParas['payRemark'];
    }

    public function setPayRemark($payRemark)
    {
        $this->apiParas['payRemark'] = $payRemark;

        return $this;
    }

    public function getDeclareWaybill()
    {
        return $this->apiParas['declareWaybill'];
    }

    public function setDeclareWaybill($declareWaybill)
    {
        $this->apiParas['declareWaybill'] = $declareWaybill;

        return $this;
    }

    public function getLogisticsCode()
    {
        return $this->apiParas['logisticsCode'];
    }

    public function setLogisticsCode($logisticsCode)
    {
        $this->apiParas['logisticsCode'] = $logisticsCode;

        return $this;
    }

    public function getLogisticsName()
    {
        return $this->apiParas['logisticsName'];
    }

    public function setLogisticsName($logisticsName)
    {
        $this->apiParas['logisticsName'] = $logisticsName;

        return $this;
    }

    public function getBdOwnerNo()
    {
        return $this->apiParas['bdOwnerNo'];
    }

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->apiParas['bdOwnerNo'] = $bdOwnerNo;

        return $this;
    }

    public function getLogisticsNo()
    {
        return $this->apiParas['logisticsNo'];
    }

    public function setLogisticsNo($logisticsNo)
    {
        $this->apiParas['logisticsNo'] = $logisticsNo;

        return $this;
    }

    public function getPackNo()
    {
        return $this->apiParas['packNo'];
    }

    public function setPackNo($packNo)
    {
        $this->apiParas['packNo'] = $packNo;

        return $this;
    }

    public function getLogisticsRemark()
    {
        return $this->apiParas['logisticsRemark'];
    }

    public function setLogisticsRemark($logisticsRemark)
    {
        $this->apiParas['logisticsRemark'] = $logisticsRemark;

        return $this;
    }

    public function getIsDelivery()
    {
        return $this->apiParas['isDelivery'];
    }

    public function setIsDelivery($isDelivery)
    {
        $this->apiParas['isDelivery'] = $isDelivery;

        return $this;
    }

    public function getReceivable()
    {
        return $this->apiParas['receivable'];
    }

    public function setReceivable($receivable)
    {
        $this->apiParas['receivable'] = $receivable;

        return $this;
    }

    public function getConsigneeRemark()
    {
        return $this->apiParas['consigneeRemark'];
    }

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->apiParas['consigneeRemark'] = $consigneeRemark;

        return $this;
    }

    public function getPackageMark()
    {
        return $this->apiParas['packageMark'];
    }

    public function setPackageMark($packageMark)
    {
        $this->apiParas['packageMark'] = $packageMark;

        return $this;
    }

    public function getBusinessType()
    {
        return $this->apiParas['businessType'];
    }

    public function setBusinessType($businessType)
    {
        $this->apiParas['businessType'] = $businessType;

        return $this;
    }

    public function getDestinationCode()
    {
        return $this->apiParas['destinationCode'];
    }

    public function setDestinationCode($destinationCode)
    {
        $this->apiParas['destinationCode'] = $destinationCode;

        return $this;
    }

    public function getDestinationName()
    {
        return $this->apiParas['destinationName'];
    }

    public function setDestinationName($destinationName)
    {
        $this->apiParas['destinationName'] = $destinationName;

        return $this;
    }

    public function getSendWebsiteCode()
    {
        return $this->apiParas['sendWebsiteCode'];
    }

    public function setSendWebsiteCode($sendWebsiteCode)
    {
        $this->apiParas['sendWebsiteCode'] = $sendWebsiteCode;

        return $this;
    }

    public function getSendWebsiteName()
    {
        return $this->apiParas['sendWebsiteName'];
    }

    public function setSendWebsiteName($sendWebsiteName)
    {
        $this->apiParas['sendWebsiteName'] = $sendWebsiteName;

        return $this;
    }

    public function getSendMode()
    {
        return $this->apiParas['sendMode'];
    }

    public function setSendMode($sendMode)
    {
        $this->apiParas['sendMode'] = $sendMode;

        return $this;
    }

    public function getReceiveMode()
    {
        return $this->apiParas['receiveMode'];
    }

    public function setReceiveMode($receiveMode)
    {
        $this->apiParas['receiveMode'] = $receiveMode;

        return $this;
    }

    public function getAppointDeliveryTime()
    {
        return $this->apiParas['appointDeliveryTime'];
    }

    public function setAppointDeliveryTime($appointDeliveryTime)
    {
        $this->apiParas['appointDeliveryTime'] = $appointDeliveryTime;

        return $this;
    }

    public function getInsuredPriceFlag()
    {
        return $this->apiParas['insuredPriceFlag'];
    }

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->apiParas['insuredPriceFlag'] = $insuredPriceFlag;

        return $this;
    }

    public function getInsuredValue()
    {
        return $this->apiParas['insuredValue'];
    }

    public function setInsuredValue($insuredValue)
    {
        $this->apiParas['insuredValue'] = $insuredValue;

        return $this;
    }

    public function getInsuredFee()
    {
        return $this->apiParas['insuredFee'];
    }

    public function setInsuredFee($insuredFee)
    {
        $this->apiParas['insuredFee'] = $insuredFee;

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

    public function getMonthlyAccount()
    {
        return $this->apiParas['monthlyAccount'];
    }

    public function setMonthlyAccount($monthlyAccount)
    {
        $this->apiParas['monthlyAccount'] = $monthlyAccount;

        return $this;
    }

    public function getShipment()
    {
        return $this->apiParas['shipment'];
    }

    public function setShipment($shipment)
    {
        $this->apiParas['shipment'] = $shipment;

        return $this;
    }

    public function getSellerRemark()
    {
        return $this->apiParas['sellerRemark'];
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->apiParas['sellerRemark'] = $sellerRemark;

        return $this;
    }

    public function getThirdSite()
    {
        return $this->apiParas['thirdSite'];
    }

    public function setThirdSite($thirdSite)
    {
        $this->apiParas['thirdSite'] = $thirdSite;

        return $this;
    }

    public function getShopNo()
    {
        return $this->apiParas['shopNo'];
    }

    public function setShopNo($shopNo)
    {
        $this->apiParas['shopNo'] = $shopNo;

        return $this;
    }

    public function getIsSupervise()
    {
        return $this->apiParas['isSupervise'];
    }

    public function setIsSupervise($isSupervise)
    {
        $this->apiParas['isSupervise'] = $isSupervise;

        return $this;
    }

    public function getInitalRequest()
    {
        return $this->apiParas['initalRequest'];
    }

    public function setInitalRequest($initalRequest)
    {
        $this->apiParas['initalRequest'] = $initalRequest;

        return $this;
    }

    public function getInitalResponse()
    {
        return $this->apiParas['initalResponse'];
    }

    public function setInitalResponse($initalResponse)
    {
        $this->apiParas['initalResponse'] = $initalResponse;

        return $this;
    }

    public function getPayTransactionIdYh()
    {
        return $this->apiParas['payTransactionIdYh'];
    }

    public function setPayTransactionIdYh($payTransactionIdYh)
    {
        $this->apiParas['payTransactionIdYh'] = $payTransactionIdYh;

        return $this;
    }

    public function getIsvParentId()
    {
        return $this->apiParas['isvParentId'];
    }

    public function setIsvParentId($isvParentId)
    {
        $this->apiParas['isvParentId'] = $isvParentId;

        return $this;
    }

    public function getIsvOrderIdList()
    {
        return $this->apiParas['isvOrderIdList'];
    }

    public function setIsvOrderIdList($isvOrderIdList)
    {
        $this->apiParas['isvOrderIdList'] = $isvOrderIdList;

        return $this;
    }

    public function getTotalAmount()
    {
        return $this->apiParas['totalAmount'];
    }

    public function setTotalAmount($totalAmount)
    {
        $this->apiParas['totalAmount'] = $totalAmount;

        return $this;
    }

    public function getVerDept()
    {
        return $this->apiParas['verDept'];
    }

    public function setVerDept($verDept)
    {
        $this->apiParas['verDept'] = $verDept;

        return $this;
    }

    public function getPayType()
    {
        return $this->apiParas['payType'];
    }

    public function setPayType($payType)
    {
        $this->apiParas['payType'] = $payType;

        return $this;
    }

    public function getRecpAccount()
    {
        return $this->apiParas['recpAccount'];
    }

    public function setRecpAccount($recpAccount)
    {
        $this->apiParas['recpAccount'] = $recpAccount;

        return $this;
    }

    public function getRecpCode()
    {
        return $this->apiParas['recpCode'];
    }

    public function setRecpCode($recpCode)
    {
        $this->apiParas['recpCode'] = $recpCode;

        return $this;
    }

    public function getRecpName()
    {
        return $this->apiParas['recpName'];
    }

    public function setRecpName($recpName)
    {
        $this->apiParas['recpName'] = $recpName;

        return $this;
    }

    public function getConsNameEN()
    {
        return $this->apiParas['consNameEN'];
    }

    public function setConsNameEN($consNameEN)
    {
        $this->apiParas['consNameEN'] = $consNameEN;

        return $this;
    }

    public function getConsAddressEN()
    {
        return $this->apiParas['consAddressEN'];
    }

    public function setConsAddressEN($consAddressEN)
    {
        $this->apiParas['consAddressEN'] = $consAddressEN;

        return $this;
    }

    public function getSenderNameEN()
    {
        return $this->apiParas['senderNameEN'];
    }

    public function setSenderNameEN($senderNameEN)
    {
        $this->apiParas['senderNameEN'] = $senderNameEN;

        return $this;
    }

    public function getSenderCityEN()
    {
        return $this->apiParas['senderCityEN'];
    }

    public function setSenderCityEN($senderCityEN)
    {
        $this->apiParas['senderCityEN'] = $senderCityEN;

        return $this;
    }

    public function getSenderAddrEN()
    {
        return $this->apiParas['senderAddrEN'];
    }

    public function setSenderAddrEN($senderAddrEN)
    {
        $this->apiParas['senderAddrEN'] = $senderAddrEN;

        return $this;
    }

    public function getWrapType()
    {
        return $this->apiParas['wrapType'];
    }

    public function setWrapType($wrapType)
    {
        $this->apiParas['wrapType'] = $wrapType;

        return $this;
    }

    public function getConsigneeIdType()
    {
        return $this->apiParas['consigneeIdType'];
    }

    public function setConsigneeIdType($consigneeIdType)
    {
        $this->apiParas['consigneeIdType'] = $consigneeIdType;

        return $this;
    }

    public function getGnum()
    {
        return $this->apiParas['gnum'];
    }

    public function setGnum($gnum)
    {
        $this->apiParas['gnum'] = $gnum;

        return $this;
    }

    public function getIsvGoodsNo()
    {
        return $this->apiParas['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->apiParas['isvGoodsNo'] = $isvGoodsNo;

        return $this;
    }

    public function getSpGoodsNo()
    {
        return $this->apiParas['spGoodsNo'];
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->apiParas['spGoodsNo'] = $spGoodsNo;

        return $this;
    }

    public function getQuantity()
    {
        return $this->apiParas['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->apiParas['quantity'] = $quantity;

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

    public function getGoodsRemark()
    {
        return $this->apiParas['goodsRemark'];
    }

    public function setGoodsRemark($goodsRemark)
    {
        $this->apiParas['goodsRemark'] = $goodsRemark;

        return $this;
    }

    public function getItemLink()
    {
        return $this->apiParas['itemLink'];
    }

    public function setItemLink($itemLink)
    {
        $this->apiParas['itemLink'] = $itemLink;

        return $this;
    }
}
