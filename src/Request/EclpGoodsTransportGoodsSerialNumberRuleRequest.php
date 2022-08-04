<?php

namespace ACES\Request;

class EclpGoodsTransportGoodsSerialNumberRuleRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.goods.transportGoodsSerialNumberRule';
    }

    public function check()
    {
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

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    public function getSerialNumberLength()
    {
        return $this->apiParas['serialNumberLength'];
    }

    public function setSerialNumberLength($serialNumberLength)
    {
        $this->apiParas['serialNumberLength'] = $serialNumberLength;

        return $this;
    }

    public function getSerialNumberLeftvalue()
    {
        return $this->apiParas['serialNumberLeftvalue'];
    }

    public function setSerialNumberLeftvalue($serialNumberLeftvalue)
    {
        $this->apiParas['serialNumberLeftvalue'] = $serialNumberLeftvalue;

        return $this;
    }

    public function getSerialNumberLeftLength()
    {
        return $this->apiParas['serialNumberLeftLength'];
    }

    public function setSerialNumberLeftLength($serialNumberLeftLength)
    {
        $this->apiParas['serialNumberLeftLength'] = $serialNumberLeftLength;

        return $this;
    }

    public function getSerialNumberSuffixLength()
    {
        return $this->apiParas['serialNumberSuffixLength'];
    }

    public function setSerialNumberSuffixLength($serialNumberSuffixLength)
    {
        $this->apiParas['serialNumberSuffixLength'] = $serialNumberSuffixLength;

        return $this;
    }

    public function getSuffixValue()
    {
        return $this->apiParas['suffixValue'];
    }

    public function setSuffixValue($suffixValue)
    {
        $this->apiParas['suffixValue'] = $suffixValue;

        return $this;
    }

    public function getType()
    {
        return $this->apiParas['type'];
    }

    public function setType($type)
    {
        $this->apiParas['type'] = $type;

        return $this;
    }

    public function getRuleIndex()
    {
        return $this->apiParas['ruleIndex'];
    }

    public function setRuleIndex($ruleIndex)
    {
        $this->apiParas['ruleIndex'] = $ruleIndex;

        return $this;
    }

    public function getRuleIndexEnd()
    {
        return $this->apiParas['ruleIndexEnd'];
    }

    public function setRuleIndexEnd($ruleIndexEnd)
    {
        $this->apiParas['ruleIndexEnd'] = $ruleIndexEnd;

        return $this;
    }

    public function getRuleIndexValue()
    {
        return $this->apiParas['ruleIndexValue'];
    }

    public function setRuleIndexValue($ruleIndexValue)
    {
        $this->apiParas['ruleIndexValue'] = $ruleIndexValue;

        return $this;
    }

    public function getManageType()
    {
        return $this->apiParas['manageType'];
    }

    public function setManageType($manageType)
    {
        $this->apiParas['manageType'] = $manageType;

        return $this;
    }

    public function getSellerSnRuleNo()
    {
        return $this->apiParas['sellerSnRuleNo'];
    }

    public function setSellerSnRuleNo($sellerSnRuleNo)
    {
        $this->apiParas['sellerSnRuleNo'] = $sellerSnRuleNo;

        return $this;
    }

    public function getSerialRuleType()
    {
        return $this->apiParas['serialRuleType'];
    }

    public function setSerialRuleType($serialRuleType)
    {
        $this->apiParas['serialRuleType'] = $serialRuleType;

        return $this;
    }
}
