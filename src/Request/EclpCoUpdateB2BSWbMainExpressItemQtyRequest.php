<?php

namespace ACES\Request;

class EclpCoUpdateB2BSWbMainExpressItemQtyRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.updateB2BSWbMainExpressItemQty';
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

    public function getExtendFieldStr()
    {
        return $this->apiParas['extendFieldStr'];
    }

    public function setExtendFieldStr($extendFieldStr)
    {
        $this->apiParas['extendFieldStr'] = $extendFieldStr;

        return $this;
    }
}
