<?php

namespace ACES\Request\Domain\UnionOpenPromotionCommonGet;

use ACES\Request\Domain\AbstractParams;

class PromotionCodeReq extends AbstractParams
{
    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.promotion.base.PromotionCodeReq';
    }

    public function setMaterialId($materialId)
    {
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId()
    {
        return $this->params['materialId'];
    }

    public function setSiteId($siteId)
    {
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId()
    {
        return $this->params['siteId'];
    }

    public function setPositionId($positionId)
    {
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId()
    {
        return $this->params['positionId'];
    }

    public function setSubUnionId($subUnionId)
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->params['subUnionId'];
    }

    public function setExt1($ext1)
    {
        $this->params['ext1'] = $ext1;
    }

    public function getExt1()
    {
        return $this->params['ext1'];
    }

    public function setProtocol($protocol)
    {
        $this->params['protocol'] = $protocol;
    }

    public function getProtocol()
    {
        return $this->params['protocol'];
    }

    public function setPid($pid)
    {
        $this->params['pid'] = $pid;
    }

    public function getPid()
    {
        return $this->params['pid'];
    }

    public function setCouponUrl($couponUrl)
    {
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl()
    {
        return $this->params['couponUrl'];
    }

    public function setGiftCouponKey($giftCouponKey)
    {
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey()
    {
        return $this->params['giftCouponKey'];
    }

    public function setChannelId($channelId)
    {
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId()
    {
        return $this->params['channelId'];
    }

    public function getInstance()
    {
        return $this->params;
    }
}
