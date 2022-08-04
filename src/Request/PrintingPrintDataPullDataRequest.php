<?php

namespace ACES\Request;

class PrintingPrintDataPullDataRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.printing.printData.pullData';
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
