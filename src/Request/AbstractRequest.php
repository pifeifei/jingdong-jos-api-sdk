<?php

namespace ACES\Request;

use ACES\Contracts\RequestInterFace;

abstract class AbstractRequest implements RequestInterFace
{
    protected $apiParas = [];

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
        if (isset($this->apiParas['version'])) {
            return $this->apiParas['version'];
        }

        return $default;
    }

    public function setVersion($version)
    {
        $this->apiParas['version'] = $version;
    }

    /**
     * @param string $key
     * @param scalar $value
     */
    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
    }
}
