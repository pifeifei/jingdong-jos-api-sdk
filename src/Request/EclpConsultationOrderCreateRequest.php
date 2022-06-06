<?php

namespace ACES\Request;


class EclpConsultationOrderCreateRequest
{
    private $apiParas = array();
    private $version;
    private $orderType;
    private $orderNo;
    private $choosenPhoneNumber;
    private $userPhoneNumber;
    private $deptNo;
    private $userInfoStr;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getChoosenPhoneNumber()
    {
        return $this->choosenPhoneNumber;
    }

    public function setChoosenPhoneNumber($choosenPhoneNumber)
    {
        $this->choosenPhoneNumber = $choosenPhoneNumber;
        $this->apiParas["choosenPhoneNumber"] = $choosenPhoneNumber;
    }

    public function getUserPhoneNumber()
    {
        return $this->userPhoneNumber;
    }

    public function setUserPhoneNumber($userPhoneNumber)
    {
        $this->userPhoneNumber = $userPhoneNumber;
        $this->apiParas["userPhoneNumber"] = $userPhoneNumber;
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

    public function getUserInfoStr()
    {
        return $this->userInfoStr;
    }

    public function setUserInfoStr($userInfoStr)
    {
        $this->userInfoStr = $userInfoStr;
        $this->apiParas["userInfoStr"] = $userInfoStr;
    }
}
