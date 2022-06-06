<?php

namespace ACES\Common\cache;

use ACES\TDEClient;

abstract class iCache
{
    protected static $CACHE_PREFIX = 'jd_jos_aces_';
    protected static $CACHE_TTL = 600;

    /**
     * @param $key
     * @return TDEClient
     */
    abstract public function get($key);

    abstract public function set($key, $var);

    abstract public function delete($key);

    public function cacheable()
    {
        return false;
    }
}
