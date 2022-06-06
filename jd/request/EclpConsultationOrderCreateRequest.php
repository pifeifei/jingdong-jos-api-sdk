<?php

class EclpConsultationOrderCreateRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.consultationOrder.create";
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
                                                                                                                                    private $orderType;

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
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

                                                        private $choosenPhoneNumber;

    public function setChoosenPhoneNumber($choosenPhoneNumber)
    {
        $this->choosenPhoneNumber = $choosenPhoneNumber;
         $this->apiParas["choosenPhoneNumber"] = $choosenPhoneNumber;
    }

    public function getChoosenPhoneNumber()
    {
        return $this->choosenPhoneNumber;
    }

                                                        private $userPhoneNumber;

    public function setUserPhoneNumber($userPhoneNumber)
    {
        $this->userPhoneNumber = $userPhoneNumber;
         $this->apiParas["userPhoneNumber"] = $userPhoneNumber;
    }

    public function getUserPhoneNumber()
    {
        return $this->userPhoneNumber;
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

                                                        private $userInfoStr;

    public function setUserInfoStr($userInfoStr)
    {
        $this->userInfoStr = $userInfoStr;
         $this->apiParas["userInfoStr"] = $userInfoStr;
    }

    public function getUserInfoStr()
    {
        return $this->userInfoStr;
    }
}
