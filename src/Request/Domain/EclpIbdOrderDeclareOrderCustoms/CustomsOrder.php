<?php

namespace ACES\Request\Domain\EclpIbdOrderDeclareOrderCustoms;

class CustomsOrder
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.isv.Ddomain.so.OrderCustomsParam';
    }

    public function getIsvUUID()
    {
        return $this->params['isvUUID'];
    }

    public function setIsvUUID($isvUUID)
    {
        $this->params['isvUUID'] = $isvUUID;
    }

    public function getIsvSource()
    {
        return $this->params['isvSource'];
    }

    public function setIsvSource($isvSource)
    {
        $this->params['isvSource'] = $isvSource;
    }

    public function getPlatformId()
    {
        return $this->params['platformId'];
    }

    public function setPlatformId($platformId)
    {
        $this->params['platformId'] = $platformId;
    }

    public function getPlatformName()
    {
        return $this->params['platformName'];
    }

    public function setPlatformName($platformName)
    {
        $this->params['platformName'] = $platformName;
    }

    public function getPlatformType()
    {
        return $this->params['platformType'];
    }

    public function setPlatformType($platformType)
    {
        $this->params['platformType'] = $platformType;
    }

    public function getSpSoNo()
    {
        return $this->params['spSoNo'];
    }

    public function setSpSoNo($spSoNo)
    {
        $this->params['spSoNo'] = $spSoNo;
    }

    public function getDeptNo()
    {
        return $this->params['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getInJdwms()
    {
        return $this->params['inJdwms'];
    }

    public function setInJdwms($inJdwms)
    {
        $this->params['inJdwms'] = $inJdwms;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->params['salesPlatformCreateTime'];
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->params['salesPlatformCreateTime'] = $salesPlatformCreateTime;
    }

    public function getConsigneeName()
    {
        return $this->params['consigneeName'];
    }

    public function setConsigneeName($consigneeName)
    {
        $this->params['consigneeName'] = $consigneeName;
    }

    public function getConsigneeMobile()
    {
        return $this->params['consigneeMobile'];
    }

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->params['consigneeMobile'] = $consigneeMobile;
    }

    public function getConsigneePhone()
    {
        return $this->params['consigneePhone'];
    }

    public function setConsigneePhone($consigneePhone)
    {
        $this->params['consigneePhone'] = $consigneePhone;
    }

    public function getConsigneeEmail()
    {
        return $this->params['consigneeEmail'];
    }

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->params['consigneeEmail'] = $consigneeEmail;
    }

    public function getConsigneeAddress()
    {
        return $this->params['consigneeAddress'];
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->params['consigneeAddress'] = $consigneeAddress;
    }

    public function getConsigneePostcode()
    {
        return $this->params['consigneePostcode'];
    }

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->params['consigneePostcode'] = $consigneePostcode;
    }

    public function getConsigneeCountry()
    {
        return $this->params['consigneeCountry'];
    }

    public function setConsigneeCountry($consigneeCountry)
    {
        $this->params['consigneeCountry'] = $consigneeCountry;
    }

    public function getAddressProvince()
    {
        return $this->params['addressProvince'];
    }

    public function setAddressProvince($addressProvince)
    {
        $this->params['addressProvince'] = $addressProvince;
    }

    public function getAddressCity()
    {
        return $this->params['addressCity'];
    }

    public function setAddressCity($addressCity)
    {
        $this->params['addressCity'] = $addressCity;
    }

    public function getAddressCounty()
    {
        return $this->params['addressCounty'];
    }

    public function setAddressCounty($addressCounty)
    {
        $this->params['addressCounty'] = $addressCounty;
    }

    public function getAddressTown()
    {
        return $this->params['addressTown'];
    }

    public function setAddressTown($addressTown)
    {
        $this->params['addressTown'] = $addressTown;
    }

    public function getDeclareOrder()
    {
        return $this->params['declareOrder'];
    }

    public function setDeclareOrder($declareOrder)
    {
        $this->params['declareOrder'] = $declareOrder;
    }

    public function getCcProvider()
    {
        return $this->params['ccProvider'];
    }

    public function setCcProvider($ccProvider)
    {
        $this->params['ccProvider'] = $ccProvider;
    }

    public function getCcProviderName()
    {
        return $this->params['ccProviderName'];
    }

    public function setCcProviderName($ccProviderName)
    {
        $this->params['ccProviderName'] = $ccProviderName;
    }

    public function getPostType()
    {
        return $this->params['postType'];
    }

    public function setPostType($postType)
    {
        $this->params['postType'] = $postType;
    }

    public function getPattern()
    {
        return $this->params['pattern'];
    }

    public function setPattern($pattern)
    {
        $this->params['pattern'] = $pattern;
    }

    public function getCustoms()
    {
        return $this->params['customs'];
    }

    public function setCustoms($customs)
    {
        $this->params['customs'] = $customs;
    }

    public function getEbpCode()
    {
        return $this->params['ebpCode'];
    }

    public function setEbpCode($ebpCode)
    {
        $this->params['ebpCode'] = $ebpCode;
    }

    public function getEbpName()
    {
        return $this->params['ebpName'];
    }

    public function setEbpName($ebpName)
    {
        $this->params['ebpName'] = $ebpName;
    }

    public function getEbcCode()
    {
        return $this->params['ebcCode'];
    }

    public function setEbcCode($ebcCode)
    {
        $this->params['ebcCode'] = $ebcCode;
    }

    public function getEbcName()
    {
        return $this->params['ebcName'];
    }

    public function setEbcName($ebcName)
    {
        $this->params['ebcName'] = $ebcName;
    }

    public function getDelivery()
    {
        return $this->params['delivery'];
    }

    public function setDelivery($delivery)
    {
        $this->params['delivery'] = $delivery;
    }

    public function getDiscount()
    {
        return $this->params['discount'];
    }

    public function setDiscount($discount)
    {
        $this->params['discount'] = $discount;
    }

    public function getDiscountNote()
    {
        return $this->params['discountNote'];
    }

    public function setDiscountNote($discountNote)
    {
        $this->params['discountNote'] = $discountNote;
    }

    public function getIstax()
    {
        return $this->params['istax'];
    }

    public function setIstax($istax)
    {
        $this->params['istax'] = $istax;
    }

    public function getTaxTotal()
    {
        return $this->params['taxTotal'];
    }

    public function setTaxTotal($taxTotal)
    {
        $this->params['taxTotal'] = $taxTotal;
    }

    public function getFreight()
    {
        return $this->params['freight'];
    }

    public function setFreight($freight)
    {
        $this->params['freight'] = $freight;
    }

    public function getOtherPrice()
    {
        return $this->params['otherPrice'];
    }

    public function setOtherPrice($otherPrice)
    {
        $this->params['otherPrice'] = $otherPrice;
    }

    public function getGoodsValue()
    {
        return $this->params['goodsValue'];
    }

    public function setGoodsValue($goodsValue)
    {
        $this->params['goodsValue'] = $goodsValue;
    }

    public function getWeight()
    {
        return $this->params['weight'];
    }

    public function setWeight($weight)
    {
        $this->params['weight'] = $weight;
    }

    public function getNetWeight()
    {
        return $this->params['netWeight'];
    }

    public function setNetWeight($netWeight)
    {
        $this->params['netWeight'] = $netWeight;
    }

    public function getBatchNumbers()
    {
        return $this->params['batchNumbers'];
    }

    public function setBatchNumbers($batchNumbers)
    {
        $this->params['batchNumbers'] = $batchNumbers;
    }

    public function getBuyerRegNo()
    {
        return $this->params['buyerRegNo'];
    }

    public function setBuyerRegNo($buyerRegNo)
    {
        $this->params['buyerRegNo'] = $buyerRegNo;
    }

    public function getBuyerPhone()
    {
        return $this->params['buyerPhone'];
    }

    public function setBuyerPhone($buyerPhone)
    {
        $this->params['buyerPhone'] = $buyerPhone;
    }

    public function getBuyerName()
    {
        return $this->params['buyerName'];
    }

    public function setBuyerName($buyerName)
    {
        $this->params['buyerName'] = $buyerName;
    }

    public function getBuyerIdType()
    {
        return $this->params['buyerIdType'];
    }

    public function setBuyerIdType($buyerIdType)
    {
        $this->params['buyerIdType'] = $buyerIdType;
    }

    public function getBuyerIdNumber()
    {
        return $this->params['buyerIdNumber'];
    }

    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->params['buyerIdNumber'] = $buyerIdNumber;
    }

    public function getSenderName()
    {
        return $this->params['senderName'];
    }

    public function setSenderName($senderName)
    {
        $this->params['senderName'] = $senderName;
    }

    public function getSenderCompanyName()
    {
        return $this->params['senderCompanyName'];
    }

    public function setSenderCompanyName($senderCompanyName)
    {
        $this->params['senderCompanyName'] = $senderCompanyName;
    }

    public function getSenderCountry()
    {
        return $this->params['senderCountry'];
    }

    public function setSenderCountry($senderCountry)
    {
        $this->params['senderCountry'] = $senderCountry;
    }

    public function getSenderZip()
    {
        return $this->params['senderZip'];
    }

    public function setSenderZip($senderZip)
    {
        $this->params['senderZip'] = $senderZip;
    }

    public function getSenderCity()
    {
        return $this->params['senderCity'];
    }

    public function setSenderCity($senderCity)
    {
        $this->params['senderCity'] = $senderCity;
    }

    public function getSenderProvince()
    {
        return $this->params['senderProvince'];
    }

    public function setSenderProvince($senderProvince)
    {
        $this->params['senderProvince'] = $senderProvince;
    }

    public function getSenderTel()
    {
        return $this->params['senderTel'];
    }

    public function setSenderTel($senderTel)
    {
        $this->params['senderTel'] = $senderTel;
    }

    public function getSenderAddr()
    {
        return $this->params['senderAddr'];
    }

    public function setSenderAddr($senderAddr)
    {
        $this->params['senderAddr'] = $senderAddr;
    }

    public function getCustomsRemark()
    {
        return $this->params['customsRemark'];
    }

    public function setCustomsRemark($customsRemark)
    {
        $this->params['customsRemark'] = $customsRemark;
    }

    public function getDeclarePaymentList()
    {
        return $this->params['declarePaymentList'];
    }

    public function setDeclarePaymentList($declarePaymentList)
    {
        $this->params['declarePaymentList'] = $declarePaymentList;
    }

    public function getPaymentType()
    {
        return $this->params['paymentType'];
    }

    public function setPaymentType($paymentType)
    {
        $this->params['paymentType'] = $paymentType;
    }

    public function getPayCode()
    {
        return $this->params['payCode'];
    }

    public function setPayCode($payCode)
    {
        $this->params['payCode'] = $payCode;
    }

    public function getPayName()
    {
        return $this->params['payName'];
    }

    public function setPayName($payName)
    {
        $this->params['payName'] = $payName;
    }

    public function getPayTransactionId()
    {
        return $this->params['payTransactionId'];
    }

    public function setPayTransactionId($payTransactionId)
    {
        $this->params['payTransactionId'] = $payTransactionId;
    }

    public function getCurrency()
    {
        return $this->params['currency'];
    }

    public function setCurrency($currency)
    {
        $this->params['currency'] = $currency;
    }

    public function getPaymentConfirmTime()
    {
        return $this->params['paymentConfirmTime'];
    }

    public function setPaymentConfirmTime($paymentConfirmTime)
    {
        $this->params['paymentConfirmTime'] = $paymentConfirmTime;
    }

    public function getShouldPay()
    {
        return $this->params['shouldPay'];
    }

    public function setShouldPay($shouldPay)
    {
        $this->params['shouldPay'] = $shouldPay;
    }

    public function getReceiveNo()
    {
        return $this->params['receiveNo'];
    }

    public function setReceiveNo($receiveNo)
    {
        $this->params['receiveNo'] = $receiveNo;
    }

    public function getPayRemark()
    {
        return $this->params['payRemark'];
    }

    public function setPayRemark($payRemark)
    {
        $this->params['payRemark'] = $payRemark;
    }

    public function getDeclareWaybill()
    {
        return $this->params['declareWaybill'];
    }

    public function setDeclareWaybill($declareWaybill)
    {
        $this->params['declareWaybill'] = $declareWaybill;
    }

    public function getLogisticsCode()
    {
        return $this->params['logisticsCode'];
    }

    public function setLogisticsCode($logisticsCode)
    {
        $this->params['logisticsCode'] = $logisticsCode;
    }

    public function getLogisticsName()
    {
        return $this->params['logisticsName'];
    }

    public function setLogisticsName($logisticsName)
    {
        $this->params['logisticsName'] = $logisticsName;
    }

    public function getBdOwnerNo()
    {
        return $this->params['bdOwnerNo'];
    }

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->params['bdOwnerNo'] = $bdOwnerNo;
    }

    public function getLogisticsNo()
    {
        return $this->params['logisticsNo'];
    }

    public function setLogisticsNo($logisticsNo)
    {
        $this->params['logisticsNo'] = $logisticsNo;
    }

    public function getPackNo()
    {
        return $this->params['packNo'];
    }

    public function setPackNo($packNo)
    {
        $this->params['packNo'] = $packNo;
    }

    public function getLogisticsRemark()
    {
        return $this->params['logisticsRemark'];
    }

    public function setLogisticsRemark($logisticsRemark)
    {
        $this->params['logisticsRemark'] = $logisticsRemark;
    }

    public function getIsDelivery()
    {
        return $this->params['isDelivery'];
    }

    public function setIsDelivery($isDelivery)
    {
        $this->params['isDelivery'] = $isDelivery;
    }

    public function getReceivable()
    {
        return $this->params['receivable'];
    }

    public function setReceivable($receivable)
    {
        $this->params['receivable'] = $receivable;
    }

    public function getConsigneeRemark()
    {
        return $this->params['consigneeRemark'];
    }

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->params['consigneeRemark'] = $consigneeRemark;
    }

    public function getInsuredPriceFlag()
    {
        return $this->params['insuredPriceFlag'];
    }

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->params['insuredPriceFlag'] = $insuredPriceFlag;
    }

    public function getInsuredValue()
    {
        return $this->params['insuredValue'];
    }

    public function setInsuredValue($insuredValue)
    {
        $this->params['insuredValue'] = $insuredValue;
    }

    public function getInsuredFee()
    {
        return $this->params['insuredFee'];
    }

    public function setInsuredFee($insuredFee)
    {
        $this->params['insuredFee'] = $insuredFee;
    }

    public function getShopNo()
    {
        return $this->params['shopNo'];
    }

    public function setShopNo($shopNo)
    {
        $this->params['shopNo'] = $shopNo;
    }

    public function getIsSupervise()
    {
        return $this->params['isSupervise'];
    }

    public function setIsSupervise($isSupervise)
    {
        $this->params['isSupervise'] = $isSupervise;
    }

    public function getInitalRequest()
    {
        return $this->params['initalRequest'];
    }

    public function setInitalRequest($initalRequest)
    {
        $this->params['initalRequest'] = $initalRequest;
    }

    public function getInitalResponse()
    {
        return $this->params['initalResponse'];
    }

    public function setInitalResponse($initalResponse)
    {
        $this->params['initalResponse'] = $initalResponse;
    }

    public function getPayTransactionIdYh()
    {
        return $this->params['payTransactionIdYh'];
    }

    public function setPayTransactionIdYh($payTransactionIdYh)
    {
        $this->params['payTransactionIdYh'] = $payTransactionIdYh;
    }

    public function getIsvParentId()
    {
        return $this->params['isvParentId'];
    }

    public function setIsvParentId($isvParentId)
    {
        $this->params['isvParentId'] = $isvParentId;
    }

    public function getIsvOrderIdList()
    {
        return $this->params['isvOrderIdList'];
    }

    public function setIsvOrderIdList($isvOrderIdList)
    {
        $this->params['isvOrderIdList'] = $isvOrderIdList;
    }

    public function getTotalAmount()
    {
        return $this->params['totalAmount'];
    }

    public function setTotalAmount($totalAmount)
    {
        $this->params['totalAmount'] = $totalAmount;
    }

    public function getVerDept()
    {
        return $this->params['verDept'];
    }

    public function setVerDept($verDept)
    {
        $this->params['verDept'] = $verDept;
    }

    public function getPayType()
    {
        return $this->params['payType'];
    }

    public function setPayType($payType)
    {
        $this->params['payType'] = $payType;
    }

    public function getRecpAccount()
    {
        return $this->params['recpAccount'];
    }

    public function setRecpAccount($recpAccount)
    {
        $this->params['recpAccount'] = $recpAccount;
    }

    public function getRecpCode()
    {
        return $this->params['recpCode'];
    }

    public function setRecpCode($recpCode)
    {
        $this->params['recpCode'] = $recpCode;
    }

    public function getRecpName()
    {
        return $this->params['recpName'];
    }

    public function setRecpName($recpName)
    {
        $this->params['recpName'] = $recpName;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
