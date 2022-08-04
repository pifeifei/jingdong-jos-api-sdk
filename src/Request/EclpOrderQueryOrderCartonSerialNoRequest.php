<?php

namespace ACES\Request;

class EclpOrderQueryOrderCartonSerialNoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.queryOrderCartonSerialNo';
    }

    public function check()
    {
    }

    public function getCartonNo()
    {
        return $this->apiParas['cartonNo'];
    }

    public function setCartonNo($cartonNo)
    {
        $this->apiParas['cartonNo'] = $cartonNo;

        return $this;
    }

    public function getSoNo()
    {
        return $this->apiParas['soNo'];
    }

    public function setSoNo($soNo)
    {
        $this->apiParas['soNo'] = $soNo;

        return $this;
    }
}
