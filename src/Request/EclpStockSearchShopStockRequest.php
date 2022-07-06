<?php

namespace ACES\Request;

/**
 * 店铺库存查询(新)
 *
 * @link https://jos.jd.com/apilist?apiGroupId=138&apiId=15032&apiName=null
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
    public function getApiMethodName()
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
     */
    public function setPageNumber($pageNumber)
    {
        $this->apiParas['pageNumber'] = $pageNumber;

        return $this;
    }
}
