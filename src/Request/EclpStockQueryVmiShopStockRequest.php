<?php

namespace ACES\Request;

/**
 * 店铺库存查询。
 *
 * 接口描述：店铺库存查询；根据事业部、店铺、库房、商品查询店铺库存（包含VMI店铺）
 * 建议使用：jingdong.eclp.stock.searchShopStock
 *
 * @link https://jos.jd.com/apilist?apiGroupId=138&apiId=13527&apiName=null
 */
class EclpStockQueryVmiShopStockRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.stock.queryVmiShopStock';
    }

    public function check()
    {
    }

    public function getGoodsNos()
    {
        return $this->apiParas['goodsNos'];
    }

    public function setGoodsNos($goodsNos)
    {
        $this->apiParas['goodsNos'] = $goodsNos;

        return $this;
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

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }
}
