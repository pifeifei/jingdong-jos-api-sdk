<?php

namespace ACES\Request;



use ACES\Contracts\RequestInterFace;

abstract class AbstractRequest implements RequestInterFace
{
    private $apiParas = [];

    /**
     * @inheritDoc
     */
    abstract public function getApiMethodName();

    /**
     * @inheritDoc
     */
    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    /**
     * @inheritDoc
     */
    public function toJson()
    {
        return json_encode((array)($this->apiParas));
    }

    /**
     * @return string|null
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
}
