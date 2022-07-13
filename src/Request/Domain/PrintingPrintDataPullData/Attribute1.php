<?php

namespace ACES\Request\Domain\PrintingPrintDataPullData;

class Attribute1
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.jcloud.wms.printing.dto.WayBillInfo';
    }

    public function getOrderNo()
    {
        return $this->params['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->params['orderNo'] = $orderNo;
    }

    public function getPopFlag()
    {
        return $this->params['popFlag'];
    }

    public function setPopFlag($popFlag)
    {
        $this->params['popFlag'] = $popFlag;
    }

    public function getWayBillCode()
    {
        return $this->params['wayBillCode'];
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->params['wayBillCode'] = $wayBillCode;
    }

    public function getJdWayBillCode()
    {
        return $this->params['jdWayBillCode'];
    }

    public function setJdWayBillCode($jdWayBillCode)
    {
        $this->params['jdWayBillCode'] = $jdWayBillCode;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
