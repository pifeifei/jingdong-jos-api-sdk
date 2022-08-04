<?php

namespace ACES\Request;

class EclpCoEvaluateB2BLwbFreightMainRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.evaluateB2BLwbFreightMain';
    }

    public function check()
    {
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

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getSenderNickName()
    {
        return $this->apiParas['senderNickName'];
    }

    public function setSenderNickName($senderNickName)
    {
        $this->apiParas['senderNickName'] = $senderNickName;

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

    public function getSenderProvince()
    {
        return $this->apiParas['senderProvince'];
    }

    public function setSenderProvince($senderProvince)
    {
        $this->apiParas['senderProvince'] = $senderProvince;

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

    public function getSenderCounty()
    {
        return $this->apiParas['senderCounty'];
    }

    public function setSenderCounty($senderCounty)
    {
        $this->apiParas['senderCounty'] = $senderCounty;

        return $this;
    }

    public function getSenderTown()
    {
        return $this->apiParas['senderTown'];
    }

    public function setSenderTown($senderTown)
    {
        $this->apiParas['senderTown'] = $senderTown;

        return $this;
    }

    public function getSenderProvinceName()
    {
        return $this->apiParas['senderProvinceName'];
    }

    public function setSenderProvinceName($senderProvinceName)
    {
        $this->apiParas['senderProvinceName'] = $senderProvinceName;

        return $this;
    }

    public function getSenderCityName()
    {
        return $this->apiParas['senderCityName'];
    }

    public function setSenderCityName($senderCityName)
    {
        $this->apiParas['senderCityName'] = $senderCityName;

        return $this;
    }

    public function getSenderCountyName()
    {
        return $this->apiParas['senderCountyName'];
    }

    public function setSenderCountyName($senderCountyName)
    {
        $this->apiParas['senderCountyName'] = $senderCountyName;

        return $this;
    }

    public function getSenderTownName()
    {
        return $this->apiParas['senderTownName'];
    }

    public function setSenderTownName($senderTownName)
    {
        $this->apiParas['senderTownName'] = $senderTownName;

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

    public function getReceiverNickName()
    {
        return $this->apiParas['receiverNickName'];
    }

    public function setReceiverNickName($receiverNickName)
    {
        $this->apiParas['receiverNickName'] = $receiverNickName;

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

    public function getReceiverProvince()
    {
        return $this->apiParas['receiverProvince'];
    }

    public function setReceiverProvince($receiverProvince)
    {
        $this->apiParas['receiverProvince'] = $receiverProvince;

        return $this;
    }

    public function getReceiverCity()
    {
        return $this->apiParas['receiverCity'];
    }

    public function setReceiverCity($receiverCity)
    {
        $this->apiParas['receiverCity'] = $receiverCity;

        return $this;
    }

    public function getReceiverCounty()
    {
        return $this->apiParas['receiverCounty'];
    }

    public function setReceiverCounty($receiverCounty)
    {
        $this->apiParas['receiverCounty'] = $receiverCounty;

        return $this;
    }

    public function getReceiverTown()
    {
        return $this->apiParas['receiverTown'];
    }

    public function setReceiverTown($receiverTown)
    {
        $this->apiParas['receiverTown'] = $receiverTown;

        return $this;
    }

    public function getReceiverProvinceName()
    {
        return $this->apiParas['receiverProvinceName'];
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->apiParas['receiverProvinceName'] = $receiverProvinceName;

        return $this;
    }

    public function getReceiverCityName()
    {
        return $this->apiParas['receiverCityName'];
    }

    public function setReceiverCityName($receiverCityName)
    {
        $this->apiParas['receiverCityName'] = $receiverCityName;

        return $this;
    }

    public function getReceiverCountyName()
    {
        return $this->apiParas['receiverCountyName'];
    }

    public function setReceiverCountyName($receiverCountyName)
    {
        $this->apiParas['receiverCountyName'] = $receiverCountyName;

        return $this;
    }

    public function getReceiverTownName()
    {
        return $this->apiParas['receiverTownName'];
    }

    public function setReceiverTownName($receiverTownName)
    {
        $this->apiParas['receiverTownName'] = $receiverTownName;

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

    public function getGrossWeight()
    {
        return $this->apiParas['grossWeight'];
    }

    public function setGrossWeight($grossWeight)
    {
        $this->apiParas['grossWeight'] = $grossWeight;

        return $this;
    }

    public function getGrossVolume()
    {
        return $this->apiParas['grossVolume'];
    }

    public function setGrossVolume($grossVolume)
    {
        $this->apiParas['grossVolume'] = $grossVolume;

        return $this;
    }

    public function getCreateTime()
    {
        return $this->apiParas['createTime'];
    }

    public function setCreateTime($createTime)
    {
        $this->apiParas['createTime'] = $createTime;

        return $this;
    }

    public function getCreateUser()
    {
        return $this->apiParas['createUser'];
    }

    public function setCreateUser($createUser)
    {
        $this->apiParas['createUser'] = $createUser;

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

    public function getIsCod()
    {
        return $this->apiParas['isCod'];
    }

    public function setIsCod($isCod)
    {
        $this->apiParas['isCod'] = $isCod;

        return $this;
    }

    public function getVehicleTypeName()
    {
        return $this->apiParas['vehicleTypeName'];
    }

    public function setVehicleTypeName($vehicleTypeName)
    {
        $this->apiParas['vehicleTypeName'] = $vehicleTypeName;

        return $this;
    }

    public function getVehicleTypeNo()
    {
        return $this->apiParas['vehicleTypeNo'];
    }

    public function setVehicleTypeNo($vehicleTypeNo)
    {
        $this->apiParas['vehicleTypeNo'] = $vehicleTypeNo;

        return $this;
    }

    public function getVehicleQty()
    {
        return $this->apiParas['vehicleQty'];
    }

    public function setVehicleQty($vehicleQty)
    {
        $this->apiParas['vehicleQty'] = $vehicleQty;

        return $this;
    }

    public function getExpressItemName()
    {
        return $this->apiParas['expressItemName'];
    }

    public function setExpressItemName($expressItemName)
    {
        $this->apiParas['expressItemName'] = $expressItemName;

        return $this;
    }

    public function getExpressItemQty()
    {
        return $this->apiParas['expressItemQty'];
    }

    public function setExpressItemQty($expressItemQty)
    {
        $this->apiParas['expressItemQty'] = $expressItemQty;

        return $this;
    }

    public function getSignReceiptFlag()
    {
        return $this->apiParas['signReceiptFlag'];
    }

    public function setSignReceiptFlag($signReceiptFlag)
    {
        $this->apiParas['signReceiptFlag'] = $signReceiptFlag;

        return $this;
    }

    public function getDeliveryReceiptFlag()
    {
        return $this->apiParas['deliveryReceiptFlag'];
    }

    public function setDeliveryReceiptFlag($deliveryReceiptFlag)
    {
        $this->apiParas['deliveryReceiptFlag'] = $deliveryReceiptFlag;

        return $this;
    }

    public function getDeliveryIntoWarehouse()
    {
        return $this->apiParas['deliveryIntoWarehouse'];
    }

    public function setDeliveryIntoWarehouse($deliveryIntoWarehouse)
    {
        $this->apiParas['deliveryIntoWarehouse'] = $deliveryIntoWarehouse;

        return $this;
    }

    public function getLoadFlag()
    {
        return $this->apiParas['loadFlag'];
    }

    public function setLoadFlag($loadFlag)
    {
        $this->apiParas['loadFlag'] = $loadFlag;

        return $this;
    }

    public function getUnloadFlag()
    {
        return $this->apiParas['unloadFlag'];
    }

    public function setUnloadFlag($unloadFlag)
    {
        $this->apiParas['unloadFlag'] = $unloadFlag;

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

    public function getFcFlag()
    {
        return $this->apiParas['fcFlag'];
    }

    public function setFcFlag($fcFlag)
    {
        $this->apiParas['fcFlag'] = $fcFlag;

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

    public function getPickupBeginTime()
    {
        return $this->apiParas['pickupBeginTime'];
    }

    public function setPickupBeginTime($pickupBeginTime)
    {
        $this->apiParas['pickupBeginTime'] = $pickupBeginTime;

        return $this;
    }

    public function getPickupEndTime()
    {
        return $this->apiParas['pickupEndTime'];
    }

    public function setPickupEndTime($pickupEndTime)
    {
        $this->apiParas['pickupEndTime'] = $pickupEndTime;

        return $this;
    }

    public function getBussinessType()
    {
        return $this->apiParas['bussinessType'];
    }

    public function setBussinessType($bussinessType)
    {
        $this->apiParas['bussinessType'] = $bussinessType;

        return $this;
    }

    public function getDeliveryType()
    {
        return $this->apiParas['deliveryType'];
    }

    public function setDeliveryType($deliveryType)
    {
        $this->apiParas['deliveryType'] = $deliveryType;

        return $this;
    }

    public function getSenderCompany()
    {
        return $this->apiParas['senderCompany'];
    }

    public function setSenderCompany($senderCompany)
    {
        $this->apiParas['senderCompany'] = $senderCompany;

        return $this;
    }

    public function getReceiverCompany()
    {
        return $this->apiParas['receiverCompany'];
    }

    public function setReceiverCompany($receiverCompany)
    {
        $this->apiParas['receiverCompany'] = $receiverCompany;

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

    public function getWarehouseCode()
    {
        return $this->apiParas['warehouseCode'];
    }

    public function setWarehouseCode($warehouseCode)
    {
        $this->apiParas['warehouseCode'] = $warehouseCode;

        return $this;
    }

    public function getProjectName()
    {
        return $this->apiParas['projectName'];
    }

    public function setProjectName($projectName)
    {
        $this->apiParas['projectName'] = $projectName;

        return $this;
    }

    public function getActualSpId()
    {
        return $this->apiParas['actualSpId'];
    }

    public function setActualSpId($actualSpId)
    {
        $this->apiParas['actualSpId'] = $actualSpId;

        return $this;
    }

    public function getColdChainOn()
    {
        return $this->apiParas['coldChainOn'];
    }

    public function setColdChainOn($coldChainOn)
    {
        $this->apiParas['coldChainOn'] = $coldChainOn;

        return $this;
    }

    public function getTemptureNum()
    {
        return $this->apiParas['temptureNum'];
    }

    public function setTemptureNum($temptureNum)
    {
        $this->apiParas['temptureNum'] = $temptureNum;

        return $this;
    }

    public function getQingzhenOn()
    {
        return $this->apiParas['qingzhenOn'];
    }

    public function setQingzhenOn($qingzhenOn)
    {
        $this->apiParas['qingzhenOn'] = $qingzhenOn;

        return $this;
    }

    public function getYiwuranOn()
    {
        return $this->apiParas['yiwuranOn'];
    }

    public function setYiwuranOn($yiwuranOn)
    {
        $this->apiParas['yiwuranOn'] = $yiwuranOn;

        return $this;
    }

    public function getInStorageNo()
    {
        return $this->apiParas['inStorageNo'];
    }

    public function setInStorageNo($inStorageNo)
    {
        $this->apiParas['inStorageNo'] = $inStorageNo;

        return $this;
    }

    public function getInStorageTime()
    {
        return $this->apiParas['inStorageTime'];
    }

    public function setInStorageTime($inStorageTime)
    {
        $this->apiParas['inStorageTime'] = $inStorageTime;

        return $this;
    }

    public function getInStorageRemark()
    {
        return $this->apiParas['inStorageRemark'];
    }

    public function setInStorageRemark($inStorageRemark)
    {
        $this->apiParas['inStorageRemark'] = $inStorageRemark;

        return $this;
    }

    public function getHeavyUpstair()
    {
        return $this->apiParas['heavyUpstair'];
    }

    public function setHeavyUpstair($heavyUpstair)
    {
        $this->apiParas['heavyUpstair'] = $heavyUpstair;

        return $this;
    }

    public function getWayBillCode()
    {
        return $this->apiParas['wayBillCode'];
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->apiParas['wayBillCode'] = $wayBillCode;

        return $this;
    }
}
