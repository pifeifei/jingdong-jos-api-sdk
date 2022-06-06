<?php

namespace ACES\Request;


class EclpCoUpdateB2BSWbMainExpressItemQtyExRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $newWBType;
    private $no;
    private $expressItemQty;
    private $isvOrderAmount;
    private $packageNo;
    private $extendParam;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.updateB2BSWbMainExpressItemQtyEx";
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

    public function getNewWBType()
    {
        return $this->newWBType;
    }

    public function setNewWBType($newWBType)
    {
        $this->newWBType = $newWBType;
        $this->apiParas["newWBType"] = $newWBType;
    }

    public function getNo()
    {
        return $this->no;
    }

    public function setNo($no)
    {
        $this->no = $no;
        $this->apiParas["no"] = $no;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty = $expressItemQty;
        $this->apiParas["expressItemQty"] = $expressItemQty;
    }

    public function getIsvOrderAmount()
    {
        return $this->isvOrderAmount;
    }

    public function setIsvOrderAmount($isvOrderAmount)
    {
        $this->isvOrderAmount = $isvOrderAmount;
        $this->apiParas["isvOrderAmount"] = $isvOrderAmount;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }

    public function setPackageNo($packageNo)
    {
        $this->packageNo = $packageNo;
        $this->apiParas["packageNo"] = $packageNo;
    }

    public function getExtendParam()
    {
        return $this->extendParam;
    }

    public function setExtendParam($extendParam)
    {
        $this->extendParam = $extendParam;
        $this->apiParas["extendParam"] = $extendParam;
    }
}
