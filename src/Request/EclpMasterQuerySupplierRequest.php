<?php

namespace ACES\Request;

class EclpMasterQuerySupplierRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.master.querySupplier';
    }

    public function check()
    {
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

    public function getSupplierNos()
    {
        return $this->apiParas['supplierNos'];
    }

    public function setSupplierNos($supplierNos)
    {
        $this->apiParas['supplierNos'] = $supplierNos;

        return $this;
    }
}
