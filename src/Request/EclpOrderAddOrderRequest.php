<?php

namespace ACES\Request;


class EclpOrderAddOrderRequest
{
    private $apiParas = array();
    private $version;
    private $isvUUID;
    private $isvSource;
    private $shopNo;
    private $bdOwnerNo;
    private $departmentNo;
    private $warehouseNo;
    private $shipperNo;
    private $salesPlatformOrderNo;
    private $salePlatformSource;
    private $salesPlatformCreateTime;
    private $soType;
    private $consigneeName;
    private $consigneeMobile;
    private $consigneePhone;
    private $consigneeEmail;
    private $expectDate;
    private $addressProvince;
    private $addressCity;
    private $addressCounty;
    private $addressTown;
    private $consigneeAddress;
    private $consigneePostcode;
    private $receivable;
    private $consigneeRemark;
    private $orderMark;
    private $thirdWayBill;
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
    private $thirdPayment;
    private $monthlyAccount;
    private $shipment;
    private $sellerRemark;
    private $thirdSite;
    private $gatherCenterName;
    private $customsStatus;
    private $customerName;
    private $invoiceTitle;
    private $invoiceContent;
    private $goodsType;
    private $goodsLevel;
    private $customsPort;
    private $billType;
    private $orderPrice;
    private $wlyInfo;
    private $customerId;
    private $urgency;
    private $customerNo;
    private $storeName;
    private $invoiceState;
    private $invoiceType;
    private $invoiceNo;
    private $invoiceTax;
    private $bankName;
    private $bankAccount;
    private $address;
    private $phoneNumber;
    private $signType;
    private $signIDCode;
    private $supplierNo;
    private $agingType;
    private $sellerNote;
    private $supervisionCode;
    private $invoiceChecker;
    private $paymentType;
    private $saleType;
    private $inStorageNo;
    private $inStorageTime;
    private $inStorageRemark;
    private $grossReturnName;
    private $grossReturnPhone;
    private $grossReturnMobile;
    private $grossReturnAddress;
    private $isvPackTypeNo;
    private $addrAnalysis;
    private $printExtendInfo;
    private $logicParam;
    private $combineNo;
    private $activationService;
    private $randomInspection;
    private $VIPDeliWarehouse;
    private $customField;
    private $longitude;
    private $latitude;
    private $agingProductType;
    private $crossDockPriority;
    private $isvCompanyNo;
    private $orderPriority;
    private $orderBatchNo;
    private $orderBatchQty;
    private $productCode;
    private $vehicleType;
    private $isvSoType;
    private $checkDelivery;
    private $isvSoTypeName;
    private $quarantineCert;
    private $deliveryService;
    private $selfDeliverySiteId;
    private $deliveryIntoWarehouse;
    private $deliveryWarehouseType;
    private $unPack;
    private $deliveryBeforeCommand;
    private $pickUpCode;
    private $isvShopNo;
    private $expecTransport;
    private $inDependent;
    private $storeBrand;
    private $storeId;
    private $unloadFlag;
    private $relationNo;
    private $deliveryProductCode;
    private $sellerWarehouseNo;
    private $peaceMindReceive;
    private $goodsNo;
    private $skuGoodsLevel;
    private $goodsName;
    private $type;
    private $unit;
    private $remark;
    private $rate;
    private $amount;
    private $price;
    private $quantity;
    private $pAttributes;
    private $isvLotattrs;
    private $isvGoodsNo;
    private $installVenderId;
    private $orderLine;
    private $batAttrs;
    private $productionDate;
    private $expirationDate;
    private $packBatchNo;
    private $poNo;
    private $lot;
    private $serialNo;
    private $jdPackageType;
    private $serviceProductJson;
    private $payAmount;
    private $sellerGoodsRemark;
    private $leftExpirationPercent;
    private $leftExpirationPercentOperate;
    private $batAttrRangeJson;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.addOrder";
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

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        $this->apiParas["shopNo"] = $shopNo;
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

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo = $departmentNo;
        $this->apiParas["departmentNo"] = $departmentNo;
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

    public function getShipperNo()
    {
        return $this->shipperNo;
    }

    public function setShipperNo($shipperNo)
    {
        $this->shipperNo = $shipperNo;
        $this->apiParas["shipperNo"] = $shipperNo;
    }

    public function getSalesPlatformOrderNo()
    {
        return $this->salesPlatformOrderNo;
    }

    public function setSalesPlatformOrderNo($salesPlatformOrderNo)
    {
        $this->salesPlatformOrderNo = $salesPlatformOrderNo;
        $this->apiParas["salesPlatformOrderNo"] = $salesPlatformOrderNo;
    }

    public function getSalePlatformSource()
    {
        return $this->salePlatformSource;
    }

    public function setSalePlatformSource($salePlatformSource)
    {
        $this->salePlatformSource = $salePlatformSource;
        $this->apiParas["salePlatformSource"] = $salePlatformSource;
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

    public function getSoType()
    {
        return $this->soType;
    }

    public function setSoType($soType)
    {
        $this->soType = $soType;
        $this->apiParas["soType"] = $soType;
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

    public function getExpectDate()
    {
        return $this->expectDate;
    }

    public function setExpectDate($expectDate)
    {
        $this->expectDate = $expectDate;
        $this->apiParas["expectDate"] = $expectDate;
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

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    public function setOrderMark($orderMark)
    {
        $this->orderMark = $orderMark;
        $this->apiParas["orderMark"] = $orderMark;
    }

    public function getThirdWayBill()
    {
        return $this->thirdWayBill;
    }

    public function setThirdWayBill($thirdWayBill)
    {
        $this->thirdWayBill = $thirdWayBill;
        $this->apiParas["thirdWayBill"] = $thirdWayBill;
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

    public function getGatherCenterName()
    {
        return $this->gatherCenterName;
    }

    public function setGatherCenterName($gatherCenterName)
    {
        $this->gatherCenterName = $gatherCenterName;
        $this->apiParas["gatherCenterName"] = $gatherCenterName;
    }

    public function getCustomsStatus()
    {
        return $this->customsStatus;
    }

    public function setCustomsStatus($customsStatus)
    {
        $this->customsStatus = $customsStatus;
        $this->apiParas["customsStatus"] = $customsStatus;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        $this->apiParas["customerName"] = $customerName;
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

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    public function setGoodsType($goodsType)
    {
        $this->goodsType = $goodsType;
        $this->apiParas["goodsType"] = $goodsType;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getCustomsPort()
    {
        return $this->customsPort;
    }

    public function setCustomsPort($customsPort)
    {
        $this->customsPort = $customsPort;
        $this->apiParas["customsPort"] = $customsPort;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType)
    {
        $this->billType = $billType;
        $this->apiParas["billType"] = $billType;
    }

    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;
        $this->apiParas["orderPrice"] = $orderPrice;
    }

    public function getWlyInfo()
    {
        return $this->wlyInfo;
    }

    public function setWlyInfo($wlyInfo)
    {
        $this->wlyInfo = $wlyInfo;
        $this->apiParas["wlyInfo"] = $wlyInfo;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        $this->apiParas["customerId"] = $customerId;
    }

    public function getUrgency()
    {
        return $this->urgency;
    }

    public function setUrgency($urgency)
    {
        $this->urgency = $urgency;
        $this->apiParas["urgency"] = $urgency;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        $this->apiParas["customerNo"] = $customerNo;
    }

    public function getStoreName()
    {
        return $this->storeName;
    }

    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->apiParas["storeName"] = $storeName;
    }

    public function getInvoiceState()
    {
        return $this->invoiceState;
    }

    public function setInvoiceState($invoiceState)
    {
        $this->invoiceState = $invoiceState;
        $this->apiParas["invoiceState"] = $invoiceState;
    }

    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;
        $this->apiParas["invoiceType"] = $invoiceType;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo = $invoiceNo;
        $this->apiParas["invoiceNo"] = $invoiceNo;
    }

    public function getInvoiceTax()
    {
        return $this->invoiceTax;
    }

    public function setInvoiceTax($invoiceTax)
    {
        $this->invoiceTax = $invoiceTax;
        $this->apiParas["invoiceTax"] = $invoiceTax;
    }

    public function getBankName()
    {
        return $this->bankName;
    }

    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        $this->apiParas["bankName"] = $bankName;
    }

    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
        $this->apiParas["bankAccount"] = $bankAccount;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        $this->apiParas["address"] = $address;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        $this->apiParas["phoneNumber"] = $phoneNumber;
    }

    public function getSignType()
    {
        return $this->signType;
    }

    public function setSignType($signType)
    {
        $this->signType = $signType;
        $this->apiParas["signType"] = $signType;
    }

    public function getSignIDCode()
    {
        return $this->signIDCode;
    }

    public function setSignIDCode($signIDCode)
    {
        $this->signIDCode = $signIDCode;
        $this->apiParas["signIDCode"] = $signIDCode;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo = $supplierNo;
        $this->apiParas["supplierNo"] = $supplierNo;
    }

    public function getAgingType()
    {
        return $this->agingType;
    }

    public function setAgingType($agingType)
    {
        $this->agingType = $agingType;
        $this->apiParas["agingType"] = $agingType;
    }

    public function getSellerNote()
    {
        return $this->sellerNote;
    }

    public function setSellerNote($sellerNote)
    {
        $this->sellerNote = $sellerNote;
        $this->apiParas["sellerNote"] = $sellerNote;
    }

    public function getSupervisionCode()
    {
        return $this->supervisionCode;
    }

    public function setSupervisionCode($supervisionCode)
    {
        $this->supervisionCode = $supervisionCode;
        $this->apiParas["supervisionCode"] = $supervisionCode;
    }

    public function getInvoiceChecker()
    {
        return $this->invoiceChecker;
    }

    public function setInvoiceChecker($invoiceChecker)
    {
        $this->invoiceChecker = $invoiceChecker;
        $this->apiParas["invoiceChecker"] = $invoiceChecker;
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

    public function getSaleType()
    {
        return $this->saleType;
    }

    public function setSaleType($saleType)
    {
        $this->saleType = $saleType;
        $this->apiParas["saleType"] = $saleType;
    }

    public function getInStorageNo()
    {
        return $this->inStorageNo;
    }

    public function setInStorageNo($inStorageNo)
    {
        $this->inStorageNo = $inStorageNo;
        $this->apiParas["inStorageNo"] = $inStorageNo;
    }

    public function getInStorageTime()
    {
        return $this->inStorageTime;
    }

    public function setInStorageTime($inStorageTime)
    {
        $this->inStorageTime = $inStorageTime;
        $this->apiParas["inStorageTime"] = $inStorageTime;
    }

    public function getInStorageRemark()
    {
        return $this->inStorageRemark;
    }

    public function setInStorageRemark($inStorageRemark)
    {
        $this->inStorageRemark = $inStorageRemark;
        $this->apiParas["inStorageRemark"] = $inStorageRemark;
    }

    public function getGrossReturnName()
    {
        return $this->grossReturnName;
    }

    public function setGrossReturnName($grossReturnName)
    {
        $this->grossReturnName = $grossReturnName;
        $this->apiParas["grossReturnName"] = $grossReturnName;
    }

    public function getGrossReturnPhone()
    {
        return $this->grossReturnPhone;
    }

    public function setGrossReturnPhone($grossReturnPhone)
    {
        $this->grossReturnPhone = $grossReturnPhone;
        $this->apiParas["grossReturnPhone"] = $grossReturnPhone;
    }

    public function getGrossReturnMobile()
    {
        return $this->grossReturnMobile;
    }

    public function setGrossReturnMobile($grossReturnMobile)
    {
        $this->grossReturnMobile = $grossReturnMobile;
        $this->apiParas["grossReturnMobile"] = $grossReturnMobile;
    }

    public function getGrossReturnAddress()
    {
        return $this->grossReturnAddress;
    }

    public function setGrossReturnAddress($grossReturnAddress)
    {
        $this->grossReturnAddress = $grossReturnAddress;
        $this->apiParas["grossReturnAddress"] = $grossReturnAddress;
    }

    public function getIsvPackTypeNo()
    {
        return $this->isvPackTypeNo;
    }

    public function setIsvPackTypeNo($isvPackTypeNo)
    {
        $this->isvPackTypeNo = $isvPackTypeNo;
        $this->apiParas["isvPackTypeNo"] = $isvPackTypeNo;
    }

    public function getAddrAnalysis()
    {
        return $this->addrAnalysis;
    }

    public function setAddrAnalysis($addrAnalysis)
    {
        $this->addrAnalysis = $addrAnalysis;
        $this->apiParas["addrAnalysis"] = $addrAnalysis;
    }

    public function getPrintExtendInfo()
    {
        return $this->printExtendInfo;
    }

    public function setPrintExtendInfo($printExtendInfo)
    {
        $this->printExtendInfo = $printExtendInfo;
        $this->apiParas["printExtendInfo"] = $printExtendInfo;
    }

    public function getLogicParam()
    {
        return $this->logicParam;
    }

    public function setLogicParam($logicParam)
    {
        $this->logicParam = $logicParam;
        $this->apiParas["logicParam"] = $logicParam;
    }

    public function getCombineNo()
    {
        return $this->combineNo;
    }

    public function setCombineNo($combineNo)
    {
        $this->combineNo = $combineNo;
        $this->apiParas["combineNo"] = $combineNo;
    }

    public function getActivationService()
    {
        return $this->activationService;
    }

    public function setActivationService($activationService)
    {
        $this->activationService = $activationService;
        $this->apiParas["activationService"] = $activationService;
    }

    public function getRandomInspection()
    {
        return $this->randomInspection;
    }

    public function setRandomInspection($randomInspection)
    {
        $this->randomInspection = $randomInspection;
        $this->apiParas["randomInspection"] = $randomInspection;
    }

    public function getVIPDeliWarehouse()
    {
        return $this->VIPDeliWarehouse;
    }

    public function setVIPDeliWarehouse($VIPDeliWarehouse)
    {
        $this->VIPDeliWarehouse = $VIPDeliWarehouse;
        $this->apiParas["VIPDeliWarehouse"] = $VIPDeliWarehouse;
    }

    public function getCustomField()
    {
        return $this->customField;
    }

    public function setCustomField($customField)
    {
        $this->customField = $customField;
        $this->apiParas["customField"] = $customField;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        $this->apiParas["longitude"] = $longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        $this->apiParas["latitude"] = $latitude;
    }

    public function getAgingProductType()
    {
        return $this->agingProductType;
    }

    public function setAgingProductType($agingProductType)
    {
        $this->agingProductType = $agingProductType;
        $this->apiParas["agingProductType"] = $agingProductType;
    }

    public function getCrossDockPriority()
    {
        return $this->crossDockPriority;
    }

    public function setCrossDockPriority($crossDockPriority)
    {
        $this->crossDockPriority = $crossDockPriority;
        $this->apiParas["crossDockPriority"] = $crossDockPriority;
    }

    public function getIsvCompanyNo()
    {
        return $this->isvCompanyNo;
    }

    public function setIsvCompanyNo($isvCompanyNo)
    {
        $this->isvCompanyNo = $isvCompanyNo;
        $this->apiParas["isvCompanyNo"] = $isvCompanyNo;
    }

    public function getOrderPriority()
    {
        return $this->orderPriority;
    }

    public function setOrderPriority($orderPriority)
    {
        $this->orderPriority = $orderPriority;
        $this->apiParas["orderPriority"] = $orderPriority;
    }

    public function getOrderBatchNo()
    {
        return $this->orderBatchNo;
    }

    public function setOrderBatchNo($orderBatchNo)
    {
        $this->orderBatchNo = $orderBatchNo;
        $this->apiParas["orderBatchNo"] = $orderBatchNo;
    }

    public function getOrderBatchQty()
    {
        return $this->orderBatchQty;
    }

    public function setOrderBatchQty($orderBatchQty)
    {
        $this->orderBatchQty = $orderBatchQty;
        $this->apiParas["orderBatchQty"] = $orderBatchQty;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        $this->apiParas["productCode"] = $productCode;
    }

    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
        $this->apiParas["vehicleType"] = $vehicleType;
    }

    public function getIsvSoType()
    {
        return $this->isvSoType;
    }

    public function setIsvSoType($isvSoType)
    {
        $this->isvSoType = $isvSoType;
        $this->apiParas["isvSoType"] = $isvSoType;
    }

    public function getCheckDelivery()
    {
        return $this->checkDelivery;
    }

    public function setCheckDelivery($checkDelivery)
    {
        $this->checkDelivery = $checkDelivery;
        $this->apiParas["checkDelivery"] = $checkDelivery;
    }

    public function getIsvSoTypeName()
    {
        return $this->isvSoTypeName;
    }

    public function setIsvSoTypeName($isvSoTypeName)
    {
        $this->isvSoTypeName = $isvSoTypeName;
        $this->apiParas["isvSoTypeName"] = $isvSoTypeName;
    }

    public function getQuarantineCert()
    {
        return $this->quarantineCert;
    }

    public function setQuarantineCert($quarantineCert)
    {
        $this->quarantineCert = $quarantineCert;
        $this->apiParas["quarantineCert"] = $quarantineCert;
    }

    public function getDeliveryService()
    {
        return $this->deliveryService;
    }

    public function setDeliveryService($deliveryService)
    {
        $this->deliveryService = $deliveryService;
        $this->apiParas["deliveryService"] = $deliveryService;
    }

    public function getSelfDeliverySiteId()
    {
        return $this->selfDeliverySiteId;
    }

    public function setSelfDeliverySiteId($selfDeliverySiteId)
    {
        $this->selfDeliverySiteId = $selfDeliverySiteId;
        $this->apiParas["selfDeliverySiteId"] = $selfDeliverySiteId;
    }

    public function getDeliveryIntoWarehouse()
    {
        return $this->deliveryIntoWarehouse;
    }

    public function setDeliveryIntoWarehouse($deliveryIntoWarehouse)
    {
        $this->deliveryIntoWarehouse = $deliveryIntoWarehouse;
        $this->apiParas["deliveryIntoWarehouse"] = $deliveryIntoWarehouse;
    }

    public function getDeliveryWarehouseType()
    {
        return $this->deliveryWarehouseType;
    }

    public function setDeliveryWarehouseType($deliveryWarehouseType)
    {
        $this->deliveryWarehouseType = $deliveryWarehouseType;
        $this->apiParas["deliveryWarehouseType"] = $deliveryWarehouseType;
    }

    public function getUnPack()
    {
        return $this->unPack;
    }

    public function setUnPack($unPack)
    {
        $this->unPack = $unPack;
        $this->apiParas["unPack"] = $unPack;
    }

    public function getDeliveryBeforeCommand()
    {
        return $this->deliveryBeforeCommand;
    }

    public function setDeliveryBeforeCommand($deliveryBeforeCommand)
    {
        $this->deliveryBeforeCommand = $deliveryBeforeCommand;
        $this->apiParas["deliveryBeforeCommand"] = $deliveryBeforeCommand;
    }

    public function getPickUpCode()
    {
        return $this->pickUpCode;
    }

    public function setPickUpCode($pickUpCode)
    {
        $this->pickUpCode = $pickUpCode;
        $this->apiParas["pickUpCode"] = $pickUpCode;
    }

    public function getIsvShopNo()
    {
        return $this->isvShopNo;
    }

    public function setIsvShopNo($isvShopNo)
    {
        $this->isvShopNo = $isvShopNo;
        $this->apiParas["isvShopNo"] = $isvShopNo;
    }

    public function getExpecTransport()
    {
        return $this->expecTransport;
    }

    public function setExpecTransport($expecTransport)
    {
        $this->expecTransport = $expecTransport;
        $this->apiParas["expecTransport"] = $expecTransport;
    }

    public function getInDependent()
    {
        return $this->inDependent;
    }

    public function setInDependent($inDependent)
    {
        $this->inDependent = $inDependent;
        $this->apiParas["inDependent"] = $inDependent;
    }

    public function getStoreBrand()
    {
        return $this->storeBrand;
    }

    public function setStoreBrand($storeBrand)
    {
        $this->storeBrand = $storeBrand;
        $this->apiParas["storeBrand"] = $storeBrand;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        $this->apiParas["storeId"] = $storeId;
    }

    public function getUnloadFlag()
    {
        return $this->unloadFlag;
    }

    public function setUnloadFlag($unloadFlag)
    {
        $this->unloadFlag = $unloadFlag;
        $this->apiParas["unloadFlag"] = $unloadFlag;
    }

    public function getRelationNo()
    {
        return $this->relationNo;
    }

    public function setRelationNo($relationNo)
    {
        $this->relationNo = $relationNo;
        $this->apiParas["relationNo"] = $relationNo;
    }

    public function getDeliveryProductCode()
    {
        return $this->deliveryProductCode;
    }

    public function setDeliveryProductCode($deliveryProductCode)
    {
        $this->deliveryProductCode = $deliveryProductCode;
        $this->apiParas["deliveryProductCode"] = $deliveryProductCode;
    }

    public function getSellerWarehouseNo()
    {
        return $this->sellerWarehouseNo;
    }

    public function setSellerWarehouseNo($sellerWarehouseNo)
    {
        $this->sellerWarehouseNo = $sellerWarehouseNo;
        $this->apiParas["sellerWarehouseNo"] = $sellerWarehouseNo;
    }

    public function getPeaceMindReceive()
    {
        return $this->peaceMindReceive;
    }

    public function setPeaceMindReceive($peaceMindReceive)
    {
        $this->peaceMindReceive = $peaceMindReceive;
        $this->apiParas["peaceMindReceive"] = $peaceMindReceive;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getSkuGoodsLevel()
    {
        return $this->skuGoodsLevel;
    }

    public function setSkuGoodsLevel($skuGoodsLevel)
    {
        $this->skuGoodsLevel = $skuGoodsLevel;
        $this->apiParas["skuGoodsLevel"] = $skuGoodsLevel;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        $this->apiParas["goodsName"] = $goodsName;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
        $this->apiParas["unit"] = $unit;
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

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
        $this->apiParas["rate"] = $rate;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->apiParas["amount"] = $amount;
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

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->apiParas["quantity"] = $quantity;
    }

    public function getPAttributes()
    {
        return $this->pAttributes;
    }

    public function setPAttributes($pAttributes)
    {
        $this->pAttributes = $pAttributes;
        $this->apiParas["pAttributes"] = $pAttributes;
    }

    public function getIsvLotattrs()
    {
        return $this->isvLotattrs;
    }

    public function setIsvLotattrs($isvLotattrs)
    {
        $this->isvLotattrs = $isvLotattrs;
        $this->apiParas["isvLotattrs"] = $isvLotattrs;
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

    public function getInstallVenderId()
    {
        return $this->installVenderId;
    }

    public function setInstallVenderId($installVenderId)
    {
        $this->installVenderId = $installVenderId;
        $this->apiParas["installVenderId"] = $installVenderId;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    public function setOrderLine($orderLine)
    {
        $this->orderLine = $orderLine;
        $this->apiParas["orderLine"] = $orderLine;
    }

    public function getBatAttrs()
    {
        return $this->batAttrs;
    }

    public function setBatAttrs($batAttrs)
    {
        $this->batAttrs = $batAttrs;
        $this->apiParas["batAttrs"] = $batAttrs;
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

    public function getSerialNo()
    {
        return $this->serialNo;
    }

    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        $this->apiParas["serialNo"] = $serialNo;
    }

    public function getJdPackageType()
    {
        return $this->jdPackageType;
    }

    public function setJdPackageType($jdPackageType)
    {
        $this->jdPackageType = $jdPackageType;
        $this->apiParas["jdPackageType"] = $jdPackageType;
    }

    public function getServiceProductJson()
    {
        return $this->serviceProductJson;
    }

    public function setServiceProductJson($serviceProductJson)
    {
        $this->serviceProductJson = $serviceProductJson;
        $this->apiParas["serviceProductJson"] = $serviceProductJson;
    }

    public function getPayAmount()
    {
        return $this->payAmount;
    }

    public function setPayAmount($payAmount)
    {
        $this->payAmount = $payAmount;
        $this->apiParas["payAmount"] = $payAmount;
    }

    public function getSellerGoodsRemark()
    {
        return $this->sellerGoodsRemark;
    }

    public function setSellerGoodsRemark($sellerGoodsRemark)
    {
        $this->sellerGoodsRemark = $sellerGoodsRemark;
        $this->apiParas["sellerGoodsRemark"] = $sellerGoodsRemark;
    }

    public function getLeftExpirationPercent()
    {
        return $this->leftExpirationPercent;
    }

    public function setLeftExpirationPercent($leftExpirationPercent)
    {
        $this->leftExpirationPercent = $leftExpirationPercent;
        $this->apiParas["leftExpirationPercent"] = $leftExpirationPercent;
    }

    public function getLeftExpirationPercentOperate()
    {
        return $this->leftExpirationPercentOperate;
    }

    public function setLeftExpirationPercentOperate($leftExpirationPercentOperate)
    {
        $this->leftExpirationPercentOperate = $leftExpirationPercentOperate;
        $this->apiParas["leftExpirationPercentOperate"] = $leftExpirationPercentOperate;
    }

    public function getBatAttrRangeJson()
    {
        return $this->batAttrRangeJson;
    }

    public function setBatAttrRangeJson($batAttrRangeJson)
    {
        $this->batAttrRangeJson = $batAttrRangeJson;
        $this->apiParas["batAttrRangeJson"] = $batAttrRangeJson;
    }
}
