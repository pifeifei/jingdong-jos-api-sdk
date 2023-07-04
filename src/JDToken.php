<?php

namespace ACES;

use ACES\Exceptions\JingdongException;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;

class JDToken
{
    protected string $key;

    public function __construct(protected JdClient $jdClient, protected ?CacheInterface $cache = null)
    {
    }

    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    public function getKey(): string
    {
        return $this->key ?? $this->key = sprintf('jd_jos_aces_access_token.%s.%s', $this->getAppKey(), $this->getAppSecret());
    }

    /**
     * 获取 access_token.
     *
     * @throws JingdongException
     */
    public function accessToken(string $code = null): string
    {
        try {
            /** @var array{access_token:string, expires_in:int, refresh_token:string, time:int} $json */
            $json = $this->getCache()->get($this->getKey());

            if ($json) {
                if (time() >= $json['expires_in'] + (int) ($json['time'] / 1000) - 3600) {
                    $json = $this->getRefreshAccessToken();
                    $this->getCache()->set($this->getKey(), $json, $json['expires_in']);

                    return $json['access_token'];
                }

                if (!isset($json['access_token'])) {
                    throw new JingdongException('京东接口异常：获取 access_token 失败', (array) $json);
                }

                return $json['access_token'];
            }

            $json = $this->getAccessToken($code);
            $this->getCache()->set($this->getKey(), $json, $json['expires_in']);

            return $json['access_token'];
        } catch (\Psr\SimpleCache\InvalidArgumentException $e) {
            $context = [
                'cacheKey' => $this->getKey(),
            ];

            throw new JingdongException('京东接口异常: Apiece 缓存异常：' . $e->getMessage(), $context);
        }
    }

    /**
     * 刷新 access_token.
     *
     * @throws JingdongException
     */
    public function refreshToken(): string
    {
        try {
            /** @var array{access_token:string, expires_in:int, refresh_token:string, time:int} $json */
            $json = $this->getCache()->get($this->getKey());
            if ($json) {
                return $json['refresh_token'];
            }
        } catch (InvalidArgumentException $e) {
            throw new JingdongException('jingdong error: ' . $e, ['cacheKey' => $this->getKey()], $e);
        }

        throw new JingdongException('jingdong error: 不存在 refresh_token');
    }

    /**
     * 必须登录京东 宙斯账号才能获取 access_token, 所以不能自动获取.
     *
     * @throws JingdongException
     *
     * @return array{access_token:string, expires_in:int, refresh_token:string, time:int}
     *
     * @see https://jos.jd.com/faqdetail?listId=124&itemId=1778
     */
    public function getAccessToken(string $code = null): array
    {
        if (null === $code) {
            throw new JingdongException(sprintf('Please use your browser to open the %s link and enter your account password to get access_ token, automatically update after.', $this->getAccessTokenCodeUrl()));
        }

        $result = $this->jdClient->curl($this->getAccessTokenUrl($code));
        $json = json_decode($result, true);
        if (json_last_error()) {
            throw new JingdongException('jingdong error: json 格式化异常，' . json_last_error_msg(), ['response' => $result]);
        }

        return $json;
    }

    /**
     * @return CacheInterface
     */
    public function getDefaultCache()
    {
        return new Psr16Cache(new FilesystemAdapter('jingdong', 3600));
    }

    public function setCache(CacheInterface $cache): void
    {
        $this->cache = $cache;
    }

    /**
     * @return CacheInterface
     */
    public function getCache()
    {
        if (null !== $this->cache) {
            return $this->cache;
        }

        return $this->cache = $this->getDefaultCache();
    }

    protected function getAppKey(): string
    {
        return $this->jdClient->getAppKey();
    }

    protected function getAppSecret(): string
    {
        return $this->jdClient->getAppSecret();
    }

    protected function getRedirectUrl(): string
    {
        return $this->jdClient->getRedirectUrl();
    }

    protected function getQueryCode(): string
    {
        $query = [
            'app_key' => $this->getAppKey(),
            'response_type' => 'code',
            'redirect_uri' => $this->getRedirectUrl(),
            'state' => date('Ymd'), // $this->getAppKey(),
            'scope' => 'snsapi_base',
        ];

        return http_build_query($query);
    }

    protected function getAccessTokenCodeUrl(): string
    {
        $url = 'https://open-oauth.jd.com/oauth2/to_login';

        return sprintf('%s?%s', $url, $this->getQueryCode());
    }

    protected function getAccessTokenUrl(string $code = null): string
    {
        $url = 'https://open-oauth.jd.com/oauth2/access_token';
        $query = [
            'app_key' => $this->getAppKey(),
            'app_secret' => $this->getAppSecret(),
            'grant_type' => 'authorization_code',
            'code' => $code,
        ];

        return sprintf('%s?%s', $url, http_build_query($query));
    }

    /**
     * @throws JingdongException
     */
    protected function getRefreshAccessTokenUrl(): string
    {
        // https://open-oauth.jd.com/oauth2/refresh_token?app_key=XXXXX&app_secret=XXXXX&grant_type=refresh_token&refresh_token=XXXX
        $url = 'https://open-oauth.jd.com/oauth2/refresh_token';
        $query = [
            'app_key' => $this->getAppKey(),
            'app_secret' => $this->getAppSecret(),
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->refreshToken(),
        ];

        return sprintf('%s?%s', $url, http_build_query($query));
    }

    /**
     * @throws JingdongException
     *
     * @return array{access_token:string, expires_in:int, refresh_token:string, time:int}
     */
    protected function getRefreshAccessToken()
    {
        try {
            $result = $this->jdClient->curl($this->getRefreshAccessTokenUrl());
            $json = json_decode($result);
            if (json_last_error()) {
                throw new JingdongException('jingdong error: json 格式化异常，' . json_last_error_msg(), ['response' => $result]);
            }

            return $json;
        } catch (InvalidArgumentException $e) {
            throw new JingdongException($e->getMessage(), ['key' => $this->getKey()], $e);
        }
    }
}
