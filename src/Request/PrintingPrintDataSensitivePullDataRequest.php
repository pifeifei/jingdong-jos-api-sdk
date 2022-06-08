<?php

namespace ACES\Request;

class PrintingPrintDataSensitivePullDataRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.printing.printData.sensitivePullData';
    }

    public function check()
    {
    }

    public function getParam1()
    {
        return $this->apiParas['param1'];
    }

    public function setParam1($param1)
    {
        $this->apiParas['param1'] = $param1;

        return $this;
    }
}
