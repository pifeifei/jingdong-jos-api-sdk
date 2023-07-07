<?php

namespace ACES\Request\Domain\UnionOpenPromotionBysubunionidGet;

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

    public function setSubUnionId($subUnionId)
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->params['subUnionId'];
    }

    public function setPositionId($positionId)
    {
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId()
    {
        return $this->params['positionId'];
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

    public function setChainType($chainType)
    {
        $this->params['chainType'] = $chainType;
    }

    public function getChainType()
    {
        return $this->params['chainType'];
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

    public function setCommand($command)
    {
        $this->params['command'] = $command;
    }

    public function getCommand()
    {
        return $this->params['command'];
    }

    public function setWeChatType($weChatType)
    {
        $this->params['weChatType'] = $weChatType;
    }

    public function getWeChatType()
    {
        return $this->params['weChatType'];
    }

    public function getInstance()
    {
        return $this->params;
    }
}
