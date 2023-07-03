<?php

namespace ACES\Request;

/**
 * 分页查询计费明细。
 *
 * @see https://jos.jd.com/apilist?apiGroupId=138&apiId=14018&apiName=null
 *
 * @property string $deptNo 必填,事业部编号
 * @property string $billDay 必填,计费日期
 * @property int $currentPage 必填,页码
 * @property int<1,100> $pageSize 必填,每页记录数,最大100
 */
class EclpFeeQueryFeeDetailWithPageRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.fee.queryFeeDetailWithPage';
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

    public function getBillDay()
    {
        return $this->apiParas['billDay'];
    }

    public function setBillDay($billDay)
    {
        $this->apiParas['billDay'] = $billDay;

        return $this;
    }

    public function getCurrentPage()
    {
        return $this->apiParas['currentPage'];
    }

    public function setCurrentPage($currentPage)
    {
        $this->apiParas['currentPage'] = $currentPage;

        return $this;
    }

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;

        return $this;
    }
}
