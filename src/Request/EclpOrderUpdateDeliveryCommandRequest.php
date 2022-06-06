<?php

namespace ACES\Request;


class EclpOrderUpdateDeliveryCommandRequest
{
    private $apiParas = array();
    private $version;
    private $soNo;
    private $deptNo;
    private $isvSoNo;
    private $deliveryBeforeCommand;
    private $balancePayTimeStr;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.updateDeliveryCommand";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getSoNo()
    {
        return $this->soNo;
    }

    public function setSoNo($soNo)
    {
        $this->soNo = $soNo;
        $this->apiParas["soNo"] = $soNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getIsvSoNo()
    {
        return $this->isvSoNo;
    }

    public function setIsvSoNo($isvSoNo)
    {
        $this->isvSoNo = $isvSoNo;
        $this->apiParas["isvSoNo"] = $isvSoNo;
    }

    public function getDeliveryBeforeCommand()
    {
        return $this->deliveryBeforeCommand;
    }

    public function setDeliveryBeforeCommand($deliveryBeforeCommand)
    {
        $this->deliveryBeforeCommand = $deliveryBeforeCommand;
        $this->apiParas["deliveryBeforeCommand"] = $deliveryBeforeCommand;
    }

    public function getBalancePayTimeStr()
    {
        return $this->balancePayTimeStr;
    }

    public function setBalancePayTimeStr($balancePayTimeStr)
    {
        $this->balancePayTimeStr = $balancePayTimeStr;
        $this->apiParas["balancePayTimeStr"] = $balancePayTimeStr;
    }
}
