<?php

namespace ACES;

use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;

class JDToken
{
    protected string $appKey;

    protected string $appSecret;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * @var string
     */
    protected $key = 'cacheKey:%s';

    public function __construct($appKey, $appSecret)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }

    public function getKey(): string
    {
        return $this->key ?? $this->key = \sprintf('access_token.%s.%s', $this->appKey, $this->appSecret);
    }

    public function accessToken()
    {
        $json = $this->getCache()->get($this->getKey());

        if ($json) {
            return $json['access_token'];
        }

        $json = $this->getAccessToken();
        $this->getCache()->set($this->getKey(), $json, $json['expires_in'] ?? 3600);
        return $json['access_token'];
    }

    /**
     * @return array
     */
    protected function getAccessToken()
    {
//        获取token
    }

    protected function refreshAccessToken()
    {

    }

    /**
     * @return CacheInterface
     */
    public function getDefaultCache()
    {
        return new Psr16Cache(new FilesystemAdapter('jingdong', 3600));
    }

    /**
     * @param CacheInterface $cache
     */
    public function setCache($cache)
    {
        $this->cache = $cache;
    }

    /**
     * @return CacheInterface
     */
    public function getCache()
    {
        if ($this->cache) {
            return $this->cache;
        }

        return $this->cache = $this->getDefaultCache();
    }
}
