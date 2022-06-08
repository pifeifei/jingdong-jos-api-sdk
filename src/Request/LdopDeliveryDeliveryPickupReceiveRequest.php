<?php

namespace ACES\Request;

class LdopDeliveryDeliveryPickupReceiveRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.delivery.deliveryPickupReceive';
    }

    public function check()
    {
    }

    public function getJosPin()
    {
        return $this->apiParas['josPin'];
    }

    public function setJosPin($josPin)
    {
        $this->apiParas['josPin'] = $josPin;

        return $this;
    }

    public function getSalePlat()
    {
        return $this->apiParas['salePlat'];
    }

    public function setSalePlat($salePlat)
    {
        $this->apiParas['salePlat'] = $salePlat;

        return $this;
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;

        return $this;
    }

    public function getThrOrderId()
    {
        return $this->apiParas['thrOrderId'];
    }

    public function setThrOrderId($thrOrderId)
    {
        $this->apiParas['thrOrderId'] = $thrOrderId;

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

    public function getSenderAddress()
    {
        return $this->apiParas['senderAddress'];
    }

    public function setSenderAddress($senderAddress)
    {
        $this->apiParas['senderAddress'] = $senderAddress;

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

    public function getSenderMobile()
    {
        return $this->apiParas['senderMobile'];
    }

    public function setSenderMobile($senderMobile)
    {
        $this->apiParas['senderMobile'] = $senderMobile;

        return $this;
    }

    public function getReceiveName()
    {
        return $this->apiParas['receiveName'];
    }

    public function setReceiveName($receiveName)
    {
        $this->apiParas['receiveName'] = $receiveName;

        return $this;
    }

    public function getReceiveAddress()
    {
        return $this->apiParas['receiveAddress'];
    }

    public function setReceiveAddress($receiveAddress)
    {
        $this->apiParas['receiveAddress'] = $receiveAddress;

        return $this;
    }

    public function getReceiveTel()
    {
        return $this->apiParas['receiveTel'];
    }

    public function setReceiveTel($receiveTel)
    {
        $this->apiParas['receiveTel'] = $receiveTel;

        return $this;
    }

    public function getReceiveMobile()
    {
        return $this->apiParas['receiveMobile'];
    }

    public function setReceiveMobile($receiveMobile)
    {
        $this->apiParas['receiveMobile'] = $receiveMobile;

        return $this;
    }

    public function getProvince()
    {
        return $this->apiParas['province'];
    }

    public function setProvince($province)
    {
        $this->apiParas['province'] = $province;

        return $this;
    }

    public function getCity()
    {
        return $this->apiParas['city'];
    }

    public function setCity($city)
    {
        $this->apiParas['city'] = $city;

        return $this;
    }

    public function getCounty()
    {
        return $this->apiParas['county'];
    }

    public function setCounty($county)
    {
        $this->apiParas['county'] = $county;

        return $this;
    }

    public function getTown()
    {
        return $this->apiParas['town'];
    }

    public function setTown($town)
    {
        $this->apiParas['town'] = $town;

        return $this;
    }

    public function getPackageCount()
    {
        return $this->apiParas['packageCount'];
    }

    public function setPackageCount($packageCount)
    {
        $this->apiParas['packageCount'] = $packageCount;

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

    public function getVloumLong()
    {
        return $this->apiParas['vloumLong'];
    }

    public function setVloumLong($vloumLong)
    {
        $this->apiParas['vloumLong'] = $vloumLong;

        return $this;
    }

    public function getVloumWidth()
    {
        return $this->apiParas['vloumWidth'];
    }

    public function setVloumWidth($vloumWidth)
    {
        $this->apiParas['vloumWidth'] = $vloumWidth;

        return $this;
    }

    public function getVloumHeight()
    {
        return $this->apiParas['vloumHeight'];
    }

    public function setVloumHeight($vloumHeight)
    {
        $this->apiParas['vloumHeight'] = $vloumHeight;

        return $this;
    }

    public function getVloumn()
    {
        return $this->apiParas['vloumn'];
    }

    public function setVloumn($vloumn)
    {
        $this->apiParas['vloumn'] = $vloumn;

        return $this;
    }

    public function getDescription()
    {
        return $this->apiParas['description'];
    }

    public function setDescription($description)
    {
        $this->apiParas['description'] = $description;

        return $this;
    }

    public function getGoodsMoney()
    {
        return $this->apiParas['goodsMoney'];
    }

    public function setGoodsMoney($goodsMoney)
    {
        $this->apiParas['goodsMoney'] = $goodsMoney;

        return $this;
    }

    public function getCollectionValue()
    {
        return $this->apiParas['collectionValue'];
    }

    public function setCollectionValue($collectionValue)
    {
        $this->apiParas['collectionValue'] = $collectionValue;

        return $this;
    }

    public function getCollectionMoney()
    {
        return $this->apiParas['collectionMoney'];
    }

    public function setCollectionMoney($collectionMoney)
    {
        $this->apiParas['collectionMoney'] = $collectionMoney;

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

    public function getGuaranteeValueAmount()
    {
        return $this->apiParas['guaranteeValueAmount'];
    }

    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->apiParas['guaranteeValueAmount'] = $guaranteeValueAmount;

        return $this;
    }

    public function getSignReturn()
    {
        return $this->apiParas['signReturn'];
    }

    public function setSignReturn($signReturn)
    {
        $this->apiParas['signReturn'] = $signReturn;

        return $this;
    }

    public function getAging()
    {
        return $this->apiParas['aging'];
    }

    public function setAging($aging)
    {
        $this->apiParas['aging'] = $aging;

        return $this;
    }

    public function getGoodsType()
    {
        return $this->apiParas['goodsType'];
    }

    public function setGoodsType($goodsType)
    {
        $this->apiParas['goodsType'] = $goodsType;

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

    public function getRemark()
    {
        return $this->apiParas['remark'];
    }

    public function setRemark($remark)
    {
        $this->apiParas['remark'] = $remark;

        return $this;
    }

    public function getIdNumber()
    {
        return $this->apiParas['idNumber'];
    }

    public function setIdNumber($idNumber)
    {
        $this->apiParas['idNumber'] = $idNumber;

        return $this;
    }

    public function getAddedService()
    {
        return $this->apiParas['addedService'];
    }

    public function setAddedService($addedService)
    {
        $this->apiParas['addedService'] = $addedService;

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

    public function getReceiveCompany()
    {
        return $this->apiParas['receiveCompany'];
    }

    public function setReceiveCompany($receiveCompany)
    {
        $this->apiParas['receiveCompany'] = $receiveCompany;

        return $this;
    }

    public function getSenderIdNumber()
    {
        return $this->apiParas['senderIdNumber'];
    }

    public function setSenderIdNumber($senderIdNumber)
    {
        $this->apiParas['senderIdNumber'] = $senderIdNumber;

        return $this;
    }

    public function getSenderIdType()
    {
        return $this->apiParas['senderIdType'];
    }

    public function setSenderIdType($senderIdType)
    {
        $this->apiParas['senderIdType'] = $senderIdType;

        return $this;
    }

    public function getSendAndPickupType()
    {
        return $this->apiParas['sendAndPickupType'];
    }

    public function setSendAndPickupType($sendAndPickupType)
    {
        $this->apiParas['sendAndPickupType'] = $sendAndPickupType;

        return $this;
    }

    public function getOpenIdSeller()
    {
        return $this->apiParas['openIdSeller'];
    }

    public function setOpenIdSeller($openIdSeller)
    {
        $this->apiParas['openIdSeller'] = $openIdSeller;

        return $this;
    }

    public function getXidSeller()
    {
        return $this->apiParas['xidSeller'];
    }

    public function setXidSeller($xidSeller)
    {
        $this->apiParas['xidSeller'] = $xidSeller;

        return $this;
    }

    public function getCustomerTel()
    {
        return $this->apiParas['customerTel'];
    }

    public function setCustomerTel($customerTel)
    {
        $this->apiParas['customerTel'] = $customerTel;

        return $this;
    }

    public function getBackAddress()
    {
        return $this->apiParas['backAddress'];
    }

    public function setBackAddress($backAddress)
    {
        $this->apiParas['backAddress'] = $backAddress;

        return $this;
    }

    public function getCustomerContract()
    {
        return $this->apiParas['customerContract'];
    }

    public function setCustomerContract($customerContract)
    {
        $this->apiParas['customerContract'] = $customerContract;

        return $this;
    }

    public function getPickupOrderId()
    {
        return $this->apiParas['pickupOrderId'];
    }

    public function setPickupOrderId($pickupOrderId)
    {
        $this->apiParas['pickupOrderId'] = $pickupOrderId;

        return $this;
    }

    public function getPickupWeight()
    {
        return $this->apiParas['pickupWeight'];
    }

    public function setPickupWeight($pickupWeight)
    {
        $this->apiParas['pickupWeight'] = $pickupWeight;

        return $this;
    }

    public function getPickupRemark()
    {
        return $this->apiParas['pickupRemark'];
    }

    public function setPickupRemark($pickupRemark)
    {
        $this->apiParas['pickupRemark'] = $pickupRemark;

        return $this;
    }

    public function getPickupVolume()
    {
        return $this->apiParas['pickupVolume'];
    }

    public function setPickupVolume($pickupVolume)
    {
        $this->apiParas['pickupVolume'] = $pickupVolume;

        return $this;
    }

    public function getIsGuaranteeValue()
    {
        return $this->apiParas['isGuaranteeValue'];
    }

    public function setIsGuaranteeValue($isGuaranteeValue)
    {
        $this->apiParas['isGuaranteeValue'] = $isGuaranteeValue;

        return $this;
    }

    public function getPickupGuaranteeValueAmount()
    {
        return $this->apiParas['pickupGuaranteeValueAmount'];
    }

    public function setPickupGuaranteeValueAmount($pickupGuaranteeValueAmount)
    {
        $this->apiParas['pickupGuaranteeValueAmount'] = $pickupGuaranteeValueAmount;

        return $this;
    }

    public function getPickupGoodsType()
    {
        return $this->apiParas['pickupGoodsType'];
    }

    public function setPickupGoodsType($pickupGoodsType)
    {
        $this->apiParas['pickupGoodsType'] = $pickupGoodsType;

        return $this;
    }

    public function getPickupBizType()
    {
        return $this->apiParas['pickupBizType'];
    }

    public function setPickupBizType($pickupBizType)
    {
        $this->apiParas['pickupBizType'] = $pickupBizType;

        return $this;
    }

    public function getValueAddService()
    {
        return $this->apiParas['valueAddService'];
    }

    public function setValueAddService($valueAddService)
    {
        $this->apiParas['valueAddService'] = $valueAddService;

        return $this;
    }

    public function getPickupSenderIdNumber()
    {
        return $this->apiParas['pickupSenderIdNumber'];
    }

    public function setPickupSenderIdNumber($pickupSenderIdNumber)
    {
        $this->apiParas['pickupSenderIdNumber'] = $pickupSenderIdNumber;

        return $this;
    }

    public function getPickupSenderIdType()
    {
        return $this->apiParas['pickupSenderIdType'];
    }

    public function setPickupSenderIdType($pickupSenderIdType)
    {
        $this->apiParas['pickupSenderIdType'] = $pickupSenderIdType;

        return $this;
    }

    public function getProductId()
    {
        return $this->apiParas['productId'];
    }

    public function setProductId($productId)
    {
        $this->apiParas['productId'] = $productId;

        return $this;
    }

    public function getSnCode()
    {
        return $this->apiParas['snCode'];
    }

    public function setSnCode($snCode)
    {
        $this->apiParas['snCode'] = $snCode;

        return $this;
    }

    public function getProductName()
    {
        return $this->apiParas['productName'];
    }

    public function setProductName($productName)
    {
        $this->apiParas['productName'] = $productName;

        return $this;
    }

    public function getProductCount()
    {
        return $this->apiParas['productCount'];
    }

    public function setProductCount($productCount)
    {
        $this->apiParas['productCount'] = $productCount;

        return $this;
    }

    public function getSkuAddService()
    {
        return $this->apiParas['skuAddService'];
    }

    public function setSkuAddService($skuAddService)
    {
        $this->apiParas['skuAddService'] = $skuAddService;

        return $this;
    }

    public function getSkuCheckOutShapes()
    {
        return $this->apiParas['skuCheckOutShapes'];
    }

    public function setSkuCheckOutShapes($skuCheckOutShapes)
    {
        $this->apiParas['skuCheckOutShapes'] = $skuCheckOutShapes;

        return $this;
    }

    public function getSkuCheckAttachFile()
    {
        return $this->apiParas['skuCheckAttachFile'];
    }

    public function setSkuCheckAttachFile($skuCheckAttachFile)
    {
        $this->apiParas['skuCheckAttachFile'] = $skuCheckAttachFile;

        return $this;
    }

    public function getPromiseTimeType()
    {
        return $this->apiParas['promiseTimeType'];
    }

    public function setPromiseTimeType($promiseTimeType)
    {
        $this->apiParas['promiseTimeType'] = $promiseTimeType;

        return $this;
    }

    public function getGuaranteeSettleType()
    {
        return $this->apiParas['guaranteeSettleType'];
    }

    public function setGuaranteeSettleType($guaranteeSettleType)
    {
        $this->apiParas['guaranteeSettleType'] = $guaranteeSettleType;

        return $this;
    }

    public function getPackingSettleType()
    {
        return $this->apiParas['packingSettleType'];
    }

    public function setPackingSettleType($packingSettleType)
    {
        $this->apiParas['packingSettleType'] = $packingSettleType;

        return $this;
    }

    public function getFreightSettleType()
    {
        return $this->apiParas['freightSettleType'];
    }

    public function setFreightSettleType($freightSettleType)
    {
        $this->apiParas['freightSettleType'] = $freightSettleType;

        return $this;
    }
}
