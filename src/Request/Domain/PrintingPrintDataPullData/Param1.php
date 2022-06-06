<?php

namespace ACES\Request\Domain\PrintingPrintDataPullData;




class Param1
{
    private $params = array();
    private $pin;
    private $objectId;
    private $parameters;
    private $wayBillInfos;
    private $cpCode;
    private $appKey;

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.PullDataReqDTO";
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getObjectId()
    {
        return $this->objectId;
    }

    public function setObjectId($objectId)
    {
        $this->params['objectId'] = $objectId;
    }

    public function setParameters($parameters)
    {
        $this->params['parameters'] = $parameters->getInstance();
    }

    public function setWayBillInfos($wayBillInfos)
    {
        $size = count($wayBillInfos);
        for ($i = 0; $i < $size; $i++) {
            $wayBillInfos [$i] = $wayBillInfos [$i]->getInstance();
        }
        $this->params['wayBillInfos'] = $wayBillInfos;
    }

    public function getCpCode()
    {
        return $this->cpCode;
    }

    public function setCpCode($cpCode)
    {
        $this->params['cpCode'] = $cpCode;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    public function setAppKey($appKey)
    {
        $this->params['appKey'] = $appKey;
    }

    function getInstance()
    {
        return $this->params;
    }
}
