<?php

namespace ACES\Request;

class EclpOrderExtQueryOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.order.ext.queryOrder';
    }

    public function check()
    {
    }

    public function getIsvUUID()
    {
        return $this->apiParas['isvUUID'];
    }

    public function setIsvUUID($isvUUID)
    {
        $this->apiParas['isvUUID'] = $isvUUID;

        return $this;
    }

    public function getSpSoNos()
    {
        return $this->apiParas['spSoNos'];
    }

    public function setSpSoNos($spSoNos)
    {
        $this->apiParas['spSoNos'] = $spSoNos;

        return $this;
    }

    public function getIsvSource()
    {
        return $this->apiParas['isvSource'];
    }

    public function setIsvSource($isvSource)
    {
        $this->apiParas['isvSource'] = $isvSource;

        return $this;
    }

    public function getDepartmentNo()
    {
        return $this->apiParas['departmentNo'];
    }

    public function setDepartmentNo($departmentNo)
    {
        $this->apiParas['departmentNo'] = $departmentNo;

        return $this;
    }
}
