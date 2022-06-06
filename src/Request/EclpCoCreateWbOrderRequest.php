<?php

namespace ACES\Request;


class EclpCoCreateWbOrderRequest
{
    private $apiParas = array();
    private $version;
    private $orderNo;
    private $deptNo;
    private $senderNickName;
    private $senderName;
    private $senderMobile;
    private $senderPhone;
    private $senderProvince;
    private $senderCity;
    private $senderCounty;
    private $senderTown;
    private $senderProvinceName;
    private $senderCityName;
    private $senderCountyName;
    private $senderTownName;
    private $senderAddress;
    private $receiverNickName;
    private $receiverName;
    private $receiverMobile;
    private $receiverPhone;
    private $receiverProvince;
    private $receiverCity;
    private $receiverCounty;
    private $receiverTown;
    private $receiverProvinceName;
    private $receiverCityName;
    private $receiverCountyName;
    private $receiverTownName;
    private $remark;
    private $grossWeight;
    private $grossVolume;
    private $createTime;
    private $createUser;
    private $receivable;
    private $isCod;
    private $vehicleTypeName;
    private $vehicleTypeNo;
    private $vehicleQty;
    private $expressItemName;
    private $expressItemQty;
    private $signReceiptFlag;
    private $deliveryReceiptFlag;
    private $deliveryIntoWarehouse;
    private $loadFlag;
    private $unloadFlag;
    private $receiptFlag;
    private $fcFlag;
    private $guaranteeValue;
    private $pickupBeginTime;
    private $pickupEndTime;
    private $bussinessType;
    private $deliveryType;
    private $senderCompany;
    private $receiverCompany;
    private $receiverAddress;
    private $warehouseCode;
    private $projectName;
    private $actualSpId;
    private $coldChainOn;
    private $temptureNum;
    private $qingzhenOn;
    private $yiwuranOn;
    private $inStorageNo;
    private $inStorageTime;
    private $inStorageRemark;
    private $heavyUpstair;
    private $wayBillCode;
    private $spId;
    private $saleOrderNo;
    private $packageServiceOn;
    private $deliveryMthd;
    private $providerCode;
    private $packageNo;
    private $clientNo;
    private $orderType;
    private $siteCollect;
    private $siteDelivery;
    private $quarantineCert;
    private $selfCollectSiteId;
    private $selfDeliverySiteId;
    private $expectedArrivalStartTime;
    private $expectedArrivalEndTime;
    private $vehicleOrderNo;
    private $messageSign;
    private $checkPreSort;
    private $receiverNameSplit;
    private $receiverCompanySplit;
    private $receiverMobileSplit;
    private $receiverPhoneSplit;
    private $receiverProvinceNameSplit;
    private $receiverProvinceSplit;
    private $receiverCityNameSplit;
    private $receiverCitySplit;
    private $receiverCountyNameSplit;
    private $receiverCountySplit;
    private $receiverTownNameSplit;
    private $receiverTownSplit;
    private $receiverAddressSplit;
    private $expectedArrivalStartTimeSplit;
    private $expectedArrivalEndTimeSplit;
    private $orderNoSplit;
    private $expressItemNameSplit;
    private $grossVolumeSplit;
    private $grossWeightSplit;
    private $expressItemQtySplit;
    private $temptureNumSplit;
    private $quarantineCertSplit;
    private $deliveryIntoWarehouseSplit;
    private $inStorageNoSplit;
    private $inStorageTimeSplit;
    private $inStorageRemarkSplit;
    private $loadFlagSplit;
    private $unloadFlagSplit;
    private $remarkSplit;
    private $packageModelNosSplit;
    private $qingzhenOnSplit;
    private $yiwuranOnSplit;
    private $receiverNickNameSplit;
    private $guaranteeValueSplit;
    private $heavyUpstairSplit;
    private $isvOrderAmount;
    private $tracker;
    private $deliveryMode;
    private $warehouseServiceType;
    private $homeDeliveryOn;
    private $siteCode;
    private $referCancelDate;
    private $rebackConfluenceOn;
    private $expressDeliveryOn;
    private $expectPickupDate;
    private $expectDeliveryDate;
    private $warehousePlatformName;
    private $temporaryStorage;
    private $predictReceiptDate;
    private $extendFieldStr;
    private $peaceMindReceive;
    private $backInfoOn;
    private $backName;
    private $backMobile;
    private $backPhone;
    private $backProvinceName;
    private $backCityName;
    private $backCountyName;
    private $backTownName;
    private $backAddress;
    private $importFlag;
    private $fileWithCargo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.createWbOrder";
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

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
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

    public function getSenderNickName()
    {
        return $this->senderNickName;
    }

    public function setSenderNickName($senderNickName)
    {
        $this->senderNickName = $senderNickName;
        $this->apiParas["senderNickName"] = $senderNickName;
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

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

    public function setSenderProvince($senderProvince)
    {
        $this->senderProvince = $senderProvince;
        $this->apiParas["senderProvince"] = $senderProvince;
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

    public function getSenderCounty()
    {
        return $this->senderCounty;
    }

    public function setSenderCounty($senderCounty)
    {
        $this->senderCounty = $senderCounty;
        $this->apiParas["senderCounty"] = $senderCounty;
    }

    public function getSenderTown()
    {
        return $this->senderTown;
    }

    public function setSenderTown($senderTown)
    {
        $this->senderTown = $senderTown;
        $this->apiParas["senderTown"] = $senderTown;
    }

    public function getSenderProvinceName()
    {
        return $this->senderProvinceName;
    }

    public function setSenderProvinceName($senderProvinceName)
    {
        $this->senderProvinceName = $senderProvinceName;
        $this->apiParas["senderProvinceName"] = $senderProvinceName;
    }

    public function getSenderCityName()
    {
        return $this->senderCityName;
    }

    public function setSenderCityName($senderCityName)
    {
        $this->senderCityName = $senderCityName;
        $this->apiParas["senderCityName"] = $senderCityName;
    }

    public function getSenderCountyName()
    {
        return $this->senderCountyName;
    }

    public function setSenderCountyName($senderCountyName)
    {
        $this->senderCountyName = $senderCountyName;
        $this->apiParas["senderCountyName"] = $senderCountyName;
    }

    public function getSenderTownName()
    {
        return $this->senderTownName;
    }

    public function setSenderTownName($senderTownName)
    {
        $this->senderTownName = $senderTownName;
        $this->apiParas["senderTownName"] = $senderTownName;
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

    public function getReceiverNickName()
    {
        return $this->receiverNickName;
    }

    public function setReceiverNickName($receiverNickName)
    {
        $this->receiverNickName = $receiverNickName;
        $this->apiParas["receiverNickName"] = $receiverNickName;
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

    public function getReceiverProvince()
    {
        return $this->receiverProvince;
    }

    public function setReceiverProvince($receiverProvince)
    {
        $this->receiverProvince = $receiverProvince;
        $this->apiParas["receiverProvince"] = $receiverProvince;
    }

    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

    public function setReceiverCity($receiverCity)
    {
        $this->receiverCity = $receiverCity;
        $this->apiParas["receiverCity"] = $receiverCity;
    }

    public function getReceiverCounty()
    {
        return $this->receiverCounty;
    }

    public function setReceiverCounty($receiverCounty)
    {
        $this->receiverCounty = $receiverCounty;
        $this->apiParas["receiverCounty"] = $receiverCounty;
    }

    public function getReceiverTown()
    {
        return $this->receiverTown;
    }

    public function setReceiverTown($receiverTown)
    {
        $this->receiverTown = $receiverTown;
        $this->apiParas["receiverTown"] = $receiverTown;
    }

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName = $receiverProvinceName;
        $this->apiParas["receiverProvinceName"] = $receiverProvinceName;
    }

    public function getReceiverCityName()
    {
        return $this->receiverCityName;
    }

    public function setReceiverCityName($receiverCityName)
    {
        $this->receiverCityName = $receiverCityName;
        $this->apiParas["receiverCityName"] = $receiverCityName;
    }

    public function getReceiverCountyName()
    {
        return $this->receiverCountyName;
    }

    public function setReceiverCountyName($receiverCountyName)
    {
        $this->receiverCountyName = $receiverCountyName;
        $this->apiParas["receiverCountyName"] = $receiverCountyName;
    }

    public function getReceiverTownName()
    {
        return $this->receiverTownName;
    }

    public function setReceiverTownName($receiverTownName)
    {
        $this->receiverTownName = $receiverTownName;
        $this->apiParas["receiverTownName"] = $receiverTownName;
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

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
        $this->apiParas["grossWeight"] = $grossWeight;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume = $grossVolume;
        $this->apiParas["grossVolume"] = $grossVolume;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
        $this->apiParas["createTime"] = $createTime;
    }

    public function getCreateUser()
    {
        return $this->createUser;
    }

    public function setCreateUser($createUser)
    {
        $this->createUser = $createUser;
        $this->apiParas["createUser"] = $createUser;
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

    public function getIsCod()
    {
        return $this->isCod;
    }

    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;
        $this->apiParas["isCod"] = $isCod;
    }

    public function getVehicleTypeName()
    {
        return $this->vehicleTypeName;
    }

    public function setVehicleTypeName($vehicleTypeName)
    {
        $this->vehicleTypeName = $vehicleTypeName;
        $this->apiParas["vehicleTypeName"] = $vehicleTypeName;
    }

    public function getVehicleTypeNo()
    {
        return $this->vehicleTypeNo;
    }

    public function setVehicleTypeNo($vehicleTypeNo)
    {
        $this->vehicleTypeNo = $vehicleTypeNo;
        $this->apiParas["vehicleTypeNo"] = $vehicleTypeNo;
    }

    public function getVehicleQty()
    {
        return $this->vehicleQty;
    }

    public function setVehicleQty($vehicleQty)
    {
        $this->vehicleQty = $vehicleQty;
        $this->apiParas["vehicleQty"] = $vehicleQty;
    }

    public function getExpressItemName()
    {
        return $this->expressItemName;
    }

    public function setExpressItemName($expressItemName)
    {
        $this->expressItemName = $expressItemName;
        $this->apiParas["expressItemName"] = $expressItemName;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty = $expressItemQty;
        $this->apiParas["expressItemQty"] = $expressItemQty;
    }

    public function getSignReceiptFlag()
    {
        return $this->signReceiptFlag;
    }

    public function setSignReceiptFlag($signReceiptFlag)
    {
        $this->signReceiptFlag = $signReceiptFlag;
        $this->apiParas["signReceiptFlag"] = $signReceiptFlag;
    }

    public function getDeliveryReceiptFlag()
    {
        return $this->deliveryReceiptFlag;
    }

    public function setDeliveryReceiptFlag($deliveryReceiptFlag)
    {
        $this->deliveryReceiptFlag = $deliveryReceiptFlag;
        $this->apiParas["deliveryReceiptFlag"] = $deliveryReceiptFlag;
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

    public function getLoadFlag()
    {
        return $this->loadFlag;
    }

    public function setLoadFlag($loadFlag)
    {
        $this->loadFlag = $loadFlag;
        $this->apiParas["loadFlag"] = $loadFlag;
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

    public function getReceiptFlag()
    {
        return $this->receiptFlag;
    }

    public function setReceiptFlag($receiptFlag)
    {
        $this->receiptFlag = $receiptFlag;
        $this->apiParas["receiptFlag"] = $receiptFlag;
    }

    public function getFcFlag()
    {
        return $this->fcFlag;
    }

    public function setFcFlag($fcFlag)
    {
        $this->fcFlag = $fcFlag;
        $this->apiParas["fcFlag"] = $fcFlag;
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

    public function getPickupBeginTime()
    {
        return $this->pickupBeginTime;
    }

    public function setPickupBeginTime($pickupBeginTime)
    {
        $this->pickupBeginTime = $pickupBeginTime;
        $this->apiParas["pickupBeginTime"] = $pickupBeginTime;
    }

    public function getPickupEndTime()
    {
        return $this->pickupEndTime;
    }

    public function setPickupEndTime($pickupEndTime)
    {
        $this->pickupEndTime = $pickupEndTime;
        $this->apiParas["pickupEndTime"] = $pickupEndTime;
    }

    public function getBussinessType()
    {
        return $this->bussinessType;
    }

    public function setBussinessType($bussinessType)
    {
        $this->bussinessType = $bussinessType;
        $this->apiParas["bussinessType"] = $bussinessType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
        $this->apiParas["deliveryType"] = $deliveryType;
    }

    public function getSenderCompany()
    {
        return $this->senderCompany;
    }

    public function setSenderCompany($senderCompany)
    {
        $this->senderCompany = $senderCompany;
        $this->apiParas["senderCompany"] = $senderCompany;
    }

    public function getReceiverCompany()
    {
        return $this->receiverCompany;
    }

    public function setReceiverCompany($receiverCompany)
    {
        $this->receiverCompany = $receiverCompany;
        $this->apiParas["receiverCompany"] = $receiverCompany;
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

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode = $warehouseCode;
        $this->apiParas["warehouseCode"] = $warehouseCode;
    }

    public function getProjectName()
    {
        return $this->projectName;
    }

    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
        $this->apiParas["projectName"] = $projectName;
    }

    public function getActualSpId()
    {
        return $this->actualSpId;
    }

    public function setActualSpId($actualSpId)
    {
        $this->actualSpId = $actualSpId;
        $this->apiParas["actualSpId"] = $actualSpId;
    }

    public function getColdChainOn()
    {
        return $this->coldChainOn;
    }

    public function setColdChainOn($coldChainOn)
    {
        $this->coldChainOn = $coldChainOn;
        $this->apiParas["coldChainOn"] = $coldChainOn;
    }

    public function getTemptureNum()
    {
        return $this->temptureNum;
    }

    public function setTemptureNum($temptureNum)
    {
        $this->temptureNum = $temptureNum;
        $this->apiParas["temptureNum"] = $temptureNum;
    }

    public function getQingzhenOn()
    {
        return $this->qingzhenOn;
    }

    public function setQingzhenOn($qingzhenOn)
    {
        $this->qingzhenOn = $qingzhenOn;
        $this->apiParas["qingzhenOn"] = $qingzhenOn;
    }

    public function getYiwuranOn()
    {
        return $this->yiwuranOn;
    }

    public function setYiwuranOn($yiwuranOn)
    {
        $this->yiwuranOn = $yiwuranOn;
        $this->apiParas["yiwuranOn"] = $yiwuranOn;
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

    public function getHeavyUpstair()
    {
        return $this->heavyUpstair;
    }

    public function setHeavyUpstair($heavyUpstair)
    {
        $this->heavyUpstair = $heavyUpstair;
        $this->apiParas["heavyUpstair"] = $heavyUpstair;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->wayBillCode = $wayBillCode;
        $this->apiParas["wayBillCode"] = $wayBillCode;
    }

    public function getSpId()
    {
        return $this->spId;
    }

    public function setSpId($spId)
    {
        $this->spId = $spId;
        $this->apiParas["spId"] = $spId;
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

    public function getPackageServiceOn()
    {
        return $this->packageServiceOn;
    }

    public function setPackageServiceOn($packageServiceOn)
    {
        $this->packageServiceOn = $packageServiceOn;
        $this->apiParas["packageServiceOn"] = $packageServiceOn;
    }

    public function getDeliveryMthd()
    {
        return $this->deliveryMthd;
    }

    public function setDeliveryMthd($deliveryMthd)
    {
        $this->deliveryMthd = $deliveryMthd;
        $this->apiParas["deliveryMthd"] = $deliveryMthd;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
        $this->apiParas["providerCode"] = $providerCode;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }

    public function setPackageNo($packageNo)
    {
        $this->packageNo = $packageNo;
        $this->apiParas["packageNo"] = $packageNo;
    }

    public function getClientNo()
    {
        return $this->clientNo;
    }

    public function setClientNo($clientNo)
    {
        $this->clientNo = $clientNo;
        $this->apiParas["clientNo"] = $clientNo;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
    }

    public function getSiteCollect()
    {
        return $this->siteCollect;
    }

    public function setSiteCollect($siteCollect)
    {
        $this->siteCollect = $siteCollect;
        $this->apiParas["siteCollect"] = $siteCollect;
    }

    public function getSiteDelivery()
    {
        return $this->siteDelivery;
    }

    public function setSiteDelivery($siteDelivery)
    {
        $this->siteDelivery = $siteDelivery;
        $this->apiParas["siteDelivery"] = $siteDelivery;
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

    public function getSelfCollectSiteId()
    {
        return $this->selfCollectSiteId;
    }

    public function setSelfCollectSiteId($selfCollectSiteId)
    {
        $this->selfCollectSiteId = $selfCollectSiteId;
        $this->apiParas["selfCollectSiteId"] = $selfCollectSiteId;
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

    public function getExpectedArrivalStartTime()
    {
        return $this->expectedArrivalStartTime;
    }

    public function setExpectedArrivalStartTime($expectedArrivalStartTime)
    {
        $this->expectedArrivalStartTime = $expectedArrivalStartTime;
        $this->apiParas["expectedArrivalStartTime"] = $expectedArrivalStartTime;
    }

    public function getExpectedArrivalEndTime()
    {
        return $this->expectedArrivalEndTime;
    }

    public function setExpectedArrivalEndTime($expectedArrivalEndTime)
    {
        $this->expectedArrivalEndTime = $expectedArrivalEndTime;
        $this->apiParas["expectedArrivalEndTime"] = $expectedArrivalEndTime;
    }

    public function getVehicleOrderNo()
    {
        return $this->vehicleOrderNo;
    }

    public function setVehicleOrderNo($vehicleOrderNo)
    {
        $this->vehicleOrderNo = $vehicleOrderNo;
        $this->apiParas["vehicleOrderNo"] = $vehicleOrderNo;
    }

    public function getMessageSign()
    {
        return $this->messageSign;
    }

    public function setMessageSign($messageSign)
    {
        $this->messageSign = $messageSign;
        $this->apiParas["messageSign"] = $messageSign;
    }

    public function getCheckPreSort()
    {
        return $this->checkPreSort;
    }

    public function setCheckPreSort($checkPreSort)
    {
        $this->checkPreSort = $checkPreSort;
        $this->apiParas["checkPreSort"] = $checkPreSort;
    }

    public function getReceiverNameSplit()
    {
        return $this->receiverNameSplit;
    }

    public function setReceiverNameSplit($receiverNameSplit)
    {
        $this->receiverNameSplit = $receiverNameSplit;
        $this->apiParas["receiverNameSplit"] = $receiverNameSplit;
    }

    public function getReceiverCompanySplit()
    {
        return $this->receiverCompanySplit;
    }

    public function setReceiverCompanySplit($receiverCompanySplit)
    {
        $this->receiverCompanySplit = $receiverCompanySplit;
        $this->apiParas["receiverCompanySplit"] = $receiverCompanySplit;
    }

    public function getReceiverMobileSplit()
    {
        return $this->receiverMobileSplit;
    }

    public function setReceiverMobileSplit($receiverMobileSplit)
    {
        $this->receiverMobileSplit = $receiverMobileSplit;
        $this->apiParas["receiverMobileSplit"] = $receiverMobileSplit;
    }

    public function getReceiverPhoneSplit()
    {
        return $this->receiverPhoneSplit;
    }

    public function setReceiverPhoneSplit($receiverPhoneSplit)
    {
        $this->receiverPhoneSplit = $receiverPhoneSplit;
        $this->apiParas["receiverPhoneSplit"] = $receiverPhoneSplit;
    }

    public function getReceiverProvinceNameSplit()
    {
        return $this->receiverProvinceNameSplit;
    }

    public function setReceiverProvinceNameSplit($receiverProvinceNameSplit)
    {
        $this->receiverProvinceNameSplit = $receiverProvinceNameSplit;
        $this->apiParas["receiverProvinceNameSplit"] = $receiverProvinceNameSplit;
    }

    public function getReceiverProvinceSplit()
    {
        return $this->receiverProvinceSplit;
    }

    public function setReceiverProvinceSplit($receiverProvinceSplit)
    {
        $this->receiverProvinceSplit = $receiverProvinceSplit;
        $this->apiParas["receiverProvinceSplit"] = $receiverProvinceSplit;
    }

    public function getReceiverCityNameSplit()
    {
        return $this->receiverCityNameSplit;
    }

    public function setReceiverCityNameSplit($receiverCityNameSplit)
    {
        $this->receiverCityNameSplit = $receiverCityNameSplit;
        $this->apiParas["receiverCityNameSplit"] = $receiverCityNameSplit;
    }

    public function getReceiverCitySplit()
    {
        return $this->receiverCitySplit;
    }

    public function setReceiverCitySplit($receiverCitySplit)
    {
        $this->receiverCitySplit = $receiverCitySplit;
        $this->apiParas["receiverCitySplit"] = $receiverCitySplit;
    }

    public function getReceiverCountyNameSplit()
    {
        return $this->receiverCountyNameSplit;
    }

    public function setReceiverCountyNameSplit($receiverCountyNameSplit)
    {
        $this->receiverCountyNameSplit = $receiverCountyNameSplit;
        $this->apiParas["receiverCountyNameSplit"] = $receiverCountyNameSplit;
    }

    public function getReceiverCountySplit()
    {
        return $this->receiverCountySplit;
    }

    public function setReceiverCountySplit($receiverCountySplit)
    {
        $this->receiverCountySplit = $receiverCountySplit;
        $this->apiParas["receiverCountySplit"] = $receiverCountySplit;
    }

    public function getReceiverTownNameSplit()
    {
        return $this->receiverTownNameSplit;
    }

    public function setReceiverTownNameSplit($receiverTownNameSplit)
    {
        $this->receiverTownNameSplit = $receiverTownNameSplit;
        $this->apiParas["receiverTownNameSplit"] = $receiverTownNameSplit;
    }

    public function getReceiverTownSplit()
    {
        return $this->receiverTownSplit;
    }

    public function setReceiverTownSplit($receiverTownSplit)
    {
        $this->receiverTownSplit = $receiverTownSplit;
        $this->apiParas["receiverTownSplit"] = $receiverTownSplit;
    }

    public function getReceiverAddressSplit()
    {
        return $this->receiverAddressSplit;
    }

    public function setReceiverAddressSplit($receiverAddressSplit)
    {
        $this->receiverAddressSplit = $receiverAddressSplit;
        $this->apiParas["receiverAddressSplit"] = $receiverAddressSplit;
    }

    public function getExpectedArrivalStartTimeSplit()
    {
        return $this->expectedArrivalStartTimeSplit;
    }

    public function setExpectedArrivalStartTimeSplit($expectedArrivalStartTimeSplit)
    {
        $this->expectedArrivalStartTimeSplit = $expectedArrivalStartTimeSplit;
        $this->apiParas["expectedArrivalStartTimeSplit"] = $expectedArrivalStartTimeSplit;
    }

    public function getExpectedArrivalEndTimeSplit()
    {
        return $this->expectedArrivalEndTimeSplit;
    }

    public function setExpectedArrivalEndTimeSplit($expectedArrivalEndTimeSplit)
    {
        $this->expectedArrivalEndTimeSplit = $expectedArrivalEndTimeSplit;
        $this->apiParas["expectedArrivalEndTimeSplit"] = $expectedArrivalEndTimeSplit;
    }

    public function getOrderNoSplit()
    {
        return $this->orderNoSplit;
    }

    public function setOrderNoSplit($orderNoSplit)
    {
        $this->orderNoSplit = $orderNoSplit;
        $this->apiParas["orderNoSplit"] = $orderNoSplit;
    }

    public function getExpressItemNameSplit()
    {
        return $this->expressItemNameSplit;
    }

    public function setExpressItemNameSplit($expressItemNameSplit)
    {
        $this->expressItemNameSplit = $expressItemNameSplit;
        $this->apiParas["expressItemNameSplit"] = $expressItemNameSplit;
    }

    public function getGrossVolumeSplit()
    {
        return $this->grossVolumeSplit;
    }

    public function setGrossVolumeSplit($grossVolumeSplit)
    {
        $this->grossVolumeSplit = $grossVolumeSplit;
        $this->apiParas["grossVolumeSplit"] = $grossVolumeSplit;
    }

    public function getGrossWeightSplit()
    {
        return $this->grossWeightSplit;
    }

    public function setGrossWeightSplit($grossWeightSplit)
    {
        $this->grossWeightSplit = $grossWeightSplit;
        $this->apiParas["grossWeightSplit"] = $grossWeightSplit;
    }

    public function getExpressItemQtySplit()
    {
        return $this->expressItemQtySplit;
    }

    public function setExpressItemQtySplit($expressItemQtySplit)
    {
        $this->expressItemQtySplit = $expressItemQtySplit;
        $this->apiParas["expressItemQtySplit"] = $expressItemQtySplit;
    }

    public function getTemptureNumSplit()
    {
        return $this->temptureNumSplit;
    }

    public function setTemptureNumSplit($temptureNumSplit)
    {
        $this->temptureNumSplit = $temptureNumSplit;
        $this->apiParas["temptureNumSplit"] = $temptureNumSplit;
    }

    public function getQuarantineCertSplit()
    {
        return $this->quarantineCertSplit;
    }

    public function setQuarantineCertSplit($quarantineCertSplit)
    {
        $this->quarantineCertSplit = $quarantineCertSplit;
        $this->apiParas["quarantineCertSplit"] = $quarantineCertSplit;
    }

    public function getDeliveryIntoWarehouseSplit()
    {
        return $this->deliveryIntoWarehouseSplit;
    }

    public function setDeliveryIntoWarehouseSplit($deliveryIntoWarehouseSplit)
    {
        $this->deliveryIntoWarehouseSplit = $deliveryIntoWarehouseSplit;
        $this->apiParas["deliveryIntoWarehouseSplit"] = $deliveryIntoWarehouseSplit;
    }

    public function getInStorageNoSplit()
    {
        return $this->inStorageNoSplit;
    }

    public function setInStorageNoSplit($inStorageNoSplit)
    {
        $this->inStorageNoSplit = $inStorageNoSplit;
        $this->apiParas["inStorageNoSplit"] = $inStorageNoSplit;
    }

    public function getInStorageTimeSplit()
    {
        return $this->inStorageTimeSplit;
    }

    public function setInStorageTimeSplit($inStorageTimeSplit)
    {
        $this->inStorageTimeSplit = $inStorageTimeSplit;
        $this->apiParas["inStorageTimeSplit"] = $inStorageTimeSplit;
    }

    public function getInStorageRemarkSplit()
    {
        return $this->inStorageRemarkSplit;
    }

    public function setInStorageRemarkSplit($inStorageRemarkSplit)
    {
        $this->inStorageRemarkSplit = $inStorageRemarkSplit;
        $this->apiParas["inStorageRemarkSplit"] = $inStorageRemarkSplit;
    }

    public function getLoadFlagSplit()
    {
        return $this->loadFlagSplit;
    }

    public function setLoadFlagSplit($loadFlagSplit)
    {
        $this->loadFlagSplit = $loadFlagSplit;
        $this->apiParas["loadFlagSplit"] = $loadFlagSplit;
    }

    public function getUnloadFlagSplit()
    {
        return $this->unloadFlagSplit;
    }

    public function setUnloadFlagSplit($unloadFlagSplit)
    {
        $this->unloadFlagSplit = $unloadFlagSplit;
        $this->apiParas["unloadFlagSplit"] = $unloadFlagSplit;
    }

    public function getRemarkSplit()
    {
        return $this->remarkSplit;
    }

    public function setRemarkSplit($remarkSplit)
    {
        $this->remarkSplit = $remarkSplit;
        $this->apiParas["remarkSplit"] = $remarkSplit;
    }

    public function getPackageModelNosSplit()
    {
        return $this->packageModelNosSplit;
    }

    public function setPackageModelNosSplit($packageModelNosSplit)
    {
        $this->packageModelNosSplit = $packageModelNosSplit;
        $this->apiParas["packageModelNosSplit"] = $packageModelNosSplit;
    }

    public function getQingzhenOnSplit()
    {
        return $this->qingzhenOnSplit;
    }

    public function setQingzhenOnSplit($qingzhenOnSplit)
    {
        $this->qingzhenOnSplit = $qingzhenOnSplit;
        $this->apiParas["qingzhenOnSplit"] = $qingzhenOnSplit;
    }

    public function getYiwuranOnSplit()
    {
        return $this->yiwuranOnSplit;
    }

    public function setYiwuranOnSplit($yiwuranOnSplit)
    {
        $this->yiwuranOnSplit = $yiwuranOnSplit;
        $this->apiParas["yiwuranOnSplit"] = $yiwuranOnSplit;
    }

    public function getReceiverNickNameSplit()
    {
        return $this->receiverNickNameSplit;
    }

    public function setReceiverNickNameSplit($receiverNickNameSplit)
    {
        $this->receiverNickNameSplit = $receiverNickNameSplit;
        $this->apiParas["receiverNickNameSplit"] = $receiverNickNameSplit;
    }

    public function getGuaranteeValueSplit()
    {
        return $this->guaranteeValueSplit;
    }

    public function setGuaranteeValueSplit($guaranteeValueSplit)
    {
        $this->guaranteeValueSplit = $guaranteeValueSplit;
        $this->apiParas["guaranteeValueSplit"] = $guaranteeValueSplit;
    }

    public function getHeavyUpstairSplit()
    {
        return $this->heavyUpstairSplit;
    }

    public function setHeavyUpstairSplit($heavyUpstairSplit)
    {
        $this->heavyUpstairSplit = $heavyUpstairSplit;
        $this->apiParas["heavyUpstairSplit"] = $heavyUpstairSplit;
    }

    public function getIsvOrderAmount()
    {
        return $this->isvOrderAmount;
    }

    public function setIsvOrderAmount($isvOrderAmount)
    {
        $this->isvOrderAmount = $isvOrderAmount;
        $this->apiParas["isvOrderAmount"] = $isvOrderAmount;
    }

    public function getTracker()
    {
        return $this->tracker;
    }

    public function setTracker($tracker)
    {
        $this->tracker = $tracker;
        $this->apiParas["tracker"] = $tracker;
    }

    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    public function setDeliveryMode($deliveryMode)
    {
        $this->deliveryMode = $deliveryMode;
        $this->apiParas["deliveryMode"] = $deliveryMode;
    }

    public function getWarehouseServiceType()
    {
        return $this->warehouseServiceType;
    }

    public function setWarehouseServiceType($warehouseServiceType)
    {
        $this->warehouseServiceType = $warehouseServiceType;
        $this->apiParas["warehouseServiceType"] = $warehouseServiceType;
    }

    public function getHomeDeliveryOn()
    {
        return $this->homeDeliveryOn;
    }

    public function setHomeDeliveryOn($homeDeliveryOn)
    {
        $this->homeDeliveryOn = $homeDeliveryOn;
        $this->apiParas["homeDeliveryOn"] = $homeDeliveryOn;
    }

    public function getSiteCode()
    {
        return $this->siteCode;
    }

    public function setSiteCode($siteCode)
    {
        $this->siteCode = $siteCode;
        $this->apiParas["siteCode"] = $siteCode;
    }

    public function getReferCancelDate()
    {
        return $this->referCancelDate;
    }

    public function setReferCancelDate($referCancelDate)
    {
        $this->referCancelDate = $referCancelDate;
        $this->apiParas["referCancelDate"] = $referCancelDate;
    }

    public function getRebackConfluenceOn()
    {
        return $this->rebackConfluenceOn;
    }

    public function setRebackConfluenceOn($rebackConfluenceOn)
    {
        $this->rebackConfluenceOn = $rebackConfluenceOn;
        $this->apiParas["rebackConfluenceOn"] = $rebackConfluenceOn;
    }

    public function getExpressDeliveryOn()
    {
        return $this->expressDeliveryOn;
    }

    public function setExpressDeliveryOn($expressDeliveryOn)
    {
        $this->expressDeliveryOn = $expressDeliveryOn;
        $this->apiParas["expressDeliveryOn"] = $expressDeliveryOn;
    }

    public function getExpectPickupDate()
    {
        return $this->expectPickupDate;
    }

    public function setExpectPickupDate($expectPickupDate)
    {
        $this->expectPickupDate = $expectPickupDate;
        $this->apiParas["expectPickupDate"] = $expectPickupDate;
    }

    public function getExpectDeliveryDate()
    {
        return $this->expectDeliveryDate;
    }

    public function setExpectDeliveryDate($expectDeliveryDate)
    {
        $this->expectDeliveryDate = $expectDeliveryDate;
        $this->apiParas["expectDeliveryDate"] = $expectDeliveryDate;
    }

    public function getWarehousePlatformName()
    {
        return $this->warehousePlatformName;
    }

    public function setWarehousePlatformName($warehousePlatformName)
    {
        $this->warehousePlatformName = $warehousePlatformName;
        $this->apiParas["warehousePlatformName"] = $warehousePlatformName;
    }

    public function getTemporaryStorage()
    {
        return $this->temporaryStorage;
    }

    public function setTemporaryStorage($temporaryStorage)
    {
        $this->temporaryStorage = $temporaryStorage;
        $this->apiParas["temporaryStorage"] = $temporaryStorage;
    }

    public function getPredictReceiptDate()
    {
        return $this->predictReceiptDate;
    }

    public function setPredictReceiptDate($predictReceiptDate)
    {
        $this->predictReceiptDate = $predictReceiptDate;
        $this->apiParas["predictReceiptDate"] = $predictReceiptDate;
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

    public function getPeaceMindReceive()
    {
        return $this->peaceMindReceive;
    }

    public function setPeaceMindReceive($peaceMindReceive)
    {
        $this->peaceMindReceive = $peaceMindReceive;
        $this->apiParas["peaceMindReceive"] = $peaceMindReceive;
    }

    public function getBackInfoOn()
    {
        return $this->backInfoOn;
    }

    public function setBackInfoOn($backInfoOn)
    {
        $this->backInfoOn = $backInfoOn;
        $this->apiParas["backInfoOn"] = $backInfoOn;
    }

    public function getBackName()
    {
        return $this->backName;
    }

    public function setBackName($backName)
    {
        $this->backName = $backName;
        $this->apiParas["backName"] = $backName;
    }

    public function getBackMobile()
    {
        return $this->backMobile;
    }

    public function setBackMobile($backMobile)
    {
        $this->backMobile = $backMobile;
        $this->apiParas["backMobile"] = $backMobile;
    }

    public function getBackPhone()
    {
        return $this->backPhone;
    }

    public function setBackPhone($backPhone)
    {
        $this->backPhone = $backPhone;
        $this->apiParas["backPhone"] = $backPhone;
    }

    public function getBackProvinceName()
    {
        return $this->backProvinceName;
    }

    public function setBackProvinceName($backProvinceName)
    {
        $this->backProvinceName = $backProvinceName;
        $this->apiParas["backProvinceName"] = $backProvinceName;
    }

    public function getBackCityName()
    {
        return $this->backCityName;
    }

    public function setBackCityName($backCityName)
    {
        $this->backCityName = $backCityName;
        $this->apiParas["backCityName"] = $backCityName;
    }

    public function getBackCountyName()
    {
        return $this->backCountyName;
    }

    public function setBackCountyName($backCountyName)
    {
        $this->backCountyName = $backCountyName;
        $this->apiParas["backCountyName"] = $backCountyName;
    }

    public function getBackTownName()
    {
        return $this->backTownName;
    }

    public function setBackTownName($backTownName)
    {
        $this->backTownName = $backTownName;
        $this->apiParas["backTownName"] = $backTownName;
    }

    public function getBackAddress()
    {
        return $this->backAddress;
    }

    public function setBackAddress($backAddress)
    {
        $this->backAddress = $backAddress;
        $this->apiParas["backAddress"] = $backAddress;
    }

    public function getImportFlag()
    {
        return $this->importFlag;
    }

    public function setImportFlag($importFlag)
    {
        $this->importFlag = $importFlag;
        $this->apiParas["importFlag"] = $importFlag;
    }

    public function getFileWithCargo()
    {
        return $this->fileWithCargo;
    }

    public function setFileWithCargo($fileWithCargo)
    {
        $this->fileWithCargo = $fileWithCargo;
        $this->apiParas["fileWithCargo"] = $fileWithCargo;
    }
}
