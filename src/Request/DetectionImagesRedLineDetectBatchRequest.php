<?php

namespace ACES\Request;

class DetectionImagesRedLineDetectBatchRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.detection.imagesRedLineDetectBatch';
    }

    public function check()
    {
    }

    public function getTimeZone()
    {
        return $this->apiParas['timeZone'];
    }

    public function setTimeZone($timeZone)
    {
        $this->apiParas['timeZone'] = $timeZone;
    }

    public function getKey()
    {
        return $this->apiParas['key'];
    }

    public function setKey($key)
    {
        $this->apiParas['key'] = $key;
    }

    public function getValue()
    {
        return $this->apiParas['value'];
    }

    public function setValue($value)
    {
        $this->apiParas['value'] = $value;
    }

    public function getDetectItem()
    {
        return $this->apiParas['detectItem'];
    }

    public function setDetectItem($detectItem)
    {
        $this->apiParas['detectItem'] = $detectItem;
    }

    public function getImageUrl()
    {
        return $this->apiParas['imageUrl'];
    }

    public function setImageUrl($imageUrl)
    {
        $this->apiParas['imageUrl'] = $imageUrl;
    }
}
