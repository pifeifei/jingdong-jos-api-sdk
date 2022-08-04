<?php

namespace ACES\Request;

class EclpCoUpdateB2BSWbMainExpressItemQtyExRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.updateB2BSWbMainExpressItemQtyEx';
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

    public function getNewWBType()
    {
        return $this->apiParas['newWBType'];
    }

    public function setNewWBType($newWBType)
    {
        $this->apiParas['newWBType'] = $newWBType;

        return $this;
    }

    public function getNo()
    {
        return $this->apiParas['no'];
    }

    public function setNo($no)
    {
        $this->apiParas['no'] = $no;

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

    public function getIsvOrderAmount()
    {
        return $this->apiParas['isvOrderAmount'];
    }

    public function setIsvOrderAmount($isvOrderAmount)
    {
        $this->apiParas['isvOrderAmount'] = $isvOrderAmount;

        return $this;
    }

    public function getPackageNo()
    {
        return $this->apiParas['packageNo'];
    }

    public function setPackageNo($packageNo)
    {
        $this->apiParas['packageNo'] = $packageNo;

        return $this;
    }

    public function getExtendParam()
    {
        return $this->apiParas['extendParam'];
    }

    public function setExtendParam($extendParam)
    {
        $this->apiParas['extendParam'] = $extendParam;

        return $this;
    }
}
