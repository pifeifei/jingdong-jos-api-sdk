<?php

namespace ACES\Request;

/**
 * @deprecated 已停用
 * 查询库存流水汇总数据。
 *
 * @link https://jos.jd.com/apilist?apiGroupId=138&apiId=13434&apiName=null
 *
 * @property string $deptNo 必填，事业部编号；最大50字符。
 * @property string $warehouseNo 必填，库房编号；最大50字符。
 * @property string $date 必填，查询日期（yyyy-MM-dd HH:mm:ss）。
 * @property string $goodsNo 商品编码；最大50字符。
 * @property string $isvGoodsNo ISV商品编码；最大50字符。

 */
class EclpStockQuerySumStockRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.stock.querySumStock';
    }

    public function check()
    {
    }
}
