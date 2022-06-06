<?php

namespace PrintingPrintDataSensitivePullData;

class Attribute1
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.EwPrintDataInfo";
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

    private $ewPrintData;

    public function setEwPrintData($ewPrintData)
    {
        $this->params['ewPrintData'] = $ewPrintData;
    }

    public function getEwPrintData()
    {
        return $this->ewPrintData;
    }

    private $wayBillNo;

    public function setWayBillNo($wayBillNo)
    {
        $this->params['wayBillNo'] = $wayBillNo;
    }

    public function getWayBillNo()
    {
        return $this->wayBillNo;
    }

    function getInstance()
    {
        return $this->params;
    }
}
