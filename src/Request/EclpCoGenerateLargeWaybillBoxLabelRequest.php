<?php

namespace ACES\Request;

class EclpCoGenerateLargeWaybillBoxLabelRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.generateLargeWaybillBoxLabel';
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

    public function getWaybillCodes()
    {
        return $this->apiParas['waybillCodes'];
    }

    public function setWaybillCodes($waybillCodes)
    {
        $this->apiParas['waybillCodes'] = $waybillCodes;

        return $this;
    }

    public function getJdPackageNos()
    {
        return $this->apiParas['jdPackageNos'];
    }

    public function setJdPackageNos($jdPackageNos)
    {
        $this->apiParas['jdPackageNos'] = $jdPackageNos;

        return $this;
    }
}
