<?php

namespace ACES\Request;

/**
 * 销售出库单明细查询。
 *
 * 接口描述：获取客户订单所有的数据，包括订单明细，订单发货数据，订单状态流水。
 *
 * @link https://jos.jd.com/apilist?apiGroupId=138&apiId=13180&apiName=jingdong.eclp.order.queryOrder
 *
 * @property string $eclpSoNo 必填，开放平台出库单号
 */
class EclpOrderQueryOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.order.queryOrder';
    }

    public function check(): void
    {
    }

    /**
     * @deprecated 0.1.4
     */
    public function getEclpSoNo(): string
    {
        return (string)($this->apiParas['eclpSoNo']);
    }

    /**
     * @deprecated 0.1.4
     */
    public function setEclpSoNo(string $eclpSoNo)
    {
        $this->apiParas['eclpSoNo'] = $eclpSoNo;

        return $this;
    }
}
