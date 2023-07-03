<?php

namespace ACES\Request\Domain\PrintingPrintDataSensitivePullData;

use function count;

class Param1
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.jcloud.wms.printing.dto.SensitivePullDataReqDTO';
    }

    public function getPin()
    {
        return $this->params['pin'];
    }

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getObjectId()
    {
        return $this->params['objectId'];
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
        return $this->params['cpCode'];
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
