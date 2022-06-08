<?php

namespace ACES\Contracts;

interface RequestInterFace
{
    /**
     * 请求的数据类型
     *
     * @return string
     */
    public function getApiMethodName();

    /**
     * 获取全部数据
     *
     * @return array
     */
    public function all();

    /**
     * 参数的 json 字符串
     *
     * @return string
     */
    public function toJson();

    /**
     * 参数的 json 字符串
     *
     * @deprecated toJson()
     *
     * @return string
     */
    public function getApiParas();


    /**
     * 默认版本
     *
     * @return string|null
     */
    public function getVersion();
}
