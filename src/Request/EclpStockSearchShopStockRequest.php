<?php

namespace ACES\Request;

/**
 * 店铺库存查询(新).
 *
 * @see https://jos.jd.com/apilist?apiGroupId=138&apiId=15032&apiName=null
 *
 * @property string $requestId 必填，请求编号；长度50；备注：唯一标识;
 * @property string $deptNo 必须，事业部编码；长度50
 * @property string $shopNo 必须，店铺编码；长度50
 * @property int $pageSize 必须，每页条数据；最大1000
 * @property int $pageNumber 必须，页码；最小为1
 * @property string $warehouseNo 京东库房编号；长度50
 * @property string $goodsNo 事业部商品编号；长度50
 */
class EclpStockSearchShopStockRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.stock.searchShopStock';
    }

    public function check()
    {
    }

    /**
     * @deprecated
     */
    public function getRequestId()
    {
        return $this->apiParas['requestId'];
    }

    /**
     * @deprecated
     *
     * @param mixed $requestId
     */
    public function setRequestId($requestId)
    {
        $this->apiParas['requestId'] = $requestId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    /**
     * @deprecated
     *
     * @param mixed $deptNo
     */
    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getShopNo()
    {
        return $this->apiParas['shopNo'];
    }

    /**
     * @deprecated
     *
     * @param mixed $shopNo
     */
    public function setShopNo($shopNo)
    {
        $this->apiParas['shopNo'] = $shopNo;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    /**
     * @deprecated
     *
     * @param mixed $warehouseNo
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    /**
     * @deprecated
     *
     * @param mixed $goodsNo
     */
    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    /**
     * @deprecated
     *
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPageNumber()
    {
        return $this->apiParas['pageNumber'];
    }

    /**
     * @deprecated
     *
     * @param mixed $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->apiParas['pageNumber'] = $pageNumber;

        return $this;
    }
}
