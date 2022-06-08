<?php

namespace ACES\Common\cache;

use ACES\TDEClient;

class YacCache extends iCache
{
    private $isEnable = false;
    private $yac;

    public function __construct()
    {
        if (extension_loaded('yac') && 1 == ini_get('yac.enable')) {
            $this->isEnable = true;
            $this->yac = new \Yac(self::$CACHE_PREFIX);
        }
    }

    public function get($key)
    {
        if ($this->isEnable) {
            $key = md5($key);

            return $this->yac->get($key);
        }
    }

    /**
     * @param $key
     * @param $var TDEClient
     */
    public function set($key, $var)
    {
        if ($this->isEnable) {
            if (!$var && !$var->checkNullParam()) {
                $key = md5($key);
                $this->yac->set($key, $var, self::$CACHE_TTL);
            }
        }
    }

    public function cacheable()
    {
        return $this->isEnable;
    }

    public function delete($key)
    {
        if ($this->isEnable) {
            $key = md5($key);

            return $this->yac->delete($key);
        }
    }
}
