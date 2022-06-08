<?php

namespace ACES\Request;

class PopOrderShipmentRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.pop.order.shipment';
    }

    public function check()
    {
    }

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;

        return $this;
    }

    public function getLogiCoprId()
    {
        return $this->apiParas['logiCoprId'];
    }

    public function setLogiCoprId($logiCoprId)
    {
        $this->apiParas['logiCoprId'] = $logiCoprId;

        return $this;
    }

    public function getLogiNo()
    {
        return $this->apiParas['logiNo'];
    }

    public function setLogiNo($logiNo)
    {
        $this->apiParas['logiNo'] = $logiNo;

        return $this;
    }

    public function getInstallId()
    {
        return $this->apiParas['installId'];
    }

    public function setInstallId($installId)
    {
        $this->apiParas['installId'] = $installId;

        return $this;
    }
}
