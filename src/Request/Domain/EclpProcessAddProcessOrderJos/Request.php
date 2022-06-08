<?php

namespace ACES\Request\Domain\EclpProcessAddProcessOrderJos;

class Request
{
    private $params = [];
    private $deptNo;
    private $mixMode;
    private $sellerProcessedNo;
    private $salesPlatformId;
    private $urgentFlag;
    private $orderMark;
    private $sellerRemark;
    private $processedType;
    private $productRequestList;
    private $warehouseNo;
    private $allowLack;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.open.sp.process.domain.request.ProcessOrderJosRequest';
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getMixMode()
    {
        return $this->mixMode;
    }

    public function setMixMode($mixMode)
    {
        $this->params['mixMode'] = $mixMode;
    }

    public function getSellerProcessedNo()
    {
        return $this->sellerProcessedNo;
    }

    public function setSellerProcessedNo($sellerProcessedNo)
    {
        $this->params['sellerProcessedNo'] = $sellerProcessedNo;
    }

    public function getSalesPlatformId()
    {
        return $this->salesPlatformId;
    }

    public function setSalesPlatformId($salesPlatformId)
    {
        $this->params['salesPlatformId'] = $salesPlatformId;
    }

    public function getUrgentFlag()
    {
        return $this->urgentFlag;
    }

    public function setUrgentFlag($urgentFlag)
    {
        $this->params['urgentFlag'] = $urgentFlag;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    public function setOrderMark($orderMark)
    {
        $this->params['orderMark'] = $orderMark;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->params['sellerRemark'] = $sellerRemark;
    }

    public function getProcessedType()
    {
        return $this->processedType;
    }

    public function setProcessedType($processedType)
    {
        $this->params['processedType'] = $processedType;
    }

    public function setProductRequestList($productRequestList)
    {
        $size = count($productRequestList);
        for ($i = 0; $i < $size; ++$i) {
            $productRequestList[$i] = $productRequestList[$i]->getInstance();
        }
        $this->params['productRequestList'] = $productRequestList;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->params['warehouseNo'] = $warehouseNo;
    }

    public function getAllowLack()
    {
        return $this->allowLack;
    }

    public function setAllowLack($allowLack)
    {
        $this->params['allowLack'] = $allowLack;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
