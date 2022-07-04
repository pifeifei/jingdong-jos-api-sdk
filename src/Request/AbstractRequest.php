<?php

namespace ACES\Request;

use ACES\Contracts\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{
    protected array $apiParas = [];

    protected string $version = '2.0';

    /**
     * {@inheritDoc}
     */
    abstract public function getApiMethodName();

    /**
     * {@inheritDoc}
     */
    public function all()
    {
        return $this->apiParas;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return $this->apiParas;
    }

    /**
     * {@inheritDoc}
     */
    public function toJson()
    {
        return json_encode((array) ($this->apiParas));
    }

    /**
     * {@inheritDoc}
     */
    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    /**
     * @deprecated toJson()
     *
     * @return array
     */
    public function getInstance()
    {
        return $this->apiParas;
    }

    /**
     * @param null|mixed $default
     *
     * @return null|string
     */
    public function getVersion($default = null)
    {
        if (isset($this->version)) {
            return $this->version;
        }

        return $default;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @param string $key
     * @param scalar $value
     */
    public function putOtherTextParam($key, $value)
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
     * @param scalar|null $value
     */
    public function __set($name, $value)
    {
        $this->apiParas[lcfirst($name)] = $value;
    }

    /**
     * 设置参数
     *
     * @param string $name
     * @return scalar|null
     */
    public function __get($name)
    {
        return $this->apiParas[lcfirst($name)] ?? null;
    }

    public function __toString()
    {
        return $this->toJson();
    }
}
