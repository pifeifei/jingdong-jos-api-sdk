<?php

class OpenBoModifyWaybillRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.open.bo.modifyWaybill";
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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

                                                                                    private $wayBillCode;

    public function setWayBillCode($wayBillCode)
    {
        $this->wayBillCode = $wayBillCode;
         $this->apiParas["wayBillCode"] = $wayBillCode;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

                                                        private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                                                                                        private $grossWeight;

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
         $this->apiParas["grossWeight"] = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

                                                        private $grossVolume;

    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume = $grossVolume;
         $this->apiParas["grossVolume"] = $grossVolume;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

                                                        private $expressItemQty;

    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty = $expressItemQty;
         $this->apiParas["expressItemQty"] = $expressItemQty;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }
}
