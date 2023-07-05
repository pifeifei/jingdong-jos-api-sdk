<?php

namespace ACES\Request\Domain\UnionOpenGoodsQuery;

use ACES\Request\Domain\AbstractParams;

class GoodsReqDTO extends AbstractParams
{
    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.base.GoodsReq';
    }

    public function setCid1($cid1)
    {
        $this->params['cid1'] = $cid1;
    }

    public function getCid1()
    {
        return $this->params['cid1'];
    }

    public function setCid2($cid2)
    {
        $this->params['cid2'] = $cid2;
    }

    public function getCid2()
    {
        return $this->params['cid2'];
    }

    public function setCid3($cid3)
    {
        $this->params['cid3'] = $cid3;
    }

    public function getCid3()
    {
        return $this->params['cid3'];
    }

    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->params['pageIndex'];
    }

    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->params['pageSize'];
    }

    public function setSkuIds($skuIds)
    {
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->params['skuIds'];
    }

    public function setKeyword($keyword)
    {
        $this->params['keyword'] = $keyword;
    }

    public function getKeyword()
    {
        return $this->params['keyword'];
    }

    public function setPricefrom($pricefrom)
    {
        $this->params['pricefrom'] = $pricefrom;
    }

    public function getPricefrom()
    {
        return $this->params['pricefrom'];
    }

    public function setPriceto($priceto)
    {
        $this->params['priceto'] = $priceto;
    }

    public function getPriceto()
    {
        return $this->params['priceto'];
    }

    public function setCommissionShareStart($commissionShareStart)
    {
        $this->params['commissionShareStart'] = $commissionShareStart;
    }

    public function getCommissionShareStart()
    {
        return $this->params['commissionShareStart'];
    }

    public function setCommissionShareEnd($commissionShareEnd)
    {
        $this->params['commissionShareEnd'] = $commissionShareEnd;
    }

    public function getCommissionShareEnd()
    {
        return $this->params['commissionShareEnd'];
    }

    public function setOwner($owner)
    {
        $this->params['owner'] = $owner;
    }

    public function getOwner()
    {
        return $this->params['owner'];
    }

    public function setSortName($sortName)
    {
        $this->params['sortName'] = $sortName;
    }

    public function getSortName()
    {
        return $this->params['sortName'];
    }

    public function setSort($sort)
    {
        $this->params['sort'] = $sort;
    }

    public function getSort()
    {
        return $this->params['sort'];
    }

    public function setIsCoupon($isCoupon)
    {
        $this->params['isCoupon'] = $isCoupon;
    }

    public function getIsCoupon()
    {
        return $this->params['isCoupon'];
    }

    public function setIsPG($isPG)
    {
        $this->params['isPG'] = $isPG;
    }

    public function getIsPG()
    {
        return $this->params['isPG'];
    }

    public function setPingouPriceStart($pingouPriceStart)
    {
        $this->params['pingouPriceStart'] = $pingouPriceStart;
    }

    public function getPingouPriceStart()
    {
        return $this->params['pingouPriceStart'];
    }

    public function setPingouPriceEnd($pingouPriceEnd)
    {
        $this->params['pingouPriceEnd'] = $pingouPriceEnd;
    }

    public function getPingouPriceEnd()
    {
        return $this->params['pingouPriceEnd'];
    }

    public function setIsHot($isHot)
    {
        $this->params['isHot'] = $isHot;
    }

    public function getIsHot()
    {
        return $this->params['isHot'];
    }

    public function setBrandCode($brandCode)
    {
        $this->params['brandCode'] = $brandCode;
    }

    public function getBrandCode()
    {
        return $this->params['brandCode'];
    }

    public function setShopId($shopId)
    {
        $this->params['shopId'] = $shopId;
    }

    public function getShopId()
    {
        return $this->params['shopId'];
    }

    public function setHasContent($hasContent)
    {
        $this->params['hasContent'] = $hasContent;
    }

    public function getHasContent()
    {
        return $this->params['hasContent'];
    }

    public function setHasBestCoupon($hasBestCoupon)
    {
        $this->params['hasBestCoupon'] = $hasBestCoupon;
    }

    public function getHasBestCoupon()
    {
        return $this->params['hasBestCoupon'];
    }

    public function setPid($pid)
    {
        $this->params['pid'] = $pid;
    }

    public function getPid()
    {
        return $this->params['pid'];
    }

    public function setFields($fields)
    {
        $this->params['fields'] = $fields;
    }

    public function getFields()
    {
        return $this->params['fields'];
    }

    public function setForbidTypes($forbidTypes)
    {
        $this->params['forbidTypes'] = $forbidTypes;
    }

    public function getForbidTypes()
    {
        return $this->params['forbidTypes'];
    }

    public function setJxFlags($jxFlags)
    {
        $this->params['jxFlags'] = $jxFlags;
    }

    public function getJxFlags()
    {
        return $this->params['jxFlags'];
    }

    public function setShopLevelFrom($shopLevelFrom)
    {
        $this->params['shopLevelFrom'] = $shopLevelFrom;
    }

    public function getShopLevelFrom()
    {
        return $this->params['shopLevelFrom'];
    }

    public function setIsbn($isbn)
    {
        $this->params['isbn'] = $isbn;
    }

    public function getIsbn()
    {
        return $this->params['isbn'];
    }

    public function setSpuId($spuId)
    {
        $this->params['spuId'] = $spuId;
    }

    public function getSpuId()
    {
        return $this->params['spuId'];
    }

    public function setCouponUrl($couponUrl)
    {
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl()
    {
        return $this->params['couponUrl'];
    }

    public function setDeliveryType($deliveryType)
    {
        $this->params['deliveryType'] = $deliveryType;
    }

    public function getDeliveryType()
    {
        return $this->params['deliveryType'];
    }

    public function setEliteType($eliteType)
    {
        $this->params['eliteType'] = $eliteType;
    }

    public function getEliteType()
    {
        return $this->params['eliteType'];
    }

    public function setIsSeckill($isSeckill)
    {
        $this->params['isSeckill'] = $isSeckill;
    }

    public function getIsSeckill()
    {
        return $this->params['isSeckill'];
    }

    public function setIsPresale($isPresale)
    {
        $this->params['isPresale'] = $isPresale;
    }

    public function getIsPresale()
    {
        return $this->params['isPresale'];
    }

    public function setIsReserve($isReserve)
    {
        $this->params['isReserve'] = $isReserve;
    }

    public function getIsReserve()
    {
        return $this->params['isReserve'];
    }

    public function setBonusId($bonusId)
    {
        $this->params['bonusId'] = $bonusId;
    }

    public function getBonusId()
    {
        return $this->params['bonusId'];
    }

    public function setArea($area)
    {
        $this->params['area'] = $area;
    }

    public function getArea()
    {
        return $this->params['area'];
    }

    public function setIsOversea($isOversea)
    {
        $this->params['isOversea'] = $isOversea;
    }

    public function getIsOversea()
    {
        return $this->params['isOversea'];
    }

    public function setUserIdType($userIdType)
    {
        $this->params['userIdType'] = $userIdType;
    }

    public function getUserIdType()
    {
        return $this->params['userIdType'];
    }

    public function setUserId($userId)
    {
        $this->params['userId'] = $userId;
    }

    public function getUserId()
    {
        return $this->params['userId'];
    }

    public function setChannelId($channelId)
    {
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId()
    {
        return $this->params['channelId'];
    }

    public function setIp($ip)
    {
        $this->params['ip'] = $ip;
    }

    public function getIp()
    {
        return $this->params['ip'];
    }

    public function setProvinceId($provinceId)
    {
        $this->params['provinceId'] = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->params['provinceId'];
    }

    public function setCityId($cityId)
    {
        $this->params['cityId'] = $cityId;
    }

    public function getCityId()
    {
        return $this->params['cityId'];
    }

    public function setCountryId($countryId)
    {
        $this->params['countryId'] = $countryId;
    }

    public function getCountryId()
    {
        return $this->params['countryId'];
    }

    public function setTownId($townId)
    {
        $this->params['townId'] = $townId;
    }

    public function getTownId()
    {
        return $this->params['townId'];
    }

    public function setItemIds($itemIds)
    {
        $this->params['itemIds'] = $itemIds;
    }

    public function getItemIds()
    {
        return $this->params['itemIds'];
    }

    public function getInstance()
    {
        return $this->params;
    }
}
