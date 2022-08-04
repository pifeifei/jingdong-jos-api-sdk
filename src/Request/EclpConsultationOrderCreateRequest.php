<?php

namespace ACES\Request;

class EclpConsultationOrderCreateRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.consultationOrder.create';
    }

    public function check()
    {
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

        return $this;
    }

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getChoosenPhoneNumber()
    {
        return $this->apiParas['choosenPhoneNumber'];
    }

    public function setChoosenPhoneNumber($choosenPhoneNumber)
    {
        $this->apiParas['choosenPhoneNumber'] = $choosenPhoneNumber;

        return $this;
    }

    public function getUserPhoneNumber()
    {
        return $this->apiParas['userPhoneNumber'];
    }

    public function setUserPhoneNumber($userPhoneNumber)
    {
        $this->apiParas['userPhoneNumber'] = $userPhoneNumber;

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

    public function getUserInfoStr()
    {
        return $this->apiParas['userInfoStr'];
    }

    public function setUserInfoStr($userInfoStr)
    {
        $this->apiParas['userInfoStr'] = $userInfoStr;

        return $this;
    }
}
