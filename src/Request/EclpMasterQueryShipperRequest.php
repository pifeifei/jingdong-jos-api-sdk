<?php

namespace ACES\Request;

class EclpMasterQueryShipperRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.master.queryShipper';
    }

    public function check()
    {
    }

    public function getShipperNos()
    {
        return $this->apiParas['shipperNos'];
    }

    public function setShipperNos($shipperNos)
    {
        $this->apiParas['shipperNos'] = $shipperNos;

        return $this;
    }
}
