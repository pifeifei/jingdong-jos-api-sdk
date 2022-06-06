<?php

namespace ACES\Request;


class EclpGoodsTransportGoodsSerialNumberRuleRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $goodsNo;
    private $serialNumberLength;
    private $serialNumberLeftvalue;
    private $serialNumberLeftLength;
    private $serialNumberSuffixLength;
    private $suffixValue;
    private $type;
    private $ruleIndex;
    private $ruleIndexEnd;
    private $ruleIndexValue;
    private $manageType;
    private $sellerSnRuleNo;
    private $serialRuleType;

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.transportGoodsSerialNumberRule";
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

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
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

    public function getSerialNumberLength()
    {
        return $this->serialNumberLength;
    }

    public function setSerialNumberLength($serialNumberLength)
    {
        $this->serialNumberLength = $serialNumberLength;
        $this->apiParas["serialNumberLength"] = $serialNumberLength;
    }

    public function getSerialNumberLeftvalue()
    {
        return $this->serialNumberLeftvalue;
    }

    public function setSerialNumberLeftvalue($serialNumberLeftvalue)
    {
        $this->serialNumberLeftvalue = $serialNumberLeftvalue;
        $this->apiParas["serialNumberLeftvalue"] = $serialNumberLeftvalue;
    }

    public function getSerialNumberLeftLength()
    {
        return $this->serialNumberLeftLength;
    }

    public function setSerialNumberLeftLength($serialNumberLeftLength)
    {
        $this->serialNumberLeftLength = $serialNumberLeftLength;
        $this->apiParas["serialNumberLeftLength"] = $serialNumberLeftLength;
    }

    public function getSerialNumberSuffixLength()
    {
        return $this->serialNumberSuffixLength;
    }

    public function setSerialNumberSuffixLength($serialNumberSuffixLength)
    {
        $this->serialNumberSuffixLength = $serialNumberSuffixLength;
        $this->apiParas["serialNumberSuffixLength"] = $serialNumberSuffixLength;
    }

    public function getSuffixValue()
    {
        return $this->suffixValue;
    }

    public function setSuffixValue($suffixValue)
    {
        $this->suffixValue = $suffixValue;
        $this->apiParas["suffixValue"] = $suffixValue;
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

    public function getRuleIndex()
    {
        return $this->ruleIndex;
    }

    public function setRuleIndex($ruleIndex)
    {
        $this->ruleIndex = $ruleIndex;
        $this->apiParas["ruleIndex"] = $ruleIndex;
    }

    public function getRuleIndexEnd()
    {
        return $this->ruleIndexEnd;
    }

    public function setRuleIndexEnd($ruleIndexEnd)
    {
        $this->ruleIndexEnd = $ruleIndexEnd;
        $this->apiParas["ruleIndexEnd"] = $ruleIndexEnd;
    }

    public function getRuleIndexValue()
    {
        return $this->ruleIndexValue;
    }

    public function setRuleIndexValue($ruleIndexValue)
    {
        $this->ruleIndexValue = $ruleIndexValue;
        $this->apiParas["ruleIndexValue"] = $ruleIndexValue;
    }

    public function getManageType()
    {
        return $this->manageType;
    }

    public function setManageType($manageType)
    {
        $this->manageType = $manageType;
        $this->apiParas["manageType"] = $manageType;
    }

    public function getSellerSnRuleNo()
    {
        return $this->sellerSnRuleNo;
    }

    public function setSellerSnRuleNo($sellerSnRuleNo)
    {
        $this->sellerSnRuleNo = $sellerSnRuleNo;
        $this->apiParas["sellerSnRuleNo"] = $sellerSnRuleNo;
    }

    public function getSerialRuleType()
    {
        return $this->serialRuleType;
    }

    public function setSerialRuleType($serialRuleType)
    {
        $this->serialRuleType = $serialRuleType;
        $this->apiParas["serialRuleType"] = $serialRuleType;
    }
}
