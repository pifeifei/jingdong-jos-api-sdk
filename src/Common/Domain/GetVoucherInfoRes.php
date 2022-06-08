<?php

namespace ACES\Common\Domain;

class GetVoucherInfoRes
{
    private $errorCode;
    private $errorMsg;
    private $data;

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param null|string $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * @param null|string $errorMsg
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return GetVoucherInfoResVo
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param null|GetVoucherInfoResVo $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
