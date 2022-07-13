<?php

namespace ACES\Request\Domain\EclpProcessAddProcessOrderJos;

class Request
{
    private array $params = [];


    public function __construct()
    {
        $this->params['@type'] = 'com.jd.open.sp.process.domain.request.ProcessOrderJosRequest';
    }

    public function getDeptNo()
    {
        return $this->params['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getMixMode()
    {
        return $this->params['mixMode'];
    }

    public function setMixMode($mixMode)
    {
        $this->params['mixMode'] = $mixMode;
    }

    public function getSellerProcessedNo()
    {
        return $this->params['sellerProcessedNo'];
    }

    public function setSellerProcessedNo($sellerProcessedNo)
    {
        $this->params['sellerProcessedNo'] = $sellerProcessedNo;
    }

    public function getSalesPlatformId()
    {
        return $this->params['salesPlatformId'];
    }

    public function setSalesPlatformId($salesPlatformId)
    {
        $this->params['salesPlatformId'] = $salesPlatformId;
    }

    public function getUrgentFlag()
    {
        return $this->params['urgentFlag'];
    }

    public function setUrgentFlag($urgentFlag)
    {
        $this->params['urgentFlag'] = $urgentFlag;
    }

    public function getOrderMark()
    {
        return $this->params['orderMark'];
    }

    public function setOrderMark($orderMark)
    {
        $this->params['orderMark'] = $orderMark;
    }

    public function getSellerRemark()
    {
        return $this->params['sellerRemark'];
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->params['sellerRemark'] = $sellerRemark;
    }

    public function getProcessedType()
    {
        return $this->params['processedType'];
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
        return $this->params['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->params['warehouseNo'] = $warehouseNo;
    }

    public function getAllowLack()
    {
        return $this->params['allowLack'];
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
