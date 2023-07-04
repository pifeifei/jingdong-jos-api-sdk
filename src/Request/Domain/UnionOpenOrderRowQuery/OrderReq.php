<?php

namespace ACES\Request\Domain\UnionOpenOrderRowQuery;

use ACES\Request\Domain\AbstractParams;

class OrderReq extends AbstractParams
{
    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.order.row.OrderRowReq';
    }

    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->params['pageIndex'];
    }

    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->params['pageSize'];
    }

    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->params['type'];
    }

    public function setStartTime($startTime)
    {
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime()
    {
        return $this->params['startTime'];
    }

    public function setEndTime($endTime)
    {
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime()
    {
        return $this->params['endTime'];
    }

    public function setChildUnionId($childUnionId)
    {
        $this->params['childUnionId'] = $childUnionId;
    }

    public function getChildUnionId()
    {
        return $this->params['childUnionId'];
    }

    public function setKey($key)
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->params['key'];
    }

    public function setFields($fields)
    {
        $this->params['fields'] = $fields;
    }

    public function getFields()
    {
        return $this->params['fields'];
    }

    public function setOrderId($orderId)
    {
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId()
    {
        return $this->params['orderId'];
    }

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->params['pin'];
    }

    public function getInstance()
    {
        return $this->params;
    }
}
