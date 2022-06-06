<?php

namespace ACES\Request;


class EclpCoUpdateB2BSWbMainExpressItemQtyRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $newWBType;
    private $no;
    private $expressItemQty;
    private $extendFieldStr;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.updateB2BSWbMainExpressItemQty";
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

    public function getExtendFieldStr()
    {
        return $this->extendFieldStr;
    }

    public function setExtendFieldStr($extendFieldStr)
    {
        $this->extendFieldStr = $extendFieldStr;
        $this->apiParas["extendFieldStr"] = $extendFieldStr;
    }
}
