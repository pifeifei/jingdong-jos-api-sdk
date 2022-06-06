<?php

namespace EclpProcessAddProcessOrderJos;

class Request
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.process.domain.request.ProcessOrderJosRequest";
    }

    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    private $mixMode;

    public function setMixMode($mixMode)
    {
        $this->params['mixMode'] = $mixMode;
    }

    public function getMixMode()
    {
        return $this->mixMode;
    }

    private $sellerProcessedNo;

    public function setSellerProcessedNo($sellerProcessedNo)
    {
        $this->params['sellerProcessedNo'] = $sellerProcessedNo;
    }

    public function getSellerProcessedNo()
    {
        return $this->sellerProcessedNo;
    }

    private $salesPlatformId;

    public function setSalesPlatformId($salesPlatformId)
    {
        $this->params['salesPlatformId'] = $salesPlatformId;
    }

    public function getSalesPlatformId()
    {
        return $this->salesPlatformId;
    }

    private $urgentFlag;

    public function setUrgentFlag($urgentFlag)
    {
        $this->params['urgentFlag'] = $urgentFlag;
    }

    public function getUrgentFlag()
    {
        return $this->urgentFlag;
    }

    private $orderMark;

    public function setOrderMark($orderMark)
    {
        $this->params['orderMark'] = $orderMark;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    private $sellerRemark;

    public function setSellerRemark($sellerRemark)
    {
        $this->params['sellerRemark'] = $sellerRemark;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    private $processedType;

    public function setProcessedType($processedType)
    {
        $this->params['processedType'] = $processedType;
    }

    public function getProcessedType()
    {
        return $this->processedType;
    }

    private $productRequestList;

    public function setProductRequestList($productRequestList)
    {
        $size = count($productRequestList);
        for ($i = 0; $i < $size; $i++) {
            $productRequestList [$i] = $productRequestList [$i] ->getInstance();
        }
        $this->params['productRequestList'] = $productRequestList;
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

    private $allowLack;

    public function setAllowLack($allowLack)
    {
        $this->params['allowLack'] = $allowLack;
    }

    public function getAllowLack()
    {
        return $this->allowLack;
    }

    function getInstance()
    {
        return $this->params;
    }
}
