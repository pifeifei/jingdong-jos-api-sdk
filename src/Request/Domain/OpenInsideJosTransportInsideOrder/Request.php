<?php

namespace ACES\Request\Domain\OpenInsideJosTransportInsideOrder;

use function count;

class Request
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.open.sp.inside.request.jos.InsideJosRequest';
    }

    public function getEdiRemark()
    {
        return $this->params['ediRemark'];
    }

    public function setEdiRemark($ediRemark)
    {
        $this->params['ediRemark'] = $ediRemark;
    }

    public function getIsvTime()
    {
        return $this->params['isvTime'];
    }

    public function setIsvTime($isvTime)
    {
        $this->params['isvTime'] = $isvTime;
    }

    public function getRemark()
    {
        return $this->params['remark'];
    }

    public function setRemark($remark)
    {
        $this->params['remark'] = $remark;
    }

    public function getSourceDeptNo()
    {
        return $this->params['sourceDeptNo'];
    }

    public function setSourceDeptNo($sourceDeptNo)
    {
        $this->params['sourceDeptNo'] = $sourceDeptNo;
    }

    public function getSellerBizType()
    {
        return $this->params['sellerBizType'];
    }

    public function setSellerBizType($sellerBizType)
    {
        $this->params['sellerBizType'] = $sellerBizType;
    }

    public function getIsvNo()
    {
        return $this->params['isvNo'];
    }

    public function setIsvNo($isvNo)
    {
        $this->params['isvNo'] = $isvNo;
    }

    public function getLackType()
    {
        return $this->params['lackType'];
    }

    public function setLackType($lackType)
    {
        $this->params['lackType'] = $lackType;
    }

    public function getTargetDeptNo()
    {
        return $this->params['targetDeptNo'];
    }

    public function setTargetDeptNo($targetDeptNo)
    {
        $this->params['targetDeptNo'] = $targetDeptNo;
    }

    public function getBizType()
    {
        return $this->params['bizType'];
    }

    public function setBizType($bizType)
    {
        $this->params['bizType'] = $bizType;
    }

    public function getTid()
    {
        return $this->params['tid'];
    }

    public function setTid($tid)
    {
        $this->params['tid'] = $tid;
    }

    public function getSellerNo()
    {
        return $this->params['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->params['sellerNo'] = $sellerNo;
    }

    public function getUser()
    {
        return $this->params['user'];
    }

    public function setUser($user)
    {
        $this->params['user'] = $user;
    }

    public function getWarehouseNo()
    {
        return $this->params['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->params['warehouseNo'] = $warehouseNo;
    }

    public function setInsideItemRequestList($insideItemRequestList)
    {
        $size = count($insideItemRequestList);
        for ($i = 0; $i < $size; ++$i) {
            $insideItemRequestList[$i] = $insideItemRequestList[$i]->getInstance();
        }
        $this->params['insideItemRequestList'] = $insideItemRequestList;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
