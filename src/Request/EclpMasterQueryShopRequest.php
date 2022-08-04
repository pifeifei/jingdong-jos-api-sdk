<?php

namespace ACES\Request;

class EclpMasterQueryShopRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.queryShop';
    }

    public function check()
    {
    }

    public function getShopNos()
    {
        return $this->apiParas['shopNos'];
    }

    public function setShopNos($shopNos)
    {
        $this->apiParas['shopNos'] = $shopNos;

        return $this;
    }

    public function getIsvShopNos()
    {
        return $this->apiParas['isvShopNos'];
    }

    public function setIsvShopNos($isvShopNos)
    {
        $this->apiParas['isvShopNos'] = $isvShopNos;

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
