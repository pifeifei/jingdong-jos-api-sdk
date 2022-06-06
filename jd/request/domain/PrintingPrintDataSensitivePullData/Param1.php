<?php

namespace PrintingPrintDataSensitivePullData;

class Param1
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.SensitivePullDataReqDTO";
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


    private $cpCode;

    public function setCpCode($cpCode)
    {
        $this->params['cpCode'] = $cpCode;
    }

    public function getCpCode()
    {
        return $this->cpCode;
    }

    private $ewPrintDataInfos;

    public function setEwPrintDataInfos($ewPrintDataInfos)
    {
        $size = count($ewPrintDataInfos);
        for ($i = 0; $i < $size; $i++) {
            $ewPrintDataInfos [$i] = $ewPrintDataInfos [$i] ->getInstance();
        }
        $this->params['ewPrintDataInfos'] = $ewPrintDataInfos;
    }


    function getInstance()
    {
        return $this->params;
    }
}
