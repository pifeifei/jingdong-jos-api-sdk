<?php

namespace ACES\Request;

/**
 * 仓库实物库存查询
 *
 * 根据事业部、库房、商品编码、库存类型、库存状态，分页查询仓库实物库存
 *
 * @property string $deptNo 必填,京东事业部编码，最大 50 个字符
 * @property string $warehouseNo 必填,京东仓库编号；最大 50 字符；商家物流服务未开启返回空；
 * @property string $stockStatus 库存状态，枚举值：1.良品；2.残品；3.样品
 * @property string $stockType 库存类型，枚举值：1.正常 2.待退品3.商家预留4.仓库锁定5.临期锁定6.盘点锁定
 * @property string $goodsNo 京东事业部商品编号；最大50字符；最多支持100个商品编码，用英文逗号隔开
 * @property int $currentPage 当前页；默认第一页
 * @property int $pageSize 每页记录数；默认：100
 * @property int $returnZeroStock 是否返回0库存数据，1表示不返回库存为0的数据，2表示返回库存为0的数据；默认1(云集除外)
 * @property int $returnIsvLotattrs 是否返回isv串 ,不传时不返回,为原查询方式,填1时代表返回isv串,将影响查询方式和返回数据的维度(物流云专用)
 * @property string $goodsLevel 京东商品等级；100-199 良品；200-299残品；6 待鉴定
 * @property string $isvSku 商家商品编码；最大50字符；最多支持100个商品编码，用英文逗号隔开
 * @property string $sellerGoodsSign 商家商品标识，支持多个商家商品标识查询，用英文“,”分隔，最多支持100个商品标识
 *
 * @link https://jos.jd.com/apilist?apiGroupId=138&apiId=13161&apiName=null
 */
class EclpStockQueryStockRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.stock.queryStock';
    }

    public function check()
    {
    }
}
