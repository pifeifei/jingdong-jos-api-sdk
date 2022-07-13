<?php

namespace ACES\Request\Domain\PrintingPrintDataSensitivePullData;

class Attribute1
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.jcloud.wms.printing.dto.EwPrintDataInfo';
    }

    public function getOrderNo()
    {
        return $this->params['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->params['orderNo'] = $orderNo;
    }

    public function getEwPrintData()
    {
        return $this->params['ewPrintData'];
    }

    public function setEwPrintData($ewPrintData)
    {
        $this->params['ewPrintData'] = $ewPrintData;
    }

    public function getWayBillNo()
    {
        return $this->params['wayBillNo'];
    }

    public function setWayBillNo($wayBillNo)
    {
        $this->params['wayBillNo'] = $wayBillNo;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
