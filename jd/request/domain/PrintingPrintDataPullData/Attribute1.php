<?php

namespace PrintingPrintDataPullData;

class Attribute1
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.WayBillInfo";
    }

    private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    private $popFlag;

    public function setPopFlag($popFlag)
    {
        $this->params['popFlag'] = $popFlag;
    }

    public function getPopFlag()
    {
        return $this->popFlag;
    }

    private $wayBillCode;

    public function setWayBillCode($wayBillCode)
    {
        $this->params['wayBillCode'] = $wayBillCode;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

    private $jdWayBillCode;

    public function setJdWayBillCode($jdWayBillCode)
    {
        $this->params['jdWayBillCode'] = $jdWayBillCode;
    }

    public function getJdWayBillCode()
    {
        return $this->jdWayBillCode;
    }

    function getInstance()
    {
        return $this->params;
    }
}
