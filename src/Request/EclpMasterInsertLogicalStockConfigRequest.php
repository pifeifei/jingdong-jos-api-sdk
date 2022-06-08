<?php

namespace ACES\Request;

class EclpMasterInsertLogicalStockConfigRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.master.insertLogicalStockConfig';
    }

    public function check()
    {
    }

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

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

    public function getSellerName()
    {
        return $this->apiParas['sellerName'];
    }

    public function setSellerName($sellerName)
    {
        $this->apiParas['sellerName'] = $sellerName;

        return $this;
    }

    public function getDeptName()
    {
        return $this->apiParas['deptName'];
    }

    public function setDeptName($deptName)
    {
        $this->apiParas['deptName'] = $deptName;

        return $this;
    }

    public function getFactor1No()
    {
        return $this->apiParas['factor1No'];
    }

    public function setFactor1No($factor1No)
    {
        $this->apiParas['factor1No'] = $factor1No;

        return $this;
    }

    public function getFactor1Name()
    {
        return $this->apiParas['factor1Name'];
    }

    public function setFactor1Name($factor1Name)
    {
        $this->apiParas['factor1Name'] = $factor1Name;

        return $this;
    }

    public function getFactor2No()
    {
        return $this->apiParas['factor2No'];
    }

    public function setFactor2No($factor2No)
    {
        $this->apiParas['factor2No'] = $factor2No;

        return $this;
    }

    public function getFactor2Name()
    {
        return $this->apiParas['factor2Name'];
    }

    public function setFactor2Name($factor2Name)
    {
        $this->apiParas['factor2Name'] = $factor2Name;

        return $this;
    }

    public function getFactor3No()
    {
        return $this->apiParas['factor3No'];
    }

    public function setFactor3No($factor3No)
    {
        $this->apiParas['factor3No'] = $factor3No;

        return $this;
    }

    public function getFactor3Name()
    {
        return $this->apiParas['factor3Name'];
    }

    public function setFactor3Name($factor3Name)
    {
        $this->apiParas['factor3Name'] = $factor3Name;

        return $this;
    }

    public function getFactor4No()
    {
        return $this->apiParas['factor4No'];
    }

    public function setFactor4No($factor4No)
    {
        $this->apiParas['factor4No'] = $factor4No;

        return $this;
    }

    public function getFactor4Name()
    {
        return $this->apiParas['factor4Name'];
    }

    public function setFactor4Name($factor4Name)
    {
        $this->apiParas['factor4Name'] = $factor4Name;

        return $this;
    }
}
