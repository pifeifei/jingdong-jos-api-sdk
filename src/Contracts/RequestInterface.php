<?php

namespace ACES\Contracts;

interface RequestInterface
{
    /**
     * 请求的数据类型.
     *
     * @return string
     */
    public function getApiMethodName();

    /**
     * @deprecated self::toArray
     * 获取全部数据
     *
     * @return array<int|string, mixed>
     */
    public function all(): array;

    /**
     * 获取全部数据.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(): array;

    /**
     * 参数的 json 字符串.
     */
    public function toJson(): string;

    /**
     * 参数的 json 字符串.
     *
     * @deprecated toJson()
     */
    public function getApiParas(): string;

    /**
     * 默认版本.
     */
    public function getVersion(string $default = null): string;

    /**
     * 是否需要 access_token 授权.
     */
    public function isRequireAccessToken(): bool;
}
