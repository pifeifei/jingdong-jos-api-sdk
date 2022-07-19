<?php

namespace ACES\Request;

use ACES\Contracts\RequestInterface;

/**
 * @property string $version 接口版本
 */
abstract class AbstractRequest implements RequestInterface
{
    /**
     * @var array<bool|string|int|float|string[]>
     */
    protected array $apiParas = [];

    protected string $version = '2.0';

    /**
     * {@inheritDoc}
     */
    abstract public function getApiMethodName();

    /**
     * {@inheritDoc}
     */
    public function all(): array
    {
        return $this->apiParas;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        return $this->apiParas;
    }

    /**
     * {@inheritDoc}
     */
    public function toJson(): string
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode((array) ($this->apiParas));
    }

    /**
     * {@inheritDoc}
     */
    public function getApiParas(): string
    {
        return $this->toJson();
    }

    /**
     * @deprecated toJson()
     *
     * @return array
     */
    public function getInstance(): array
    {
        return $this->apiParas;
    }

    /**
     * @param string|null $default
     * @return string
     * @deprecated $this->version
     */
    public function getVersion(string $default = null): string
    {
        if (isset($this->version)) {
            return $this->version;
        }

        return $default;
    }

    /**
     * @deprecated 0.1.4 $this->version
     * @param $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @deprecated
     *
     * @param string $key
     * @param array|scalar $value
     */
    public function putOtherTextParam(string $key, $value)
    {
        $this->apiParas[$key] = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function isRequireAccessToken(): bool
    {
        return true;
    }

    /**
     * 获取参数
     * @param string $name
     * @param array|float|bool|int|string  $value
     */
    public function __set(string $name, $value)
    {
        $name = lcfirst($name);
        if (is_array($value)) {
            $value = implode(',', $value);
        }

        if (property_exists($this, $name)) {
            $this->$name = $value;
            return;
        }

        $this->apiParas[$name] = $value;
    }

    /**
     * 设置参数
     *
     * @param string $name
     * @return scalar|null
     */
    public function __get(string $name)
    {
        $name = lcfirst($name);

        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return $this->apiParas[lcfirst($name)] ?? null;
    }

    public function __toString(): string
    {
        return $this->toJson();
    }
}
