<?php

namespace ACES\Request;

use ACES\Contracts\RequestInterface;

use function is_array;

/**
 * @property string $version 接口版本
 */
abstract class AbstractRequest implements RequestInterface
{
    /**
     * @var array<bool|float|int|string|string[]>
     */
    protected array $apiParas = [];

    protected string $version = '2.0';

    /**
     * 获取参数.
     *
     * @param array<string>|bool|float|int|string $value
     */
    public function __set(string $name, $value): void
    {
        $name = lcfirst($name);
        if (is_array($value)) {
            $value = implode(',', $value);
        }

        if (property_exists($this, $name)) {
            $this->{$name} = $value;

            return;
        }

        $this->apiParas[$name] = $value;
    }

    /**
     * 设置参数.
     *
     * @return null|array<string>|bool|float|int|string
     */
    public function __get(string $name)
    {
        $name = lcfirst($name);

        if (property_exists($this, $name)) {
            return $this->{$name};
        }

        return $this->apiParas[lcfirst($name)] ?? null;
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    abstract public function getApiMethodName();

    public function all(): array
    {
        return $this->apiParas;
    }

    public function toArray(): array
    {
        return $this->apiParas;
    }

    public function toJson(): string
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return (string) json_encode($this->apiParas);
    }

    public function getApiParas(): string
    {
        return $this->toJson();
    }

    /**
     * @deprecated toJson()
     *
     * @return array<int|string, mixed>
     */
    public function getInstance(): array
    {
        return $this->apiParas;
    }

    public function getVersion(string $default = null): string
    {
        if (isset($this->version)) {
            return $this->version;
        }

        return $default ?? '2.0';
    }

    /**
     * @param string $version 版本号，如 1.0 2.0
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @deprecated
     *
     * @param array<string>|bool|float|int|string $value
     */
    public function putOtherTextParam(string $key, $value): void
    {
        $this->apiParas[$key] = $value;
    }

    public function isRequireAccessToken(): bool
    {
        return true;
    }
}
