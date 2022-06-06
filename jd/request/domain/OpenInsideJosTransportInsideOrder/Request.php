<?php

namespace OpenInsideJosTransportInsideOrder;

class Request
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.inside.request.jos.InsideJosRequest";
    }

    private $ediRemark;

    public function setEdiRemark($ediRemark)
    {
        $this->params['ediRemark'] = $ediRemark;
    }

    public function getEdiRemark()
    {
        return $this->ediRemark;
    }

    private $isvTime;

    public function setIsvTime($isvTime)
    {
        $this->params['isvTime'] = $isvTime;
    }

    public function getIsvTime()
    {
        return $this->isvTime;
    }

    private $remark;

    public function setRemark($remark)
    {
        $this->params['remark'] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    private $sourceDeptNo;

    public function setSourceDeptNo($sourceDeptNo)
    {
        $this->params['sourceDeptNo'] = $sourceDeptNo;
    }

    public function getSourceDeptNo()
    {
        return $this->sourceDeptNo;
    }

    private $sellerBizType;

    public function setSellerBizType($sellerBizType)
    {
        $this->params['sellerBizType'] = $sellerBizType;
    }

    public function getSellerBizType()
    {
        return $this->sellerBizType;
    }

    private $isvNo;

    public function setIsvNo($isvNo)
    {
        $this->params['isvNo'] = $isvNo;
    }

    public function getIsvNo()
    {
        return $this->isvNo;
    }

    private $lackType;

    public function setLackType($lackType)
    {
        $this->params['lackType'] = $lackType;
    }

    public function getLackType()
    {
        return $this->lackType;
    }

    private $targetDeptNo;

    public function setTargetDeptNo($targetDeptNo)
    {
        $this->params['targetDeptNo'] = $targetDeptNo;
    }

    public function getTargetDeptNo()
    {
        return $this->targetDeptNo;
    }

    private $bizType;

    public function setBizType($bizType)
    {
        $this->params['bizType'] = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    private $tid;

    public function setTid($tid)
    {
        $this->params['tid'] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

    private $sellerNo;

    public function setSellerNo($sellerNo)
    {
        $this->params['sellerNo'] = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    private $user;

    public function setUser($user)
    {
        $this->params['user'] = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    private $warehouseNo;

    public function setWarehouseNo($warehouseNo)
    {
        $this->params['warehouseNo'] = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    private $insideItemRequestList;

    public function setInsideItemRequestList($insideItemRequestList)
    {
        $size = count($insideItemRequestList);
        for ($i = 0; $i < $size; $i++) {
            $insideItemRequestList [$i] = $insideItemRequestList [$i] ->getInstance();
        }
        $this->params['insideItemRequestList'] = $insideItemRequestList;
    }


    function getInstance()
    {
        return $this->params;
    }
}
