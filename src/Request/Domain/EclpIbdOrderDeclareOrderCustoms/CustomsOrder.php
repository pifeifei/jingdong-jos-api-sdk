<?php

namespace ACES\Request\Domain\EclpIbdOrderDeclareOrderCustoms;

class CustomsOrder
{
    private $params = [];
    private $isvUUID;
    private $isvSource;
    private $platformId;
    private $platformName;
    private $platformType;
    private $spSoNo;
    private $deptNo;
    private $inJdwms;
    private $salesPlatformCreateTime;
    private $consigneeName;
    private $consigneeMobile;
    private $consigneePhone;
    private $consigneeEmail;
    private $consigneeAddress;
    private $consigneePostcode;
    private $consigneeCountry;
    private $addressProvince;
    private $addressCity;
    private $addressCounty;
    private $addressTown;
    private $declareOrder;
    private $ccProvider;
    private $ccProviderName;
    private $postType;
    private $pattern;
    private $customs;
    private $ebpCode;
    private $ebpName;
    private $ebcCode;
    private $ebcName;
    private $delivery;
    private $discount;
    private $discountNote;
    private $istax;
    private $taxTotal;
    private $freight;
    private $otherPrice;
    private $goodsValue;
    private $weight;
    private $netWeight;
    private $batchNumbers;
    private $buyerRegNo;
    private $buyerPhone;
    private $buyerName;
    private $buyerIdType;
    private $buyerIdNumber;
    private $senderName;
    private $senderCompanyName;
    private $senderCountry;
    private $senderZip;
    private $senderCity;
    private $senderProvince;
    private $senderTel;
    private $senderAddr;
    private $customsRemark;
    private $declarePaymentList;
    private $paymentType;
    private $payCode;
    private $payName;
    private $payTransactionId;
    private $currency;
    private $paymentConfirmTime;
    private $shouldPay;
    private $receiveNo;
    private $payRemark;
    private $declareWaybill;
    private $logisticsCode;
    private $logisticsName;
    private $bdOwnerNo;
    private $logisticsNo;
    private $packNo;
    private $logisticsRemark;
    private $isDelivery;
    private $receivable;
    private $consigneeRemark;
    private $insuredPriceFlag;
    private $insuredValue;
    private $insuredFee;
    private $shopNo;
    private $isSupervise;
    private $initalRequest;
    private $initalResponse;
    private $payTransactionIdYh;
    private $isvParentId;
    private $isvOrderIdList;
    private $totalAmount;
    private $verDept;
    private $payType;
    private $recpAccount;
    private $recpCode;
    private $recpName;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.isv.Ddomain.so.OrderCustomsParam';
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    public function setIsvUUID($isvUUID)
    {
        $this->params['isvUUID'] = $isvUUID;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    public function setIsvSource($isvSource)
    {
        $this->params['isvSource'] = $isvSource;
    }

    public function getPlatformId()
    {
        return $this->platformId;
    }

    public function setPlatformId($platformId)
    {
        $this->params['platformId'] = $platformId;
    }

    public function getPlatformName()
    {
        return $this->platformName;
    }

    public function setPlatformName($platformName)
    {
        $this->params['platformName'] = $platformName;
    }

    public function getPlatformType()
    {
        return $this->platformType;
    }

    public function setPlatformType($platformType)
    {
        $this->params['platformType'] = $platformType;
    }

    public function getSpSoNo()
    {
        return $this->spSoNo;
    }

    public function setSpSoNo($spSoNo)
    {
        $this->params['spSoNo'] = $spSoNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getInJdwms()
    {
        return $this->inJdwms;
    }

    public function setInJdwms($inJdwms)
    {
        $this->params['inJdwms'] = $inJdwms;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->params['salesPlatformCreateTime'] = $salesPlatformCreateTime;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    public function setConsigneeName($consigneeName)
    {
        $this->params['consigneeName'] = $consigneeName;
    }

    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->params['consigneeMobile'] = $consigneeMobile;
    }

    public function getConsigneePhone()
    {
        return $this->consigneePhone;
    }

    public function setConsigneePhone($consigneePhone)
    {
        $this->params['consigneePhone'] = $consigneePhone;
    }

    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->params['consigneeEmail'] = $consigneeEmail;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->params['consigneeAddress'] = $consigneeAddress;
    }

    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->params['consigneePostcode'] = $consigneePostcode;
    }

    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    public function setConsigneeCountry($consigneeCountry)
    {
        $this->params['consigneeCountry'] = $consigneeCountry;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    public function setAddressProvince($addressProvince)
    {
        $this->params['addressProvince'] = $addressProvince;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    public function setAddressCity($addressCity)
    {
        $this->params['addressCity'] = $addressCity;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    public function setAddressCounty($addressCounty)
    {
        $this->params['addressCounty'] = $addressCounty;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

    public function setAddressTown($addressTown)
    {
        $this->params['addressTown'] = $addressTown;
    }

    public function getDeclareOrder()
    {
        return $this->declareOrder;
    }

    public function setDeclareOrder($declareOrder)
    {
        $this->params['declareOrder'] = $declareOrder;
    }

    public function getCcProvider()
    {
        return $this->ccProvider;
    }

    public function setCcProvider($ccProvider)
    {
        $this->params['ccProvider'] = $ccProvider;
    }

    public function getCcProviderName()
    {
        return $this->ccProviderName;
    }

    public function setCcProviderName($ccProviderName)
    {
        $this->params['ccProviderName'] = $ccProviderName;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    public function setPostType($postType)
    {
        $this->params['postType'] = $postType;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    public function setPattern($pattern)
    {
        $this->params['pattern'] = $pattern;
    }

    public function getCustoms()
    {
        return $this->customs;
    }

    public function setCustoms($customs)
    {
        $this->params['customs'] = $customs;
    }

    public function getEbpCode()
    {
        return $this->ebpCode;
    }

    public function setEbpCode($ebpCode)
    {
        $this->params['ebpCode'] = $ebpCode;
    }

    public function getEbpName()
    {
        return $this->ebpName;
    }

    public function setEbpName($ebpName)
    {
        $this->params['ebpName'] = $ebpName;
    }

    public function getEbcCode()
    {
        return $this->ebcCode;
    }

    public function setEbcCode($ebcCode)
    {
        $this->params['ebcCode'] = $ebcCode;
    }

    public function getEbcName()
    {
        return $this->ebcName;
    }

    public function setEbcName($ebcName)
    {
        $this->params['ebcName'] = $ebcName;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    public function setDelivery($delivery)
    {
        $this->params['delivery'] = $delivery;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->params['discount'] = $discount;
    }

    public function getDiscountNote()
    {
        return $this->discountNote;
    }

    public function setDiscountNote($discountNote)
    {
        $this->params['discountNote'] = $discountNote;
    }

    public function getIstax()
    {
        return $this->istax;
    }

    public function setIstax($istax)
    {
        $this->params['istax'] = $istax;
    }

    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    public function setTaxTotal($taxTotal)
    {
        $this->params['taxTotal'] = $taxTotal;
    }

    public function getFreight()
    {
        return $this->freight;
    }

    public function setFreight($freight)
    {
        $this->params['freight'] = $freight;
    }

    public function getOtherPrice()
    {
        return $this->otherPrice;
    }

    public function setOtherPrice($otherPrice)
    {
        $this->params['otherPrice'] = $otherPrice;
    }

    public function getGoodsValue()
    {
        return $this->goodsValue;
    }

    public function setGoodsValue($goodsValue)
    {
        $this->params['goodsValue'] = $goodsValue;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->params['weight'] = $weight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    public function setNetWeight($netWeight)
    {
        $this->params['netWeight'] = $netWeight;
    }

    public function getBatchNumbers()
    {
        return $this->batchNumbers;
    }

    public function setBatchNumbers($batchNumbers)
    {
        $this->params['batchNumbers'] = $batchNumbers;
    }

    public function getBuyerRegNo()
    {
        return $this->buyerRegNo;
    }

    public function setBuyerRegNo($buyerRegNo)
    {
        $this->params['buyerRegNo'] = $buyerRegNo;
    }

    public function getBuyerPhone()
    {
        return $this->buyerPhone;
    }

    public function setBuyerPhone($buyerPhone)
    {
        $this->params['buyerPhone'] = $buyerPhone;
    }

    public function getBuyerName()
    {
        return $this->buyerName;
    }

    public function setBuyerName($buyerName)
    {
        $this->params['buyerName'] = $buyerName;
    }

    public function getBuyerIdType()
    {
        return $this->buyerIdType;
    }

    public function setBuyerIdType($buyerIdType)
    {
        $this->params['buyerIdType'] = $buyerIdType;
    }

    public function getBuyerIdNumber()
    {
        return $this->buyerIdNumber;
    }

    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->params['buyerIdNumber'] = $buyerIdNumber;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->params['senderName'] = $senderName;
    }

    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }

    public function setSenderCompanyName($senderCompanyName)
    {
        $this->params['senderCompanyName'] = $senderCompanyName;
    }

    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    public function setSenderCountry($senderCountry)
    {
        $this->params['senderCountry'] = $senderCountry;
    }

    public function getSenderZip()
    {
        return $this->senderZip;
    }

    public function setSenderZip($senderZip)
    {
        $this->params['senderZip'] = $senderZip;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

    public function setSenderCity($senderCity)
    {
        $this->params['senderCity'] = $senderCity;
    }

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

    public function setSenderProvince($senderProvince)
    {
        $this->params['senderProvince'] = $senderProvince;
    }

    public function getSenderTel()
    {
        return $this->senderTel;
    }

    public function setSenderTel($senderTel)
    {
        $this->params['senderTel'] = $senderTel;
    }

    public function getSenderAddr()
    {
        return $this->senderAddr;
    }

    public function setSenderAddr($senderAddr)
    {
        $this->params['senderAddr'] = $senderAddr;
    }

    public function getCustomsRemark()
    {
        return $this->customsRemark;
    }

    public function setCustomsRemark($customsRemark)
    {
        $this->params['customsRemark'] = $customsRemark;
    }

    public function getDeclarePaymentList()
    {
        return $this->declarePaymentList;
    }

    public function setDeclarePaymentList($declarePaymentList)
    {
        $this->params['declarePaymentList'] = $declarePaymentList;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    public function setPaymentType($paymentType)
    {
        $this->params['paymentType'] = $paymentType;
    }

    public function getPayCode()
    {
        return $this->payCode;
    }

    public function setPayCode($payCode)
    {
        $this->params['payCode'] = $payCode;
    }

    public function getPayName()
    {
        return $this->payName;
    }

    public function setPayName($payName)
    {
        $this->params['payName'] = $payName;
    }

    public function getPayTransactionId()
    {
        return $this->payTransactionId;
    }

    public function setPayTransactionId($payTransactionId)
    {
        $this->params['payTransactionId'] = $payTransactionId;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->params['currency'] = $currency;
    }

    public function getPaymentConfirmTime()
    {
        return $this->paymentConfirmTime;
    }

    public function setPaymentConfirmTime($paymentConfirmTime)
    {
        $this->params['paymentConfirmTime'] = $paymentConfirmTime;
    }

    public function getShouldPay()
    {
        return $this->shouldPay;
    }

    public function setShouldPay($shouldPay)
    {
        $this->params['shouldPay'] = $shouldPay;
    }

    public function getReceiveNo()
    {
        return $this->receiveNo;
    }

    public function setReceiveNo($receiveNo)
    {
        $this->params['receiveNo'] = $receiveNo;
    }

    public function getPayRemark()
    {
        return $this->payRemark;
    }

    public function setPayRemark($payRemark)
    {
        $this->params['payRemark'] = $payRemark;
    }

    public function getDeclareWaybill()
    {
        return $this->declareWaybill;
    }

    public function setDeclareWaybill($declareWaybill)
    {
        $this->params['declareWaybill'] = $declareWaybill;
    }

    public function getLogisticsCode()
    {
        return $this->logisticsCode;
    }

    public function setLogisticsCode($logisticsCode)
    {
        $this->params['logisticsCode'] = $logisticsCode;
    }

    public function getLogisticsName()
    {
        return $this->logisticsName;
    }

    public function setLogisticsName($logisticsName)
    {
        $this->params['logisticsName'] = $logisticsName;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->params['bdOwnerNo'] = $bdOwnerNo;
    }

    public function getLogisticsNo()
    {
        return $this->logisticsNo;
    }

    public function setLogisticsNo($logisticsNo)
    {
        $this->params['logisticsNo'] = $logisticsNo;
    }

    public function getPackNo()
    {
        return $this->packNo;
    }

    public function setPackNo($packNo)
    {
        $this->params['packNo'] = $packNo;
    }

    public function getLogisticsRemark()
    {
        return $this->logisticsRemark;
    }

    public function setLogisticsRemark($logisticsRemark)
    {
        $this->params['logisticsRemark'] = $logisticsRemark;
    }

    public function getIsDelivery()
    {
        return $this->isDelivery;
    }

    public function setIsDelivery($isDelivery)
    {
        $this->params['isDelivery'] = $isDelivery;
    }

    public function getReceivable()
    {
        return $this->receivable;
    }

    public function setReceivable($receivable)
    {
        $this->params['receivable'] = $receivable;
    }

    public function getConsigneeRemark()
    {
        return $this->consigneeRemark;
    }

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->params['consigneeRemark'] = $consigneeRemark;
    }

    public function getInsuredPriceFlag()
    {
        return $this->insuredPriceFlag;
    }

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->params['insuredPriceFlag'] = $insuredPriceFlag;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    public function setInsuredValue($insuredValue)
    {
        $this->params['insuredValue'] = $insuredValue;
    }

    public function getInsuredFee()
    {
        return $this->insuredFee;
    }

    public function setInsuredFee($insuredFee)
    {
        $this->params['insuredFee'] = $insuredFee;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function setShopNo($shopNo)
    {
        $this->params['shopNo'] = $shopNo;
    }

    public function getIsSupervise()
    {
        return $this->isSupervise;
    }

    public function setIsSupervise($isSupervise)
    {
        $this->params['isSupervise'] = $isSupervise;
    }

    public function getInitalRequest()
    {
        return $this->initalRequest;
    }

    public function setInitalRequest($initalRequest)
    {
        $this->params['initalRequest'] = $initalRequest;
    }

    public function getInitalResponse()
    {
        return $this->initalResponse;
    }

    public function setInitalResponse($initalResponse)
    {
        $this->params['initalResponse'] = $initalResponse;
    }

    public function getPayTransactionIdYh()
    {
        return $this->payTransactionIdYh;
    }

    public function setPayTransactionIdYh($payTransactionIdYh)
    {
        $this->params['payTransactionIdYh'] = $payTransactionIdYh;
    }

    public function getIsvParentId()
    {
        return $this->isvParentId;
    }

    public function setIsvParentId($isvParentId)
    {
        $this->params['isvParentId'] = $isvParentId;
    }

    public function getIsvOrderIdList()
    {
        return $this->isvOrderIdList;
    }

    public function setIsvOrderIdList($isvOrderIdList)
    {
        $this->params['isvOrderIdList'] = $isvOrderIdList;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function setTotalAmount($totalAmount)
    {
        $this->params['totalAmount'] = $totalAmount;
    }

    public function getVerDept()
    {
        return $this->verDept;
    }

    public function setVerDept($verDept)
    {
        $this->params['verDept'] = $verDept;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    public function setPayType($payType)
    {
        $this->params['payType'] = $payType;
    }

    public function getRecpAccount()
    {
        return $this->recpAccount;
    }

    public function setRecpAccount($recpAccount)
    {
        $this->params['recpAccount'] = $recpAccount;
    }

    public function getRecpCode()
    {
        return $this->recpCode;
    }

    public function setRecpCode($recpCode)
    {
        $this->params['recpCode'] = $recpCode;
    }

    public function getRecpName()
    {
        return $this->recpName;
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
