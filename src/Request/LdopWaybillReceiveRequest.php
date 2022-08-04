<?php

namespace ACES\Request;

class LdopWaybillReceiveRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.waybill.receive';
    }

    public function check()
    {
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

    public function getSenderPostcode()
    {
        return $this->apiParas['senderPostcode'];
    }

    public function setSenderPostcode($senderPostcode)
    {
        $this->apiParas['senderPostcode'] = $senderPostcode;

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

    public function getProvinceId()
    {
        return $this->apiParas['provinceId'];
    }

    public function setProvinceId($provinceId)
    {
        $this->apiParas['provinceId'] = $provinceId;

        return $this;
    }

    public function getCityId()
    {
        return $this->apiParas['cityId'];
    }

    public function setCityId($cityId)
    {
        $this->apiParas['cityId'] = $cityId;

        return $this;
    }

    public function getCountyId()
    {
        return $this->apiParas['countyId'];
    }

    public function setCountyId($countyId)
    {
        $this->apiParas['countyId'] = $countyId;

        return $this;
    }

    public function getTownId()
    {
        return $this->apiParas['townId'];
    }

    public function setTownId($townId)
    {
        $this->apiParas['townId'] = $townId;

        return $this;
    }

    public function getSiteType()
    {
        return $this->apiParas['siteType'];
    }

    public function setSiteType($siteType)
    {
        $this->apiParas['siteType'] = $siteType;

        return $this;
    }

    public function getSiteId()
    {
        return $this->apiParas['siteId'];
    }

    public function setSiteId($siteId)
    {
        $this->apiParas['siteId'] = $siteId;

        return $this;
    }

    public function getSiteName()
    {
        return $this->apiParas['siteName'];
    }

    public function setSiteName($siteName)
    {
        $this->apiParas['siteName'] = $siteName;

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

    public function getPostcode()
    {
        return $this->apiParas['postcode'];
    }

    public function setPostcode($postcode)
    {
        $this->apiParas['postcode'] = $postcode;

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

    public function getTransType()
    {
        return $this->apiParas['transType'];
    }

    public function setTransType($transType)
    {
        $this->apiParas['transType'] = $transType;

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

    public function getGoodsType()
    {
        return $this->apiParas['goodsType'];
    }

    public function setGoodsType($goodsType)
    {
        $this->apiParas['goodsType'] = $goodsType;

        return $this;
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

        return $this;
    }

    public function getShopCode()
    {
        return $this->apiParas['shopCode'];
    }

    public function setShopCode($shopCode)
    {
        $this->apiParas['shopCode'] = $shopCode;

        return $this;
    }

    public function getOrderSendTime()
    {
        return $this->apiParas['orderSendTime'];
    }

    public function setOrderSendTime($orderSendTime)
    {
        $this->apiParas['orderSendTime'] = $orderSendTime;

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

    public function getAreaProvId()
    {
        return $this->apiParas['areaProvId'];
    }

    public function setAreaProvId($areaProvId)
    {
        $this->apiParas['areaProvId'] = $areaProvId;

        return $this;
    }

    public function getAreaCityId()
    {
        return $this->apiParas['areaCityId'];
    }

    public function setAreaCityId($areaCityId)
    {
        $this->apiParas['areaCityId'] = $areaCityId;

        return $this;
    }

    public function getShipmentStartTime()
    {
        return $this->apiParas['shipmentStartTime'];
    }

    public function setShipmentStartTime($shipmentStartTime)
    {
        $this->apiParas['shipmentStartTime'] = $shipmentStartTime;

        return $this;
    }

    public function getShipmentEndTime()
    {
        return $this->apiParas['shipmentEndTime'];
    }

    public function setShipmentEndTime($shipmentEndTime)
    {
        $this->apiParas['shipmentEndTime'] = $shipmentEndTime;

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

    public function getExtendField1()
    {
        return $this->apiParas['extendField1'];
    }

    public function setExtendField1($extendField1)
    {
        $this->apiParas['extendField1'] = $extendField1;

        return $this;
    }

    public function getExtendField2()
    {
        return $this->apiParas['extendField2'];
    }

    public function setExtendField2($extendField2)
    {
        $this->apiParas['extendField2'] = $extendField2;

        return $this;
    }

    public function getExtendField3()
    {
        return $this->apiParas['extendField3'];
    }

    public function setExtendField3($extendField3)
    {
        $this->apiParas['extendField3'] = $extendField3;

        return $this;
    }

    public function getExtendField4()
    {
        return $this->apiParas['extendField4'];
    }

    public function setExtendField4($extendField4)
    {
        $this->apiParas['extendField4'] = $extendField4;

        return $this;
    }

    public function getExtendField5()
    {
        return $this->apiParas['extendField5'];
    }

    public function setExtendField5($extendField5)
    {
        $this->apiParas['extendField5'] = $extendField5;

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

    public function getGoods()
    {
        return $this->apiParas['goods'];
    }

    public function setGoods($goods)
    {
        $this->apiParas['goods'] = $goods;

        return $this;
    }

    public function getGoodsCount()
    {
        return $this->apiParas['goodsCount'];
    }

    public function setGoodsCount($goodsCount)
    {
        $this->apiParas['goodsCount'] = $goodsCount;

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

    public function getFreight()
    {
        return $this->apiParas['freight'];
    }

    public function setFreight($freight)
    {
        $this->apiParas['freight'] = $freight;

        return $this;
    }

    public function getPickUpStartTime()
    {
        return $this->apiParas['pickUpStartTime'];
    }

    public function setPickUpStartTime($pickUpStartTime)
    {
        $this->apiParas['pickUpStartTime'] = $pickUpStartTime;

        return $this;
    }

    public function getPickUpEndTime()
    {
        return $this->apiParas['pickUpEndTime'];
    }

    public function setPickUpEndTime($pickUpEndTime)
    {
        $this->apiParas['pickUpEndTime'] = $pickUpEndTime;

        return $this;
    }

    public function getUnpackingInspection()
    {
        return $this->apiParas['unpackingInspection'];
    }

    public function setUnpackingInspection($unpackingInspection)
    {
        $this->apiParas['unpackingInspection'] = $unpackingInspection;

        return $this;
    }

    public function getBoxCode()
    {
        return $this->apiParas['boxCode'];
    }

    public function setBoxCode($boxCode)
    {
        $this->apiParas['boxCode'] = $boxCode;

        return $this;
    }

    public function getFileUrl()
    {
        return $this->apiParas['fileUrl'];
    }

    public function setFileUrl($fileUrl)
    {
        $this->apiParas['fileUrl'] = $fileUrl;

        return $this;
    }

    public function getPickMethod()
    {
        return $this->apiParas['pickMethod'];
    }

    public function setPickMethod($pickMethod)
    {
        $this->apiParas['pickMethod'] = $pickMethod;

        return $this;
    }

    public function getCustomerBoxCode()
    {
        return $this->apiParas['customerBoxCode'];
    }

    public function setCustomerBoxCode($customerBoxCode)
    {
        $this->apiParas['customerBoxCode'] = $customerBoxCode;

        return $this;
    }

    public function getCustomerBoxNumber()
    {
        return $this->apiParas['customerBoxNumber'];
    }

    public function setCustomerBoxNumber($customerBoxNumber)
    {
        $this->apiParas['customerBoxNumber'] = $customerBoxNumber;

        return $this;
    }

    public function getSalesChannel()
    {
        return $this->apiParas['salesChannel'];
    }

    public function setSalesChannel($salesChannel)
    {
        $this->apiParas['salesChannel'] = $salesChannel;

        return $this;
    }
}
