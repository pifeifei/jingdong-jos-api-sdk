<?php

class EclpOrderAddOrderRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $isvUUID;

    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID = $isvUUID;
         $this->apiParas["isvUUID"] = $isvUUID;
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

                                                        private $isvSource;

    public function setIsvSource($isvSource)
    {
        $this->isvSource = $isvSource;
         $this->apiParas["isvSource"] = $isvSource;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

                                                        private $shopNo;

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

                                                        private $bdOwnerNo;

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->bdOwnerNo = $bdOwnerNo;
         $this->apiParas["bdOwnerNo"] = $bdOwnerNo;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

                                                        private $departmentNo;

    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo = $departmentNo;
         $this->apiParas["departmentNo"] = $departmentNo;
    }

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

                                                        private $warehouseNo;

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

                                                        private $shipperNo;

    public function setShipperNo($shipperNo)
    {
        $this->shipperNo = $shipperNo;
         $this->apiParas["shipperNo"] = $shipperNo;
    }

    public function getShipperNo()
    {
        return $this->shipperNo;
    }

                                                        private $salesPlatformOrderNo;

    public function setSalesPlatformOrderNo($salesPlatformOrderNo)
    {
        $this->salesPlatformOrderNo = $salesPlatformOrderNo;
         $this->apiParas["salesPlatformOrderNo"] = $salesPlatformOrderNo;
    }

    public function getSalesPlatformOrderNo()
    {
        return $this->salesPlatformOrderNo;
    }

                                                        private $salePlatformSource;

    public function setSalePlatformSource($salePlatformSource)
    {
        $this->salePlatformSource = $salePlatformSource;
         $this->apiParas["salePlatformSource"] = $salePlatformSource;
    }

    public function getSalePlatformSource()
    {
        return $this->salePlatformSource;
    }

                                                        private $salesPlatformCreateTime;

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->salesPlatformCreateTime = $salesPlatformCreateTime;
         $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

                                                        private $soType;

    public function setSoType($soType)
    {
        $this->soType = $soType;
         $this->apiParas["soType"] = $soType;
    }

    public function getSoType()
    {
        return $this->soType;
    }

                                                        private $consigneeName;

    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName = $consigneeName;
         $this->apiParas["consigneeName"] = $consigneeName;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

                                                        private $consigneeMobile;

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->consigneeMobile = $consigneeMobile;
         $this->apiParas["consigneeMobile"] = $consigneeMobile;
    }

    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

                                                        private $consigneePhone;

    public function setConsigneePhone($consigneePhone)
    {
        $this->consigneePhone = $consigneePhone;
         $this->apiParas["consigneePhone"] = $consigneePhone;
    }

    public function getConsigneePhone()
    {
        return $this->consigneePhone;
    }

                                                        private $consigneeEmail;

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->consigneeEmail = $consigneeEmail;
         $this->apiParas["consigneeEmail"] = $consigneeEmail;
    }

    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

                                                        private $expectDate;

    public function setExpectDate($expectDate)
    {
        $this->expectDate = $expectDate;
         $this->apiParas["expectDate"] = $expectDate;
    }

    public function getExpectDate()
    {
        return $this->expectDate;
    }

                                                        private $addressProvince;

    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince = $addressProvince;
         $this->apiParas["addressProvince"] = $addressProvince;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

                                                        private $addressCity;

    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;
         $this->apiParas["addressCity"] = $addressCity;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

                                                        private $addressCounty;

    public function setAddressCounty($addressCounty)
    {
        $this->addressCounty = $addressCounty;
         $this->apiParas["addressCounty"] = $addressCounty;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

                                                        private $addressTown;

    public function setAddressTown($addressTown)
    {
        $this->addressTown = $addressTown;
         $this->apiParas["addressTown"] = $addressTown;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

                                                        private $consigneeAddress;

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress = $consigneeAddress;
         $this->apiParas["consigneeAddress"] = $consigneeAddress;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

                                                        private $consigneePostcode;

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->consigneePostcode = $consigneePostcode;
         $this->apiParas["consigneePostcode"] = $consigneePostcode;
    }

    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

                                                        private $receivable;

    public function setReceivable($receivable)
    {
        $this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
    }

    public function getReceivable()
    {
        return $this->receivable;
    }

                                                        private $consigneeRemark;

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->consigneeRemark = $consigneeRemark;
         $this->apiParas["consigneeRemark"] = $consigneeRemark;
    }

    public function getConsigneeRemark()
    {
        return $this->consigneeRemark;
    }

                                                        private $orderMark;

    public function setOrderMark($orderMark)
    {
        $this->orderMark = $orderMark;
         $this->apiParas["orderMark"] = $orderMark;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

                                                        private $thirdWayBill;

    public function setThirdWayBill($thirdWayBill)
    {
        $this->thirdWayBill = $thirdWayBill;
         $this->apiParas["thirdWayBill"] = $thirdWayBill;
    }

    public function getThirdWayBill()
    {
        return $this->thirdWayBill;
    }

                                                        private $packageMark;

    public function setPackageMark($packageMark)
    {
        $this->packageMark = $packageMark;
         $this->apiParas["packageMark"] = $packageMark;
    }

    public function getPackageMark()
    {
        return $this->packageMark;
    }

                                                        private $businessType;

    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

                                                        private $destinationCode;

    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
         $this->apiParas["destinationCode"] = $destinationCode;
    }

    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

                                                        private $destinationName;

    public function setDestinationName($destinationName)
    {
        $this->destinationName = $destinationName;
         $this->apiParas["destinationName"] = $destinationName;
    }

    public function getDestinationName()
    {
        return $this->destinationName;
    }

                                                        private $sendWebsiteCode;

    public function setSendWebsiteCode($sendWebsiteCode)
    {
        $this->sendWebsiteCode = $sendWebsiteCode;
         $this->apiParas["sendWebsiteCode"] = $sendWebsiteCode;
    }

    public function getSendWebsiteCode()
    {
        return $this->sendWebsiteCode;
    }

                                                        private $sendWebsiteName;

    public function setSendWebsiteName($sendWebsiteName)
    {
        $this->sendWebsiteName = $sendWebsiteName;
         $this->apiParas["sendWebsiteName"] = $sendWebsiteName;
    }

    public function getSendWebsiteName()
    {
        return $this->sendWebsiteName;
    }

                                                        private $sendMode;

    public function setSendMode($sendMode)
    {
        $this->sendMode = $sendMode;
         $this->apiParas["sendMode"] = $sendMode;
    }

    public function getSendMode()
    {
        return $this->sendMode;
    }

                                                        private $receiveMode;

    public function setReceiveMode($receiveMode)
    {
        $this->receiveMode = $receiveMode;
         $this->apiParas["receiveMode"] = $receiveMode;
    }

    public function getReceiveMode()
    {
        return $this->receiveMode;
    }

                                                        private $appointDeliveryTime;

    public function setAppointDeliveryTime($appointDeliveryTime)
    {
        $this->appointDeliveryTime = $appointDeliveryTime;
         $this->apiParas["appointDeliveryTime"] = $appointDeliveryTime;
    }

    public function getAppointDeliveryTime()
    {
        return $this->appointDeliveryTime;
    }

                                                        private $insuredPriceFlag;

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->insuredPriceFlag = $insuredPriceFlag;
         $this->apiParas["insuredPriceFlag"] = $insuredPriceFlag;
    }

    public function getInsuredPriceFlag()
    {
        return $this->insuredPriceFlag;
    }

                                                        private $insuredValue;

    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
         $this->apiParas["insuredValue"] = $insuredValue;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

                                                        private $thirdPayment;

    public function setThirdPayment($thirdPayment)
    {
        $this->thirdPayment = $thirdPayment;
         $this->apiParas["thirdPayment"] = $thirdPayment;
    }

    public function getThirdPayment()
    {
        return $this->thirdPayment;
    }

                                                        private $monthlyAccount;

    public function setMonthlyAccount($monthlyAccount)
    {
        $this->monthlyAccount = $monthlyAccount;
         $this->apiParas["monthlyAccount"] = $monthlyAccount;
    }

    public function getMonthlyAccount()
    {
        return $this->monthlyAccount;
    }

                                                        private $shipment;

    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
         $this->apiParas["shipment"] = $shipment;
    }

    public function getShipment()
    {
        return $this->shipment;
    }

                                                        private $sellerRemark;

    public function setSellerRemark($sellerRemark)
    {
        $this->sellerRemark = $sellerRemark;
         $this->apiParas["sellerRemark"] = $sellerRemark;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

                                                        private $thirdSite;

    public function setThirdSite($thirdSite)
    {
        $this->thirdSite = $thirdSite;
         $this->apiParas["thirdSite"] = $thirdSite;
    }

    public function getThirdSite()
    {
        return $this->thirdSite;
    }

                                                        private $gatherCenterName;

    public function setGatherCenterName($gatherCenterName)
    {
        $this->gatherCenterName = $gatherCenterName;
         $this->apiParas["gatherCenterName"] = $gatherCenterName;
    }

    public function getGatherCenterName()
    {
        return $this->gatherCenterName;
    }

                                                        private $customsStatus;

    public function setCustomsStatus($customsStatus)
    {
        $this->customsStatus = $customsStatus;
         $this->apiParas["customsStatus"] = $customsStatus;
    }

    public function getCustomsStatus()
    {
        return $this->customsStatus;
    }

                                                        private $customerName;

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

                                                        private $invoiceTitle;

    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle = $invoiceTitle;
         $this->apiParas["invoiceTitle"] = $invoiceTitle;
    }

    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

                                                        private $invoiceContent;

    public function setInvoiceContent($invoiceContent)
    {
        $this->invoiceContent = $invoiceContent;
         $this->apiParas["invoiceContent"] = $invoiceContent;
    }

    public function getInvoiceContent()
    {
        return $this->invoiceContent;
    }

                                                        private $goodsType;

    public function setGoodsType($goodsType)
    {
        $this->goodsType = $goodsType;
         $this->apiParas["goodsType"] = $goodsType;
    }

    public function getGoodsType()
    {
        return $this->goodsType;
    }

                                                        private $goodsLevel;

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
         $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

                                                        private $customsPort;

    public function setCustomsPort($customsPort)
    {
        $this->customsPort = $customsPort;
         $this->apiParas["customsPort"] = $customsPort;
    }

    public function getCustomsPort()
    {
        return $this->customsPort;
    }

                                                        private $billType;

    public function setBillType($billType)
    {
        $this->billType = $billType;
         $this->apiParas["billType"] = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

                                                        private $orderPrice;

    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;
         $this->apiParas["orderPrice"] = $orderPrice;
    }

    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

                                                        private $wlyInfo;

    public function setWlyInfo($wlyInfo)
    {
        $this->wlyInfo = $wlyInfo;
         $this->apiParas["wlyInfo"] = $wlyInfo;
    }

    public function getWlyInfo()
    {
        return $this->wlyInfo;
    }

                                                        private $customerId;

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
         $this->apiParas["customerId"] = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

                                                        private $urgency;

    public function setUrgency($urgency)
    {
        $this->urgency = $urgency;
         $this->apiParas["urgency"] = $urgency;
    }

    public function getUrgency()
    {
        return $this->urgency;
    }

                                                        private $customerNo;

    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
         $this->apiParas["customerNo"] = $customerNo;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

                                                        private $storeName;

    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
    }

    public function getStoreName()
    {
        return $this->storeName;
    }

                                                        private $invoiceState;

    public function setInvoiceState($invoiceState)
    {
        $this->invoiceState = $invoiceState;
         $this->apiParas["invoiceState"] = $invoiceState;
    }

    public function getInvoiceState()
    {
        return $this->invoiceState;
    }

                                                        private $invoiceType;

    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;
         $this->apiParas["invoiceType"] = $invoiceType;
    }

    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

                                                        private $invoiceNo;

    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

                                                        private $invoiceTax;

    public function setInvoiceTax($invoiceTax)
    {
        $this->invoiceTax = $invoiceTax;
         $this->apiParas["invoiceTax"] = $invoiceTax;
    }

    public function getInvoiceTax()
    {
        return $this->invoiceTax;
    }

                                                        private $bankName;

    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
         $this->apiParas["bankName"] = $bankName;
    }

    public function getBankName()
    {
        return $this->bankName;
    }

                                                        private $bankAccount;

    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
         $this->apiParas["bankAccount"] = $bankAccount;
    }

    public function getBankAccount()
    {
        return $this->bankAccount;
    }

                                                        private $address;

    public function setAddress($address)
    {
        $this->address = $address;
         $this->apiParas["address"] = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

                                                        private $phoneNumber;

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
         $this->apiParas["phoneNumber"] = $phoneNumber;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

                                                        private $signType;

    public function setSignType($signType)
    {
        $this->signType = $signType;
         $this->apiParas["signType"] = $signType;
    }

    public function getSignType()
    {
        return $this->signType;
    }

                                                        private $signIDCode;

    public function setSignIDCode($signIDCode)
    {
        $this->signIDCode = $signIDCode;
         $this->apiParas["signIDCode"] = $signIDCode;
    }

    public function getSignIDCode()
    {
        return $this->signIDCode;
    }

                                                        private $supplierNo;

    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

                                                        private $agingType;

    public function setAgingType($agingType)
    {
        $this->agingType = $agingType;
         $this->apiParas["agingType"] = $agingType;
    }

    public function getAgingType()
    {
        return $this->agingType;
    }

                                                        private $sellerNote;

    public function setSellerNote($sellerNote)
    {
        $this->sellerNote = $sellerNote;
         $this->apiParas["sellerNote"] = $sellerNote;
    }

    public function getSellerNote()
    {
        return $this->sellerNote;
    }

                                                        private $supervisionCode;

    public function setSupervisionCode($supervisionCode)
    {
        $this->supervisionCode = $supervisionCode;
         $this->apiParas["supervisionCode"] = $supervisionCode;
    }

    public function getSupervisionCode()
    {
        return $this->supervisionCode;
    }

                                                        private $invoiceChecker;

    public function setInvoiceChecker($invoiceChecker)
    {
        $this->invoiceChecker = $invoiceChecker;
         $this->apiParas["invoiceChecker"] = $invoiceChecker;
    }

    public function getInvoiceChecker()
    {
        return $this->invoiceChecker;
    }

                                                        private $paymentType;

    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
         $this->apiParas["paymentType"] = $paymentType;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

                                                        private $saleType;

    public function setSaleType($saleType)
    {
        $this->saleType = $saleType;
         $this->apiParas["saleType"] = $saleType;
    }

    public function getSaleType()
    {
        return $this->saleType;
    }

                                                        private $inStorageNo;

    public function setInStorageNo($inStorageNo)
    {
        $this->inStorageNo = $inStorageNo;
         $this->apiParas["inStorageNo"] = $inStorageNo;
    }

    public function getInStorageNo()
    {
        return $this->inStorageNo;
    }

                                                        private $inStorageTime;

    public function setInStorageTime($inStorageTime)
    {
        $this->inStorageTime = $inStorageTime;
         $this->apiParas["inStorageTime"] = $inStorageTime;
    }

    public function getInStorageTime()
    {
        return $this->inStorageTime;
    }

                                                        private $inStorageRemark;

    public function setInStorageRemark($inStorageRemark)
    {
        $this->inStorageRemark = $inStorageRemark;
         $this->apiParas["inStorageRemark"] = $inStorageRemark;
    }

    public function getInStorageRemark()
    {
        return $this->inStorageRemark;
    }

                                                        private $grossReturnName;

    public function setGrossReturnName($grossReturnName)
    {
        $this->grossReturnName = $grossReturnName;
         $this->apiParas["grossReturnName"] = $grossReturnName;
    }

    public function getGrossReturnName()
    {
        return $this->grossReturnName;
    }

                                                        private $grossReturnPhone;

    public function setGrossReturnPhone($grossReturnPhone)
    {
        $this->grossReturnPhone = $grossReturnPhone;
         $this->apiParas["grossReturnPhone"] = $grossReturnPhone;
    }

    public function getGrossReturnPhone()
    {
        return $this->grossReturnPhone;
    }

                                                        private $grossReturnMobile;

    public function setGrossReturnMobile($grossReturnMobile)
    {
        $this->grossReturnMobile = $grossReturnMobile;
         $this->apiParas["grossReturnMobile"] = $grossReturnMobile;
    }

    public function getGrossReturnMobile()
    {
        return $this->grossReturnMobile;
    }

                                                        private $grossReturnAddress;

    public function setGrossReturnAddress($grossReturnAddress)
    {
        $this->grossReturnAddress = $grossReturnAddress;
         $this->apiParas["grossReturnAddress"] = $grossReturnAddress;
    }

    public function getGrossReturnAddress()
    {
        return $this->grossReturnAddress;
    }

                                                        private $isvPackTypeNo;

    public function setIsvPackTypeNo($isvPackTypeNo)
    {
        $this->isvPackTypeNo = $isvPackTypeNo;
         $this->apiParas["isvPackTypeNo"] = $isvPackTypeNo;
    }

    public function getIsvPackTypeNo()
    {
        return $this->isvPackTypeNo;
    }

                                                        private $addrAnalysis;

    public function setAddrAnalysis($addrAnalysis)
    {
        $this->addrAnalysis = $addrAnalysis;
         $this->apiParas["addrAnalysis"] = $addrAnalysis;
    }

    public function getAddrAnalysis()
    {
        return $this->addrAnalysis;
    }

                                                        private $printExtendInfo;

    public function setPrintExtendInfo($printExtendInfo)
    {
        $this->printExtendInfo = $printExtendInfo;
         $this->apiParas["printExtendInfo"] = $printExtendInfo;
    }

    public function getPrintExtendInfo()
    {
        return $this->printExtendInfo;
    }

                                                        private $logicParam;

    public function setLogicParam($logicParam)
    {
        $this->logicParam = $logicParam;
         $this->apiParas["logicParam"] = $logicParam;
    }

    public function getLogicParam()
    {
        return $this->logicParam;
    }

                                                        private $combineNo;

    public function setCombineNo($combineNo)
    {
        $this->combineNo = $combineNo;
         $this->apiParas["combineNo"] = $combineNo;
    }

    public function getCombineNo()
    {
        return $this->combineNo;
    }

                                                        private $activationService;

    public function setActivationService($activationService)
    {
        $this->activationService = $activationService;
         $this->apiParas["activationService"] = $activationService;
    }

    public function getActivationService()
    {
        return $this->activationService;
    }

                                                        private $randomInspection;

    public function setRandomInspection($randomInspection)
    {
        $this->randomInspection = $randomInspection;
         $this->apiParas["randomInspection"] = $randomInspection;
    }

    public function getRandomInspection()
    {
        return $this->randomInspection;
    }

                                                        private $VIPDeliWarehouse;

    public function setVIPDeliWarehouse($VIPDeliWarehouse)
    {
        $this->VIPDeliWarehouse = $VIPDeliWarehouse;
         $this->apiParas["VIPDeliWarehouse"] = $VIPDeliWarehouse;
    }

    public function getVIPDeliWarehouse()
    {
        return $this->VIPDeliWarehouse;
    }

                                                        private $customField;

    public function setCustomField($customField)
    {
        $this->customField = $customField;
         $this->apiParas["customField"] = $customField;
    }

    public function getCustomField()
    {
        return $this->customField;
    }

                                                        private $longitude;

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
         $this->apiParas["longitude"] = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

                                                        private $latitude;

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
         $this->apiParas["latitude"] = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

                                                        private $agingProductType;

    public function setAgingProductType($agingProductType)
    {
        $this->agingProductType = $agingProductType;
         $this->apiParas["agingProductType"] = $agingProductType;
    }

    public function getAgingProductType()
    {
        return $this->agingProductType;
    }

                                                        private $crossDockPriority;

    public function setCrossDockPriority($crossDockPriority)
    {
        $this->crossDockPriority = $crossDockPriority;
         $this->apiParas["crossDockPriority"] = $crossDockPriority;
    }

    public function getCrossDockPriority()
    {
        return $this->crossDockPriority;
    }

                                                        private $isvCompanyNo;

    public function setIsvCompanyNo($isvCompanyNo)
    {
        $this->isvCompanyNo = $isvCompanyNo;
         $this->apiParas["isvCompanyNo"] = $isvCompanyNo;
    }

    public function getIsvCompanyNo()
    {
        return $this->isvCompanyNo;
    }

                                                        private $orderPriority;

    public function setOrderPriority($orderPriority)
    {
        $this->orderPriority = $orderPriority;
         $this->apiParas["orderPriority"] = $orderPriority;
    }

    public function getOrderPriority()
    {
        return $this->orderPriority;
    }

                                                        private $orderBatchNo;

    public function setOrderBatchNo($orderBatchNo)
    {
        $this->orderBatchNo = $orderBatchNo;
         $this->apiParas["orderBatchNo"] = $orderBatchNo;
    }

    public function getOrderBatchNo()
    {
        return $this->orderBatchNo;
    }

                                                        private $orderBatchQty;

    public function setOrderBatchQty($orderBatchQty)
    {
        $this->orderBatchQty = $orderBatchQty;
         $this->apiParas["orderBatchQty"] = $orderBatchQty;
    }

    public function getOrderBatchQty()
    {
        return $this->orderBatchQty;
    }

                                                        private $productCode;

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
         $this->apiParas["productCode"] = $productCode;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

                                                        private $vehicleType;

    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
         $this->apiParas["vehicleType"] = $vehicleType;
    }

    public function getVehicleType()
    {
        return $this->vehicleType;
    }

                                                        private $isvSoType;

    public function setIsvSoType($isvSoType)
    {
        $this->isvSoType = $isvSoType;
         $this->apiParas["isvSoType"] = $isvSoType;
    }

    public function getIsvSoType()
    {
        return $this->isvSoType;
    }

                                                        private $checkDelivery;

    public function setCheckDelivery($checkDelivery)
    {
        $this->checkDelivery = $checkDelivery;
         $this->apiParas["checkDelivery"] = $checkDelivery;
    }

    public function getCheckDelivery()
    {
        return $this->checkDelivery;
    }

                                                        private $isvSoTypeName;

    public function setIsvSoTypeName($isvSoTypeName)
    {
        $this->isvSoTypeName = $isvSoTypeName;
         $this->apiParas["isvSoTypeName"] = $isvSoTypeName;
    }

    public function getIsvSoTypeName()
    {
        return $this->isvSoTypeName;
    }

                                                        private $quarantineCert;

    public function setQuarantineCert($quarantineCert)
    {
        $this->quarantineCert = $quarantineCert;
         $this->apiParas["quarantineCert"] = $quarantineCert;
    }

    public function getQuarantineCert()
    {
        return $this->quarantineCert;
    }

                                                        private $deliveryService;

    public function setDeliveryService($deliveryService)
    {
        $this->deliveryService = $deliveryService;
         $this->apiParas["deliveryService"] = $deliveryService;
    }

    public function getDeliveryService()
    {
        return $this->deliveryService;
    }

                                                        private $selfDeliverySiteId;

    public function setSelfDeliverySiteId($selfDeliverySiteId)
    {
        $this->selfDeliverySiteId = $selfDeliverySiteId;
         $this->apiParas["selfDeliverySiteId"] = $selfDeliverySiteId;
    }

    public function getSelfDeliverySiteId()
    {
        return $this->selfDeliverySiteId;
    }

                                                        private $deliveryIntoWarehouse;

    public function setDeliveryIntoWarehouse($deliveryIntoWarehouse)
    {
        $this->deliveryIntoWarehouse = $deliveryIntoWarehouse;
         $this->apiParas["deliveryIntoWarehouse"] = $deliveryIntoWarehouse;
    }

    public function getDeliveryIntoWarehouse()
    {
        return $this->deliveryIntoWarehouse;
    }

                                                        private $deliveryWarehouseType;

    public function setDeliveryWarehouseType($deliveryWarehouseType)
    {
        $this->deliveryWarehouseType = $deliveryWarehouseType;
         $this->apiParas["deliveryWarehouseType"] = $deliveryWarehouseType;
    }

    public function getDeliveryWarehouseType()
    {
        return $this->deliveryWarehouseType;
    }

                                                        private $unPack;

    public function setUnPack($unPack)
    {
        $this->unPack = $unPack;
         $this->apiParas["unPack"] = $unPack;
    }

    public function getUnPack()
    {
        return $this->unPack;
    }

                                                        private $deliveryBeforeCommand;

    public function setDeliveryBeforeCommand($deliveryBeforeCommand)
    {
        $this->deliveryBeforeCommand = $deliveryBeforeCommand;
         $this->apiParas["deliveryBeforeCommand"] = $deliveryBeforeCommand;
    }

    public function getDeliveryBeforeCommand()
    {
        return $this->deliveryBeforeCommand;
    }

                                                        private $pickUpCode;

    public function setPickUpCode($pickUpCode)
    {
        $this->pickUpCode = $pickUpCode;
         $this->apiParas["pickUpCode"] = $pickUpCode;
    }

    public function getPickUpCode()
    {
        return $this->pickUpCode;
    }

                                                        private $isvShopNo;

    public function setIsvShopNo($isvShopNo)
    {
        $this->isvShopNo = $isvShopNo;
         $this->apiParas["isvShopNo"] = $isvShopNo;
    }

    public function getIsvShopNo()
    {
        return $this->isvShopNo;
    }

                                                        private $expecTransport;

    public function setExpecTransport($expecTransport)
    {
        $this->expecTransport = $expecTransport;
         $this->apiParas["expecTransport"] = $expecTransport;
    }

    public function getExpecTransport()
    {
        return $this->expecTransport;
    }

                                                        private $inDependent;

    public function setInDependent($inDependent)
    {
        $this->inDependent = $inDependent;
         $this->apiParas["inDependent"] = $inDependent;
    }

    public function getInDependent()
    {
        return $this->inDependent;
    }

                                                        private $storeBrand;

    public function setStoreBrand($storeBrand)
    {
        $this->storeBrand = $storeBrand;
         $this->apiParas["storeBrand"] = $storeBrand;
    }

    public function getStoreBrand()
    {
        return $this->storeBrand;
    }

                                                        private $storeId;

    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

                                                        private $unloadFlag;

    public function setUnloadFlag($unloadFlag)
    {
        $this->unloadFlag = $unloadFlag;
         $this->apiParas["unloadFlag"] = $unloadFlag;
    }

    public function getUnloadFlag()
    {
        return $this->unloadFlag;
    }

                                                        private $relationNo;

    public function setRelationNo($relationNo)
    {
        $this->relationNo = $relationNo;
         $this->apiParas["relationNo"] = $relationNo;
    }

    public function getRelationNo()
    {
        return $this->relationNo;
    }

                                                        private $deliveryProductCode;

    public function setDeliveryProductCode($deliveryProductCode)
    {
        $this->deliveryProductCode = $deliveryProductCode;
         $this->apiParas["deliveryProductCode"] = $deliveryProductCode;
    }

    public function getDeliveryProductCode()
    {
        return $this->deliveryProductCode;
    }

                                                        private $sellerWarehouseNo;

    public function setSellerWarehouseNo($sellerWarehouseNo)
    {
        $this->sellerWarehouseNo = $sellerWarehouseNo;
         $this->apiParas["sellerWarehouseNo"] = $sellerWarehouseNo;
    }

    public function getSellerWarehouseNo()
    {
        return $this->sellerWarehouseNo;
    }

                                                        private $peaceMindReceive;

    public function setPeaceMindReceive($peaceMindReceive)
    {
        $this->peaceMindReceive = $peaceMindReceive;
         $this->apiParas["peaceMindReceive"] = $peaceMindReceive;
    }

    public function getPeaceMindReceive()
    {
        return $this->peaceMindReceive;
    }

                                                                                                                                                                                                                                                                                                                                                                                                                           private $goodsNo;
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }
                                                                                                                                                                                                                                                                                                                                              private $skuGoodsLevel;
    public function setSkuGoodsLevel($skuGoodsLevel)
    {
        $this->skuGoodsLevel = $skuGoodsLevel;
        $this->apiParas["skuGoodsLevel"] = $skuGoodsLevel;
    }

    public function getSkuGoodsLevel()
    {
        return $this->skuGoodsLevel;
    }
                                                                                                                                                                                                                                                                                                                                              private $goodsName;
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        $this->apiParas["goodsName"] = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }
                                                                                                                                                                                                                                                                                                                                              private $type;
    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }
                                                                                                                                                                                                                                                                                                                                              private $unit;
    public function setUnit($unit)
    {
        $this->unit = $unit;
        $this->apiParas["unit"] = $unit;
    }

    public function getUnit()
    {
        return $this->unit;
    }
                                                                                                                                                                                                                                                                                                                                              private $remark;
    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }
                                                                                                                                                                                                                                                                                                                                              private $rate;
    public function setRate($rate)
    {
        $this->rate = $rate;
        $this->apiParas["rate"] = $rate;
    }

    public function getRate()
    {
        return $this->rate;
    }
                                                                                                                                                                                                                                                                                                                                              private $amount;
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->apiParas["amount"] = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
                                                                                                                                                                                                                                                                                                                                              private $price;
    public function setPrice($price)
    {
        $this->price = $price;
        $this->apiParas["price"] = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->apiParas["quantity"] = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
                                                                                                                                                                                                                                                                                                                                              private $pAttributes;
    public function setPAttributes($pAttributes)
    {
        $this->pAttributes = $pAttributes;
        $this->apiParas["pAttributes"] = $pAttributes;
    }

    public function getPAttributes()
    {
        return $this->pAttributes;
    }
                                                                                                                                                                                                                                                                                                                                              private $isvLotattrs;
    public function setIsvLotattrs($isvLotattrs)
    {
        $this->isvLotattrs = $isvLotattrs;
        $this->apiParas["isvLotattrs"] = $isvLotattrs;
    }

    public function getIsvLotattrs()
    {
        return $this->isvLotattrs;
    }
                                                                                                                                                                                                                                                                                                                                              private $isvGoodsNo;
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }
                                                                                                                                                                                                                                                                                                                                              private $installVenderId;
    public function setInstallVenderId($installVenderId)
    {
        $this->installVenderId = $installVenderId;
        $this->apiParas["installVenderId"] = $installVenderId;
    }

    public function getInstallVenderId()
    {
        return $this->installVenderId;
    }
                                                                                                                                                                                                                                                                                                                                              private $orderLine;
    public function setOrderLine($orderLine)
    {
        $this->orderLine = $orderLine;
        $this->apiParas["orderLine"] = $orderLine;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }
                                                                                                                                                                                                                                                                                                                                              private $batAttrs;
    public function setBatAttrs($batAttrs)
    {
        $this->batAttrs = $batAttrs;
        $this->apiParas["batAttrs"] = $batAttrs;
    }

    public function getBatAttrs()
    {
        return $this->batAttrs;
    }
                                                                                                                                                                                                                                                                                                                                              private $productionDate;
    public function setProductionDate($productionDate)
    {
        $this->productionDate = $productionDate;
        $this->apiParas["productionDate"] = $productionDate;
    }

    public function getProductionDate()
    {
        return $this->productionDate;
    }
                                                                                                                                                                                                                                                                                                                                              private $expirationDate;
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        $this->apiParas["expirationDate"] = $expirationDate;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
                                                                                                                                                                                                                                                                                                                                              private $packBatchNo;
    public function setPackBatchNo($packBatchNo)
    {
        $this->packBatchNo = $packBatchNo;
        $this->apiParas["packBatchNo"] = $packBatchNo;
    }

    public function getPackBatchNo()
    {
        return $this->packBatchNo;
    }
                                                                                                                                                                                                                                                                                                                                              private $poNo;
    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;
        $this->apiParas["poNo"] = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }
                                                                                                                                                                                                                                                                                                                                              private $lot;
    public function setLot($lot)
    {
        $this->lot = $lot;
        $this->apiParas["lot"] = $lot;
    }

    public function getLot()
    {
        return $this->lot;
    }
                                                                                                                                                                                                                                                                                                                                              private $serialNo;
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        $this->apiParas["serialNo"] = $serialNo;
    }

    public function getSerialNo()
    {
        return $this->serialNo;
    }
                                                                                                                                                                                                                                                                                                                                              private $jdPackageType;
    public function setJdPackageType($jdPackageType)
    {
        $this->jdPackageType = $jdPackageType;
        $this->apiParas["jdPackageType"] = $jdPackageType;
    }

    public function getJdPackageType()
    {
        return $this->jdPackageType;
    }
                                                                                                                                                                                                                                                                                                                                              private $serviceProductJson;
    public function setServiceProductJson($serviceProductJson)
    {
        $this->serviceProductJson = $serviceProductJson;
        $this->apiParas["serviceProductJson"] = $serviceProductJson;
    }

    public function getServiceProductJson()
    {
        return $this->serviceProductJson;
    }
                                                                                                                                                                                                                                                                                                                                              private $payAmount;
    public function setPayAmount($payAmount)
    {
        $this->payAmount = $payAmount;
        $this->apiParas["payAmount"] = $payAmount;
    }

    public function getPayAmount()
    {
        return $this->payAmount;
    }
                                                                                                                                                                                                                                                                                                                                              private $sellerGoodsRemark;
    public function setSellerGoodsRemark($sellerGoodsRemark)
    {
        $this->sellerGoodsRemark = $sellerGoodsRemark;
        $this->apiParas["sellerGoodsRemark"] = $sellerGoodsRemark;
    }

    public function getSellerGoodsRemark()
    {
        return $this->sellerGoodsRemark;
    }
                                                                                                                                                                                                                                                                                                                                              private $leftExpirationPercent;
    public function setLeftExpirationPercent($leftExpirationPercent)
    {
        $this->leftExpirationPercent = $leftExpirationPercent;
        $this->apiParas["leftExpirationPercent"] = $leftExpirationPercent;
    }

    public function getLeftExpirationPercent()
    {
        return $this->leftExpirationPercent;
    }
                                                                                                                                                                                                                                                                                                                                              private $leftExpirationPercentOperate;
    public function setLeftExpirationPercentOperate($leftExpirationPercentOperate)
    {
        $this->leftExpirationPercentOperate = $leftExpirationPercentOperate;
        $this->apiParas["leftExpirationPercentOperate"] = $leftExpirationPercentOperate;
    }

    public function getLeftExpirationPercentOperate()
    {
        return $this->leftExpirationPercentOperate;
    }
                                                                                                                                                                                                                                                                                                                       private $batAttrRangeJson;
    public function setBatAttrRangeJson($batAttrRangeJson)
    {
        $this->batAttrRangeJson = $batAttrRangeJson;
        $this->apiParas["batAttrRangeJson"] = $batAttrRangeJson;
    }

    public function getBatAttrRangeJson()
    {
        return $this->batAttrRangeJson;
    }
}
