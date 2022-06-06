<?php

namespace ACES\Request\Domain\PrintingPrintDataPullData;




class Attribute1
{
    private $params = array();
    private $orderNo;
    private $popFlag;
    private $wayBillCode;
    private $jdWayBillCode;

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.WayBillInfo";
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->params['orderNo'] = $orderNo;
    }

    public function getPopFlag()
    {
        return $this->popFlag;
    }

    public function setPopFlag($popFlag)
    {
        $this->params['popFlag'] = $popFlag;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->params['wayBillCode'] = $wayBillCode;
    }

    public function getJdWayBillCode()
    {
        return $this->jdWayBillCode;
    }

    public function setJdWayBillCode($jdWayBillCode)
    {
        $this->params['jdWayBillCode'] = $jdWayBillCode;
    }

    function getInstance()
    {
        return $this->params;
    }
}
