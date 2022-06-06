<?php

namespace ACES\Request;


class DetectionImagesRedLineDetectBatchRequest
{
    private $apiParas = array();
    private $version;
    private $timeZone;
    private $key;
    private $value;
    private $detectItem;
    private $imageUrl;

    public function getApiMethodName()
    {
        return "jingdong.detection.imagesRedLineDetectBatch";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        $this->apiParas["timeZone"] = $timeZone;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
        $this->apiParas["key"] = $key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        $this->apiParas["value"] = $value;
    }

    public function getDetectItem()
    {
        return $this->detectItem;
    }

    public function setDetectItem($detectItem)
    {
        $this->detectItem = $detectItem;
        $this->apiParas["detectItem"] = $detectItem;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        $this->apiParas["imageUrl"] = $imageUrl;
    }
}
