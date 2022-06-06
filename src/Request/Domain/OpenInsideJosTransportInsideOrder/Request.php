<?php

namespace ACES\Request\Domain\OpenInsideJosTransportInsideOrder;




class Request
{
    private $params = array();
    private $ediRemark;
    private $isvTime;
    private $remark;
    private $sourceDeptNo;
    private $sellerBizType;
    private $isvNo;
    private $lackType;
    private $targetDeptNo;
    private $bizType;
    private $tid;
    private $sellerNo;
    private $user;
    private $warehouseNo;
    private $insideItemRequestList;

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.inside.request.jos.InsideJosRequest";
    }

    public function getEdiRemark()
    {
        return $this->ediRemark;
    }

    public function setEdiRemark($ediRemark)
    {
        $this->params['ediRemark'] = $ediRemark;
    }

    public function getIsvTime()
    {
        return $this->isvTime;
    }

    public function setIsvTime($isvTime)
    {
        $this->params['isvTime'] = $isvTime;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->params['remark'] = $remark;
    }

    public function getSourceDeptNo()
    {
        return $this->sourceDeptNo;
    }

    public function setSourceDeptNo($sourceDeptNo)
    {
        $this->params['sourceDeptNo'] = $sourceDeptNo;
    }

    public function getSellerBizType()
    {
        return $this->sellerBizType;
    }

    public function setSellerBizType($sellerBizType)
    {
        $this->params['sellerBizType'] = $sellerBizType;
    }

    public function getIsvNo()
    {
        return $this->isvNo;
    }

    public function setIsvNo($isvNo)
    {
        $this->params['isvNo'] = $isvNo;
    }

    public function getLackType()
    {
        return $this->lackType;
    }

    public function setLackType($lackType)
    {
        $this->params['lackType'] = $lackType;
    }

    public function getTargetDeptNo()
    {
        return $this->targetDeptNo;
    }

    public function setTargetDeptNo($targetDeptNo)
    {
        $this->params['targetDeptNo'] = $targetDeptNo;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    public function setBizType($bizType)
    {
        $this->params['bizType'] = $bizType;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function setTid($tid)
    {
        $this->params['tid'] = $tid;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->params['sellerNo'] = $sellerNo;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->params['user'] = $user;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->params['warehouseNo'] = $warehouseNo;
    }

    public function setInsideItemRequestList($insideItemRequestList)
    {
        $size = count($insideItemRequestList);
        for ($i = 0; $i < $size; $i++) {
            $insideItemRequestList [$i] = $insideItemRequestList [$i]->getInstance();
        }
        $this->params['insideItemRequestList'] = $insideItemRequestList;
    }


    function getInstance()
    {
        return $this->params;
    }
}
