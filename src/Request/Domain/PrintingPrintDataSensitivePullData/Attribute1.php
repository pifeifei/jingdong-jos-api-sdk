<?php

namespace ACES\Request\Domain\PrintingPrintDataSensitivePullData;




class Attribute1
{
    private $params = array();
    private $orderNo;
    private $ewPrintData;
    private $wayBillNo;

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.EwPrintDataInfo";
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->params['orderNo'] = $orderNo;
    }

    public function getEwPrintData()
    {
        return $this->ewPrintData;
    }

    public function setEwPrintData($ewPrintData)
    {
        $this->params['ewPrintData'] = $ewPrintData;
    }

    public function getWayBillNo()
    {
        return $this->wayBillNo;
    }

    public function setWayBillNo($wayBillNo)
    {
        $this->params['wayBillNo'] = $wayBillNo;
    }

    function getInstance()
    {
        return $this->params;
    }
}
