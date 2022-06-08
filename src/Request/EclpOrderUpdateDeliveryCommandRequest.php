<?php

namespace ACES\Request;

class EclpOrderUpdateDeliveryCommandRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.order.updateDeliveryCommand';
    }

    public function check()
    {
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

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getIsvSoNo()
    {
        return $this->apiParas['isvSoNo'];
    }

    public function setIsvSoNo($isvSoNo)
    {
        $this->apiParas['isvSoNo'] = $isvSoNo;

        return $this;
    }

    public function getDeliveryBeforeCommand()
    {
        return $this->apiParas['deliveryBeforeCommand'];
    }

    public function setDeliveryBeforeCommand($deliveryBeforeCommand)
    {
        $this->apiParas['deliveryBeforeCommand'] = $deliveryBeforeCommand;

        return $this;
    }

    public function getBalancePayTimeStr()
    {
        return $this->apiParas['balancePayTimeStr'];
    }

    public function setBalancePayTimeStr($balancePayTimeStr)
    {
        $this->apiParas['balancePayTimeStr'] = $balancePayTimeStr;

        return $this;
    }
}
