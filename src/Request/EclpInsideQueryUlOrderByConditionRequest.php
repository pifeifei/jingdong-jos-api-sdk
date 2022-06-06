<?php

namespace ACES\Request;


class EclpInsideQueryUlOrderByConditionRequest
{
    private $apiParas = array();
    private $version;
    private $pageSize;
    private $pageNum;
    private $ulNo;
    private $outUlNo;
    private $deptNo;
    private $warehouseNo;
    private $allowReturnDest;

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.queryUlOrderByCondition";
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

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
        $this->apiParas["pageNum"] = $pageNum;
    }

    public function getUlNo()
    {
        return $this->ulNo;
    }

    public function setUlNo($ulNo)
    {
        $this->ulNo = $ulNo;
        $this->apiParas["ulNo"] = $ulNo;
    }

    public function getOutUlNo()
    {
        return $this->outUlNo;
    }

    public function setOutUlNo($outUlNo)
    {
        $this->outUlNo = $outUlNo;
        $this->apiParas["outUlNo"] = $outUlNo;
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

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getAllowReturnDest()
    {
        return $this->allowReturnDest;
    }

    public function setAllowReturnDest($allowReturnDest)
    {
        $this->allowReturnDest = $allowReturnDest;
        $this->apiParas["allowReturnDest"] = $allowReturnDest;
    }
}
