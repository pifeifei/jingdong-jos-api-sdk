<?php

namespace ACES\Request;

/**
 * 查询物流跟踪信息（出库后））。
 *
 * @see https://jos.jd.com/apilist?apiGroupId=138&apiId=14253&apiName=null
 *
 * @property string $customerCode 必须,青龙业主号
 * @property string $bizCode 必须，订单号(可以传ECLP订单号, 或者商家订单号)
 * @property int $type 必须，订单号类型(10：代表ECLP订单号, 20：代表商家订单号)
 */
class EclpOrderGetTrackMessagePlusByOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.getTrackMessagePlusByOrder';
    }

    public function check()
    {
    }

    /**
     * @deprecated 0.1.4 $this->customerCode
     */
    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    /**
     * @deprecated 0.1.4 $this->customerCode
     *
     * @param mixed $customerCode
     */
    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    /**
     * @deprecated 0.1.4 $this->bizCode
     */
    public function getBizCode()
    {
        return $this->apiParas['bizCode'];
    }

    /**
     * @deprecated 0.1.4 $this->bizCode
     *
     * @param mixed $bizCode
     */
    public function setBizCode($bizCode)
    {
        $this->apiParas['bizCode'] = $bizCode;

        return $this;
    }

    /**
     * @deprecated 0.1.4 $this->type
     */
    public function getType()
    {
        return $this->apiParas['type'];
    }

    /**
     * @deprecated 0.1.4 $this->type
     *
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->apiParas['type'] = $type;

        return $this;
    }
}
