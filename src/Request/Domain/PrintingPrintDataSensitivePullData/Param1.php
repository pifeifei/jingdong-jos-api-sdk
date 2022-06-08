<?php

namespace ACES\Request\Domain\PrintingPrintDataSensitivePullData;

class Param1
{
    private $params = [];
    private $pin;
    private $objectId;
    private $parameters;
    private $cpCode;
    private $ewPrintDataInfos;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.jcloud.wms.printing.dto.SensitivePullDataReqDTO';
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

    public function getCpCode()
    {
        return $this->cpCode;
    }

    public function setCpCode($cpCode)
    {
        $this->params['cpCode'] = $cpCode;
    }

    public function setEwPrintDataInfos($ewPrintDataInfos)
    {
        $size = count($ewPrintDataInfos);
        for ($i = 0; $i < $size; ++$i) {
            $ewPrintDataInfos[$i] = $ewPrintDataInfos[$i]->getInstance();
        }
        $this->params['ewPrintDataInfos'] = $ewPrintDataInfos;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
