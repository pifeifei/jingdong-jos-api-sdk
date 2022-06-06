<?php

namespace PrintingPrintDataPullData;

class Param1
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.PullDataReqDTO";
    }

    private $pin;

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $objectId;

    public function setObjectId($objectId)
    {
        $this->params['objectId'] = $objectId;
    }

    public function getObjectId()
    {
        return $this->objectId;
    }

    private $parameters;

    public function setParameters($parameters)
    {
        $this->params['parameters'] = $parameters ->getInstance();
    }


    private $wayBillInfos;

    public function setWayBillInfos($wayBillInfos)
    {
        $size = count($wayBillInfos);
        for ($i = 0; $i < $size; $i++) {
            $wayBillInfos [$i] = $wayBillInfos [$i] ->getInstance();
        }
        $this->params['wayBillInfos'] = $wayBillInfos;
    }


    private $cpCode;

    public function setCpCode($cpCode)
    {
        $this->params['cpCode'] = $cpCode;
    }

    public function getCpCode()
    {
        return $this->cpCode;
    }

    private $appKey;

    public function setAppKey($appKey)
    {
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    function getInstance()
    {
        return $this->params;
    }
}
