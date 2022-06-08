<?php

namespace ACES\Request;

class LdopPickupCancelRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.pickup.cancel';
    }

    public function check()
    {
    }

    public function getEndReasonName()
    {
        return $this->apiParas['endReasonName'];
    }

    public function setEndReasonName($endReasonName)
    {
        $this->apiParas['endReasonName'] = $endReasonName;

        return $this;
    }

    public function getEndReason()
    {
        return $this->apiParas['endReason'];
    }

    public function setEndReason($endReason)
    {
        $this->apiParas['endReason'] = $endReason;

        return $this;
    }

    public function getPickupCode()
    {
        return $this->apiParas['pickupCode'];
    }

    public function setPickupCode($pickupCode)
    {
        $this->apiParas['pickupCode'] = $pickupCode;

        return $this;
    }

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }
}
