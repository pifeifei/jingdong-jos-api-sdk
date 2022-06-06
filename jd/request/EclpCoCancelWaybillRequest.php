<?php

class EclpCoCancelWaybillRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.cancelWaybill";
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

                                                        private $wbNo;

    public function setWbNo($wbNo)
    {
        $this->wbNo = $wbNo;
         $this->apiParas["wbNo"] = $wbNo;
    }

    public function getWbNo()
    {
        return $this->wbNo;
    }

                                                        private $lwbNo;

    public function setLwbNo($lwbNo)
    {
        $this->lwbNo = $lwbNo;
         $this->apiParas["lwbNo"] = $lwbNo;
    }

    public function getLwbNo()
    {
        return $this->lwbNo;
    }

                                                        private $reason;

    public function setReason($reason)
    {
        $this->reason = $reason;
         $this->apiParas["reason"] = $reason;
    }

    public function getReason()
    {
        return $this->reason;
    }

                                                        private $cancelMode;

    public function setCancelMode($cancelMode)
    {
        $this->cancelMode = $cancelMode;
         $this->apiParas["cancelMode"] = $cancelMode;
    }

    public function getCancelMode()
    {
        return $this->cancelMode;
    }
}
