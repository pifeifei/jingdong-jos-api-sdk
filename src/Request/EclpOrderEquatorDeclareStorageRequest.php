<?php

namespace ACES\Request;


class EclpOrderEquatorDeclareStorageRequest
{
    private $apiParas = array();
    private $version;
    private $isvUUID;
    private $isvSource;
    private $platformId;
    private $platformName;
    private $platformType;
    private $spSoNo;
    private $deptNo;
    private $inJdwms;
    private $salesPlatformCreateTime;
    private $venderId;
    private $venderName;
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
    private $soType;
    private $expectDate;
    private $invoiceTitle;
    private $invoiceContent;
    private $declareOrder;
    private $ccProvider;
    private $ccProviderName;
    private $postType;
    private $pattern;
    private $customs;
    private $warehouseNo;
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
    private $packageMark;
    private $businessType;
    private $destinationCode;
    private $destinationName;
    private $sendWebsiteCode;
    private $sendWebsiteName;
    private $sendMode;
    private $receiveMode;
    private $appointDeliveryTime;
    private $insuredPriceFlag;
    private $insuredValue;
    private $insuredFee;
    private $thirdPayment;
    private $monthlyAccount;
    private $shipment;
    private $sellerRemark;
    private $thirdSite;
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
    private $consNameEN;
    private $consAddressEN;
    private $senderNameEN;
    private $senderCityEN;
    private $senderAddrEN;
    private $wrapType;
    private $consigneeIdType;
    private $gnum;
    private $isvGoodsNo;
    private $spGoodsNo;
    private $quantity;
    private $price;
    private $goodsRemark;
    private $itemLink;
    private $productionDate;
    private $expirationDate;
    private $packBatchNo;
    private $poNo;
    private $lot;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.equatorDeclareStorage";
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

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID = $isvUUID;
        $this->apiParas["isvUUID"] = $isvUUID;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    public function setIsvSource($isvSource)
    {
        $this->isvSource = $isvSource;
        $this->apiParas["isvSource"] = $isvSource;
    }

    public function getPlatformId()
    {
        return $this->platformId;
    }

    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
        $this->apiParas["platformId"] = $platformId;
    }

    public function getPlatformName()
    {
        return $this->platformName;
    }

    public function setPlatformName($platformName)
    {
        $this->platformName = $platformName;
        $this->apiParas["platformName"] = $platformName;
    }

    public function getPlatformType()
    {
        return $this->platformType;
    }

    public function setPlatformType($platformType)
    {
        $this->platformType = $platformType;
        $this->apiParas["platformType"] = $platformType;
    }

    public function getSpSoNo()
    {
        return $this->spSoNo;
    }

    public function setSpSoNo($spSoNo)
    {
        $this->spSoNo = $spSoNo;
        $this->apiParas["spSoNo"] = $spSoNo;
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

    public function getInJdwms()
    {
        return $this->inJdwms;
    }

    public function setInJdwms($inJdwms)
    {
        $this->inJdwms = $inJdwms;
        $this->apiParas["inJdwms"] = $inJdwms;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->salesPlatformCreateTime = $salesPlatformCreateTime;
        $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    public function setVenderId($venderId)
    {
        $this->venderId = $venderId;
        $this->apiParas["venderId"] = $venderId;
    }

    public function getVenderName()
    {
        return $this->venderName;
    }

    public function setVenderName($venderName)
    {
        $this->venderName = $venderName;
        $this->apiParas["venderName"] = $venderName;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName = $consigneeName;
        $this->apiParas["consigneeName"] = $consigneeName;
    }

    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->consigneeMobile = $consigneeMobile;
        $this->apiParas["consigneeMobile"] = $consigneeMobile;
    }

    public function getConsigneePhone()
    {
        return $this->consigneePhone;
    }

    public function setConsigneePhone($consigneePhone)
    {
        $this->consigneePhone = $consigneePhone;
        $this->apiParas["consigneePhone"] = $consigneePhone;
    }

    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->consigneeEmail = $consigneeEmail;
        $this->apiParas["consigneeEmail"] = $consigneeEmail;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress = $consigneeAddress;
        $this->apiParas["consigneeAddress"] = $consigneeAddress;
    }

    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->consigneePostcode = $consigneePostcode;
        $this->apiParas["consigneePostcode"] = $consigneePostcode;
    }

    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    public function setConsigneeCountry($consigneeCountry)
    {
        $this->consigneeCountry = $consigneeCountry;
        $this->apiParas["consigneeCountry"] = $consigneeCountry;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince = $addressProvince;
        $this->apiParas["addressProvince"] = $addressProvince;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;
        $this->apiParas["addressCity"] = $addressCity;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    public function setAddressCounty($addressCounty)
    {
        $this->addressCounty = $addressCounty;
        $this->apiParas["addressCounty"] = $addressCounty;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

    public function setAddressTown($addressTown)
    {
        $this->addressTown = $addressTown;
        $this->apiParas["addressTown"] = $addressTown;
    }

    public function getSoType()
    {
        return $this->soType;
    }

    public function setSoType($soType)
    {
        $this->soType = $soType;
        $this->apiParas["soType"] = $soType;
    }

    public function getExpectDate()
    {
        return $this->expectDate;
    }

    public function setExpectDate($expectDate)
    {
        $this->expectDate = $expectDate;
        $this->apiParas["expectDate"] = $expectDate;
    }

    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle = $invoiceTitle;
        $this->apiParas["invoiceTitle"] = $invoiceTitle;
    }

    public function getInvoiceContent()
    {
        return $this->invoiceContent;
    }

    public function setInvoiceContent($invoiceContent)
    {
        $this->invoiceContent = $invoiceContent;
        $this->apiParas["invoiceContent"] = $invoiceContent;
    }

    public function getDeclareOrder()
    {
        return $this->declareOrder;
    }

    public function setDeclareOrder($declareOrder)
    {
        $this->declareOrder = $declareOrder;
        $this->apiParas["declareOrder"] = $declareOrder;
    }

    public function getCcProvider()
    {
        return $this->ccProvider;
    }

    public function setCcProvider($ccProvider)
    {
        $this->ccProvider = $ccProvider;
        $this->apiParas["ccProvider"] = $ccProvider;
    }

    public function getCcProviderName()
    {
        return $this->ccProviderName;
    }

    public function setCcProviderName($ccProviderName)
    {
        $this->ccProviderName = $ccProviderName;
        $this->apiParas["ccProviderName"] = $ccProviderName;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    public function setPostType($postType)
    {
        $this->postType = $postType;
        $this->apiParas["postType"] = $postType;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        $this->apiParas["pattern"] = $pattern;
    }

    public function getCustoms()
    {
        return $this->customs;
    }

    public function setCustoms($customs)
    {
        $this->customs = $customs;
        $this->apiParas["customs"] = $customs;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getEbpCode()
    {
        return $this->ebpCode;
    }

    public function setEbpCode($ebpCode)
    {
        $this->ebpCode = $ebpCode;
        $this->apiParas["ebpCode"] = $ebpCode;
    }

    public function getEbpName()
    {
        return $this->ebpName;
    }

    public function setEbpName($ebpName)
    {
        $this->ebpName = $ebpName;
        $this->apiParas["ebpName"] = $ebpName;
    }

    public function getEbcCode()
    {
        return $this->ebcCode;
    }

    public function setEbcCode($ebcCode)
    {
        $this->ebcCode = $ebcCode;
        $this->apiParas["ebcCode"] = $ebcCode;
    }

    public function getEbcName()
    {
        return $this->ebcName;
    }

    public function setEbcName($ebcName)
    {
        $this->ebcName = $ebcName;
        $this->apiParas["ebcName"] = $ebcName;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        $this->apiParas["delivery"] = $delivery;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
        $this->apiParas["discount"] = $discount;
    }

    public function getDiscountNote()
    {
        return $this->discountNote;
    }

    public function setDiscountNote($discountNote)
    {
        $this->discountNote = $discountNote;
        $this->apiParas["discountNote"] = $discountNote;
    }

    public function getIstax()
    {
        return $this->istax;
    }

    public function setIstax($istax)
    {
        $this->istax = $istax;
        $this->apiParas["istax"] = $istax;
    }

    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    public function setTaxTotal($taxTotal)
    {
        $this->taxTotal = $taxTotal;
        $this->apiParas["taxTotal"] = $taxTotal;
    }

    public function getFreight()
    {
        return $this->freight;
    }

    public function setFreight($freight)
    {
        $this->freight = $freight;
        $this->apiParas["freight"] = $freight;
    }

    public function getOtherPrice()
    {
        return $this->otherPrice;
    }

    public function setOtherPrice($otherPrice)
    {
        $this->otherPrice = $otherPrice;
        $this->apiParas["otherPrice"] = $otherPrice;
    }

    public function getGoodsValue()
    {
        return $this->goodsValue;
    }

    public function setGoodsValue($goodsValue)
    {
        $this->goodsValue = $goodsValue;
        $this->apiParas["goodsValue"] = $goodsValue;
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

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
        $this->apiParas["netWeight"] = $netWeight;
    }

    public function getBatchNumbers()
    {
        return $this->batchNumbers;
    }

    public function setBatchNumbers($batchNumbers)
    {
        $this->batchNumbers = $batchNumbers;
        $this->apiParas["batchNumbers"] = $batchNumbers;
    }

    public function getBuyerRegNo()
    {
        return $this->buyerRegNo;
    }

    public function setBuyerRegNo($buyerRegNo)
    {
        $this->buyerRegNo = $buyerRegNo;
        $this->apiParas["buyerRegNo"] = $buyerRegNo;
    }

    public function getBuyerPhone()
    {
        return $this->buyerPhone;
    }

    public function setBuyerPhone($buyerPhone)
    {
        $this->buyerPhone = $buyerPhone;
        $this->apiParas["buyerPhone"] = $buyerPhone;
    }

    public function getBuyerName()
    {
        return $this->buyerName;
    }

    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;
        $this->apiParas["buyerName"] = $buyerName;
    }

    public function getBuyerIdType()
    {
        return $this->buyerIdType;
    }

    public function setBuyerIdType($buyerIdType)
    {
        $this->buyerIdType = $buyerIdType;
        $this->apiParas["buyerIdType"] = $buyerIdType;
    }

    public function getBuyerIdNumber()
    {
        return $this->buyerIdNumber;
    }

    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->buyerIdNumber = $buyerIdNumber;
        $this->apiParas["buyerIdNumber"] = $buyerIdNumber;
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

    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }

    public function setSenderCompanyName($senderCompanyName)
    {
        $this->senderCompanyName = $senderCompanyName;
        $this->apiParas["senderCompanyName"] = $senderCompanyName;
    }

    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    public function setSenderCountry($senderCountry)
    {
        $this->senderCountry = $senderCountry;
        $this->apiParas["senderCountry"] = $senderCountry;
    }

    public function getSenderZip()
    {
        return $this->senderZip;
    }

    public function setSenderZip($senderZip)
    {
        $this->senderZip = $senderZip;
        $this->apiParas["senderZip"] = $senderZip;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

    public function setSenderCity($senderCity)
    {
        $this->senderCity = $senderCity;
        $this->apiParas["senderCity"] = $senderCity;
    }

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

    public function setSenderProvince($senderProvince)
    {
        $this->senderProvince = $senderProvince;
        $this->apiParas["senderProvince"] = $senderProvince;
    }

    public function getSenderTel()
    {
        return $this->senderTel;
    }

    public function setSenderTel($senderTel)
    {
        $this->senderTel = $senderTel;
        $this->apiParas["senderTel"] = $senderTel;
    }

    public function getSenderAddr()
    {
        return $this->senderAddr;
    }

    public function setSenderAddr($senderAddr)
    {
        $this->senderAddr = $senderAddr;
        $this->apiParas["senderAddr"] = $senderAddr;
    }

    public function getCustomsRemark()
    {
        return $this->customsRemark;
    }

    public function setCustomsRemark($customsRemark)
    {
        $this->customsRemark = $customsRemark;
        $this->apiParas["customsRemark"] = $customsRemark;
    }

    public function getDeclarePaymentList()
    {
        return $this->declarePaymentList;
    }

    public function setDeclarePaymentList($declarePaymentList)
    {
        $this->declarePaymentList = $declarePaymentList;
        $this->apiParas["declarePaymentList"] = $declarePaymentList;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        $this->apiParas["paymentType"] = $paymentType;
    }

    public function getPayCode()
    {
        return $this->payCode;
    }

    public function setPayCode($payCode)
    {
        $this->payCode = $payCode;
        $this->apiParas["payCode"] = $payCode;
    }

    public function getPayName()
    {
        return $this->payName;
    }

    public function setPayName($payName)
    {
        $this->payName = $payName;
        $this->apiParas["payName"] = $payName;
    }

    public function getPayTransactionId()
    {
        return $this->payTransactionId;
    }

    public function setPayTransactionId($payTransactionId)
    {
        $this->payTransactionId = $payTransactionId;
        $this->apiParas["payTransactionId"] = $payTransactionId;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
        $this->apiParas["currency"] = $currency;
    }

    public function getPaymentConfirmTime()
    {
        return $this->paymentConfirmTime;
    }

    public function setPaymentConfirmTime($paymentConfirmTime)
    {
        $this->paymentConfirmTime = $paymentConfirmTime;
        $this->apiParas["paymentConfirmTime"] = $paymentConfirmTime;
    }

    public function getShouldPay()
    {
        return $this->shouldPay;
    }

    public function setShouldPay($shouldPay)
    {
        $this->shouldPay = $shouldPay;
        $this->apiParas["shouldPay"] = $shouldPay;
    }

    public function getReceiveNo()
    {
        return $this->receiveNo;
    }

    public function setReceiveNo($receiveNo)
    {
        $this->receiveNo = $receiveNo;
        $this->apiParas["receiveNo"] = $receiveNo;
    }

    public function getPayRemark()
    {
        return $this->payRemark;
    }

    public function setPayRemark($payRemark)
    {
        $this->payRemark = $payRemark;
        $this->apiParas["payRemark"] = $payRemark;
    }

    public function getDeclareWaybill()
    {
        return $this->declareWaybill;
    }

    public function setDeclareWaybill($declareWaybill)
    {
        $this->declareWaybill = $declareWaybill;
        $this->apiParas["declareWaybill"] = $declareWaybill;
    }

    public function getLogisticsCode()
    {
        return $this->logisticsCode;
    }

    public function setLogisticsCode($logisticsCode)
    {
        $this->logisticsCode = $logisticsCode;
        $this->apiParas["logisticsCode"] = $logisticsCode;
    }

    public function getLogisticsName()
    {
        return $this->logisticsName;
    }

    public function setLogisticsName($logisticsName)
    {
        $this->logisticsName = $logisticsName;
        $this->apiParas["logisticsName"] = $logisticsName;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->bdOwnerNo = $bdOwnerNo;
        $this->apiParas["bdOwnerNo"] = $bdOwnerNo;
    }

    public function getLogisticsNo()
    {
        return $this->logisticsNo;
    }

    public function setLogisticsNo($logisticsNo)
    {
        $this->logisticsNo = $logisticsNo;
        $this->apiParas["logisticsNo"] = $logisticsNo;
    }

    public function getPackNo()
    {
        return $this->packNo;
    }

    public function setPackNo($packNo)
    {
        $this->packNo = $packNo;
        $this->apiParas["packNo"] = $packNo;
    }

    public function getLogisticsRemark()
    {
        return $this->logisticsRemark;
    }

    public function setLogisticsRemark($logisticsRemark)
    {
        $this->logisticsRemark = $logisticsRemark;
        $this->apiParas["logisticsRemark"] = $logisticsRemark;
    }

    public function getIsDelivery()
    {
        return $this->isDelivery;
    }

    public function setIsDelivery($isDelivery)
    {
        $this->isDelivery = $isDelivery;
        $this->apiParas["isDelivery"] = $isDelivery;
    }

    public function getReceivable()
    {
        return $this->receivable;
    }

    public function setReceivable($receivable)
    {
        $this->receivable = $receivable;
        $this->apiParas["receivable"] = $receivable;
    }

    public function getConsigneeRemark()
    {
        return $this->consigneeRemark;
    }

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->consigneeRemark = $consigneeRemark;
        $this->apiParas["consigneeRemark"] = $consigneeRemark;
    }

    public function getPackageMark()
    {
        return $this->packageMark;
    }

    public function setPackageMark($packageMark)
    {
        $this->packageMark = $packageMark;
        $this->apiParas["packageMark"] = $packageMark;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
        $this->apiParas["businessType"] = $businessType;
    }

    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
        $this->apiParas["destinationCode"] = $destinationCode;
    }

    public function getDestinationName()
    {
        return $this->destinationName;
    }

    public function setDestinationName($destinationName)
    {
        $this->destinationName = $destinationName;
        $this->apiParas["destinationName"] = $destinationName;
    }

    public function getSendWebsiteCode()
    {
        return $this->sendWebsiteCode;
    }

    public function setSendWebsiteCode($sendWebsiteCode)
    {
        $this->sendWebsiteCode = $sendWebsiteCode;
        $this->apiParas["sendWebsiteCode"] = $sendWebsiteCode;
    }

    public function getSendWebsiteName()
    {
        return $this->sendWebsiteName;
    }

    public function setSendWebsiteName($sendWebsiteName)
    {
        $this->sendWebsiteName = $sendWebsiteName;
        $this->apiParas["sendWebsiteName"] = $sendWebsiteName;
    }

    public function getSendMode()
    {
        return $this->sendMode;
    }

    public function setSendMode($sendMode)
    {
        $this->sendMode = $sendMode;
        $this->apiParas["sendMode"] = $sendMode;
    }

    public function getReceiveMode()
    {
        return $this->receiveMode;
    }

    public function setReceiveMode($receiveMode)
    {
        $this->receiveMode = $receiveMode;
        $this->apiParas["receiveMode"] = $receiveMode;
    }

    public function getAppointDeliveryTime()
    {
        return $this->appointDeliveryTime;
    }

    public function setAppointDeliveryTime($appointDeliveryTime)
    {
        $this->appointDeliveryTime = $appointDeliveryTime;
        $this->apiParas["appointDeliveryTime"] = $appointDeliveryTime;
    }

    public function getInsuredPriceFlag()
    {
        return $this->insuredPriceFlag;
    }

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->insuredPriceFlag = $insuredPriceFlag;
        $this->apiParas["insuredPriceFlag"] = $insuredPriceFlag;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
        $this->apiParas["insuredValue"] = $insuredValue;
    }

    public function getInsuredFee()
    {
        return $this->insuredFee;
    }

    public function setInsuredFee($insuredFee)
    {
        $this->insuredFee = $insuredFee;
        $this->apiParas["insuredFee"] = $insuredFee;
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

    public function getMonthlyAccount()
    {
        return $this->monthlyAccount;
    }

    public function setMonthlyAccount($monthlyAccount)
    {
        $this->monthlyAccount = $monthlyAccount;
        $this->apiParas["monthlyAccount"] = $monthlyAccount;
    }

    public function getShipment()
    {
        return $this->shipment;
    }

    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
        $this->apiParas["shipment"] = $shipment;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->sellerRemark = $sellerRemark;
        $this->apiParas["sellerRemark"] = $sellerRemark;
    }

    public function getThirdSite()
    {
        return $this->thirdSite;
    }

    public function setThirdSite($thirdSite)
    {
        $this->thirdSite = $thirdSite;
        $this->apiParas["thirdSite"] = $thirdSite;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        $this->apiParas["shopNo"] = $shopNo;
    }

    public function getIsSupervise()
    {
        return $this->isSupervise;
    }

    public function setIsSupervise($isSupervise)
    {
        $this->isSupervise = $isSupervise;
        $this->apiParas["isSupervise"] = $isSupervise;
    }

    public function getInitalRequest()
    {
        return $this->initalRequest;
    }

    public function setInitalRequest($initalRequest)
    {
        $this->initalRequest = $initalRequest;
        $this->apiParas["initalRequest"] = $initalRequest;
    }

    public function getInitalResponse()
    {
        return $this->initalResponse;
    }

    public function setInitalResponse($initalResponse)
    {
        $this->initalResponse = $initalResponse;
        $this->apiParas["initalResponse"] = $initalResponse;
    }

    public function getPayTransactionIdYh()
    {
        return $this->payTransactionIdYh;
    }

    public function setPayTransactionIdYh($payTransactionIdYh)
    {
        $this->payTransactionIdYh = $payTransactionIdYh;
        $this->apiParas["payTransactionIdYh"] = $payTransactionIdYh;
    }

    public function getIsvParentId()
    {
        return $this->isvParentId;
    }

    public function setIsvParentId($isvParentId)
    {
        $this->isvParentId = $isvParentId;
        $this->apiParas["isvParentId"] = $isvParentId;
    }

    public function getIsvOrderIdList()
    {
        return $this->isvOrderIdList;
    }

    public function setIsvOrderIdList($isvOrderIdList)
    {
        $this->isvOrderIdList = $isvOrderIdList;
        $this->apiParas["isvOrderIdList"] = $isvOrderIdList;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        $this->apiParas["totalAmount"] = $totalAmount;
    }

    public function getVerDept()
    {
        return $this->verDept;
    }

    public function setVerDept($verDept)
    {
        $this->verDept = $verDept;
        $this->apiParas["verDept"] = $verDept;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    public function setPayType($payType)
    {
        $this->payType = $payType;
        $this->apiParas["payType"] = $payType;
    }

    public function getRecpAccount()
    {
        return $this->recpAccount;
    }

    public function setRecpAccount($recpAccount)
    {
        $this->recpAccount = $recpAccount;
        $this->apiParas["recpAccount"] = $recpAccount;
    }

    public function getRecpCode()
    {
        return $this->recpCode;
    }

    public function setRecpCode($recpCode)
    {
        $this->recpCode = $recpCode;
        $this->apiParas["recpCode"] = $recpCode;
    }

    public function getRecpName()
    {
        return $this->recpName;
    }

    public function setRecpName($recpName)
    {
        $this->recpName = $recpName;
        $this->apiParas["recpName"] = $recpName;
    }

    public function getConsNameEN()
    {
        return $this->consNameEN;
    }

    public function setConsNameEN($consNameEN)
    {
        $this->consNameEN = $consNameEN;
        $this->apiParas["consNameEN"] = $consNameEN;
    }

    public function getConsAddressEN()
    {
        return $this->consAddressEN;
    }

    public function setConsAddressEN($consAddressEN)
    {
        $this->consAddressEN = $consAddressEN;
        $this->apiParas["consAddressEN"] = $consAddressEN;
    }

    public function getSenderNameEN()
    {
        return $this->senderNameEN;
    }

    public function setSenderNameEN($senderNameEN)
    {
        $this->senderNameEN = $senderNameEN;
        $this->apiParas["senderNameEN"] = $senderNameEN;
    }

    public function getSenderCityEN()
    {
        return $this->senderCityEN;
    }

    public function setSenderCityEN($senderCityEN)
    {
        $this->senderCityEN = $senderCityEN;
        $this->apiParas["senderCityEN"] = $senderCityEN;
    }

    public function getSenderAddrEN()
    {
        return $this->senderAddrEN;
    }

    public function setSenderAddrEN($senderAddrEN)
    {
        $this->senderAddrEN = $senderAddrEN;
        $this->apiParas["senderAddrEN"] = $senderAddrEN;
    }

    public function getWrapType()
    {
        return $this->wrapType;
    }

    public function setWrapType($wrapType)
    {
        $this->wrapType = $wrapType;
        $this->apiParas["wrapType"] = $wrapType;
    }

    public function getConsigneeIdType()
    {
        return $this->consigneeIdType;
    }

    public function setConsigneeIdType($consigneeIdType)
    {
        $this->consigneeIdType = $consigneeIdType;
        $this->apiParas["consigneeIdType"] = $consigneeIdType;
    }

    public function getGnum()
    {
        return $this->gnum;
    }

    public function setGnum($gnum)
    {
        $this->gnum = $gnum;
        $this->apiParas["gnum"] = $gnum;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getSpGoodsNo()
    {
        return $this->spGoodsNo;
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->spGoodsNo = $spGoodsNo;
        $this->apiParas["spGoodsNo"] = $spGoodsNo;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->apiParas["quantity"] = $quantity;
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

    public function getGoodsRemark()
    {
        return $this->goodsRemark;
    }

    public function setGoodsRemark($goodsRemark)
    {
        $this->goodsRemark = $goodsRemark;
        $this->apiParas["goodsRemark"] = $goodsRemark;
    }

    public function getItemLink()
    {
        return $this->itemLink;
    }

    public function setItemLink($itemLink)
    {
        $this->itemLink = $itemLink;
        $this->apiParas["itemLink"] = $itemLink;
    }

    public function getProductionDate()
    {
        return $this->productionDate;
    }

    public function setProductionDate($productionDate)
    {
        $this->productionDate = $productionDate;
        $this->apiParas["productionDate"] = $productionDate;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        $this->apiParas["expirationDate"] = $expirationDate;
    }

    public function getPackBatchNo()
    {
        return $this->packBatchNo;
    }

    public function setPackBatchNo($packBatchNo)
    {
        $this->packBatchNo = $packBatchNo;
        $this->apiParas["packBatchNo"] = $packBatchNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;
        $this->apiParas["poNo"] = $poNo;
    }

    public function getLot()
    {
        return $this->lot;
    }

    public function setLot($lot)
    {
        $this->lot = $lot;
        $this->apiParas["lot"] = $lot;
    }
}
