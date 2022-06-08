<?php

namespace ACES\Common;

class KeyResponse
{
    private $status_code;
//    private $status_message;
    private $errorMsg;
    private $tid;
    private $ts;
    private $enc_service;
    private $service_key_list;
    private $key_cache_disabled;
    private $key_backup_disabled;

    /**
     * @param null|int $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->status_code = $statusCode;
    }

    /**
     * @param null|string $message
     * @param mixed       $errorMsg
     */
//    public function setStatusMessage($message) {
//        $this->status_message = $message;
//    }
    /**
     * @param null|string $errMsg
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * @param null|string $tid
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    }

    /**
     * @param null|int $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }

    /**
     * @param null|string $encService
     */
    public function setEncService($encService)
    {
        $this->enc_service = $encService;
    }

    /**
     * @param null|ServiceKeyInfo[] $serviceKeyList
     */
    public function setServiceKeyList($serviceKeyList)
    {
        $this->service_key_list = $serviceKeyList;
    }

    /**
     * @param null|int $keyCacheDisabled
     */
    public function setKeyCacheDisabled($keyCacheDisabled)
    {
        $this->key_cache_disabled = $keyCacheDisabled;
    }

    /**
     * @param null|int $keyBackupDisabled
     */
    public function setKeyBackupDisabled($keyBackupDisabled)
    {
        $this->key_backup_disabled = $keyBackupDisabled;
    }

    /**
     * @return int
     */
    public function getStatus_code()
    {
        return $this->status_code;
    }

    /**
     * @return string
     */
//    public function getStatus_message()
//    {
//        return $this->status_message;
//    }

    /**
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @return int
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @return string
     */
    public function getEnc_service()
    {
        return $this->enc_service;
    }

    /**
     * @return ServiceKeyInfo[]
     */
    public function getService_key_list()
    {
        return $this->service_key_list;
    }

    /**
     * @return int
     */
    public function getKey_cache_disabled()
    {
        return $this->key_cache_disabled;
    }

    /**
     * @return int
     */
    public function getKey_backup_disabled()
    {
        return $this->key_backup_disabled;
    }
}
