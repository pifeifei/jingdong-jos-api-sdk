<?php

namespace ACES\Request;

/**
 * 根据外部单号、单据类型查询ECLP单号服务。
 *
 * @see https://jos.jd.com/apilist?apiGroupId=138&apiId=14160&apiName=null
 *
 * @property string $deptNo 必填，事业部编号；最大长度50；
 * @property string $outNo 必填，外部单号；最大长度50；
 * @property string $recepitType 必填，单据类型
 *                               0：no为商家订单号orderNo；
 *                               1：no为ECLP单号wbNo；
 *                               2：no为青龙运单号lwbNo。
 */
class EclpCoGetEclpNoByOutNoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.getEclpNoByOutNo';
    }

    public function check(): bool
    {
        return true;
    }

    /**
     * @deprecated 0.1.4
     */
    public function getDeptNo(): string
    {
        return $this->apiParas['deptNo'];
    }

    /**
     * @deprecated 0.1.4
     *
     * @param mixed $deptNo
     */
    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    /**
     * @deprecated 0.1.4
     */
    public function getOutNo()
    {
        return $this->apiParas['outNo'];
    }

    /**
     * @deprecated 0.1.4
     *
     * @param mixed $outNo
     */
    public function setOutNo($outNo)
    {
        $this->apiParas['outNo'] = $outNo;

        return $this;
    }

    /**
     * @deprecated 0.1.4
     */
    public function getRecepitType()
    {
        return $this->apiParas['recepitType'];
    }

    /**
     * @deprecated 0.1.4
     *
     * @param mixed $recepitType
     */
    public function setRecepitType($recepitType)
    {
        $this->apiParas['recepitType'] = $recepitType;

        return $this;
    }
}
