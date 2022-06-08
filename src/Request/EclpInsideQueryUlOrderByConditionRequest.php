<?php

namespace ACES\Request;

class EclpInsideQueryUlOrderByConditionRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.inside.queryUlOrderByCondition';
    }

    public function check()
    {
    }

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;

        return $this;
    }

    public function getPageNum()
    {
        return $this->apiParas['pageNum'];
    }

    public function setPageNum($pageNum)
    {
        $this->apiParas['pageNum'] = $pageNum;

        return $this;
    }

    public function getUlNo()
    {
        return $this->apiParas['ulNo'];
    }

    public function setUlNo($ulNo)
    {
        $this->apiParas['ulNo'] = $ulNo;

        return $this;
    }

    public function getOutUlNo()
    {
        return $this->apiParas['outUlNo'];
    }

    public function setOutUlNo($outUlNo)
    {
        $this->apiParas['outUlNo'] = $outUlNo;

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

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getAllowReturnDest()
    {
        return $this->apiParas['allowReturnDest'];
    }

    public function setAllowReturnDest($allowReturnDest)
    {
        $this->apiParas['allowReturnDest'] = $allowReturnDest;

        return $this;
    }
}
