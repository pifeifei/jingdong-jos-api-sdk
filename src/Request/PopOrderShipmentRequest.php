<?php

namespace ACES\Request;


class PopOrderShipmentRequest
{
    private $apiParas = array();
    private $version;
    private $orderId;
    private $logiCoprId;
    private $logiNo;
    private $installId;

    public function getApiMethodName()
    {
        return "jingdong.pop.order.shipment";
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

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getLogiCoprId()
    {
        return $this->logiCoprId;
    }

    public function setLogiCoprId($logiCoprId)
    {
        $this->logiCoprId = $logiCoprId;
        $this->apiParas["logiCoprId"] = $logiCoprId;
    }

    public function getLogiNo()
    {
        return $this->logiNo;
    }

    public function setLogiNo($logiNo)
    {
        $this->logiNo = $logiNo;
        $this->apiParas["logiNo"] = $logiNo;
    }

    public function getInstallId()
    {
        return $this->installId;
    }

    public function setInstallId($installId)
    {
        $this->installId = $installId;
        $this->apiParas["installId"] = $installId;
    }
}
