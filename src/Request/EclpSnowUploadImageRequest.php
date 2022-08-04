<?php

namespace ACES\Request;

class EclpSnowUploadImageRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.snow.uploadImage';
    }

    public function check()
    {
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getImageString()
    {
        return $this->apiParas['imageString'];
    }

    public function setImageString($imageString)
    {
        $this->apiParas['imageString'] = $imageString;

        return $this;
    }
}
