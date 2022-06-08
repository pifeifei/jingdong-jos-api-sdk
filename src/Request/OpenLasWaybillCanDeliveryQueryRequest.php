<?php

namespace ACES\Request;

class OpenLasWaybillCanDeliveryQueryRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.open.lasWaybillCanDelivery.query';
    }

    public function check()
    {
    }

    public function getFromDcName()
    {
        return $this->apiParas['fromDcName'];
    }

    public function setFromDcName($fromDcName)
    {
        $this->apiParas['fromDcName'] = $fromDcName;

        return $this;
    }

    public function getPickUpType()
    {
        return $this->apiParas['pickUpType'];
    }

    public function setPickUpType($pickUpType)
    {
        $this->apiParas['pickUpType'] = $pickUpType;

        return $this;
    }

    public function getFromAddress()
    {
        return $this->apiParas['fromAddress'];
    }

    public function setFromAddress($fromAddress)
    {
        $this->apiParas['fromAddress'] = $fromAddress;

        return $this;
    }

    public function getToAddress()
    {
        return $this->apiParas['toAddress'];
    }

    public function setToAddress($toAddress)
    {
        $this->apiParas['toAddress'] = $toAddress;

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
}
