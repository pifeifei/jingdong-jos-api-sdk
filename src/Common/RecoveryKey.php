<?php

namespace ACES\Common;

/**
 * RecoveryKey.
 *
 * <P>
 *
 * @author JD Data Security Team (tenma.lin, wei.gao, mozhiyan, xuyina)
 *
 * @version 1.0
 */
class RecoveryKey
{
    private $ver;
    private $service;
    private $usage;
    private $mkey;
    private $mkey_id;
    private $mkey_type;
    private $mkey_digest;
    private $exp_ts;

    /**
     * @return multitype:integer null
     */
    public function getVer()
    {
        return $this->ver;
    }

    /**
     * @return multitype:string null
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return multitype:string null
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * @return multitype:string null
     */
    public function getMkey()
    {
        return $this->mkey;
    }

    /**
     * @return multitype:string null
     */
    public function getMkeyId()
    {
        return $this->mkey_id;
    }

    /**
     * @return multitype:string null
     */
    public function getMkeyType()
    {
        return $this->mkey_type;
    }

    /**
     * @return multitype:string null
     */
    public function getMkeyDigest()
    {
        return $this->mkey_digest;
    }

    /**
     * @return multitype:integer null
     */
    public function getExpTs()
    {
        return $this->exp_ts;
    }

    /**
     * @param null|int $ver
     */
    public function setVer($ver)
    {
        $this->ver = $ver;
    }

    /**
     * @param null|string $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @param null|string $usage
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
    }

    /**
     * @param null|string $mkey
     */
    public function setMkey($mkey)
    {
        $this->mkey = $mkey;
    }

    /**
     * @param null|string $mkey_id
     */
    public function setMkeyId($mkey_id)
    {
        $this->mkey_id = $mkey_id;
    }

    /**
     * @param null|string $mkey_type
     */
    public function setMkeyType($mkey_type)
    {
        $this->mkey_type = $mkey_type;
    }

    /**
     * @param null|string $mkey_digest
     */
    public function setMkeyDigest($mkey_digest)
    {
        $this->mkey_digest = $mkey_digest;
    }

    /**
     * @param null|int $exp_ts
     */
    public function setExpTs($exp_ts)
    {
        $this->exp_ts = $exp_ts;
    }
}
