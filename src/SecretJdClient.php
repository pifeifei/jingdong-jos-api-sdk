<?php

namespace ACES;

use ACES\Common\cache\iCache;

/**
 * @deprecated to use TDEClient
 */
class SecretJdClient
{
    public static function getInstance($accessToken, $appKey, $appSecret, $serverUrl = 'https://api.jd.com/routerjson')
    {
        return TDEClient::getInstance($accessToken, $appKey, $appSecret, $serverUrl);
    }

    /**
     * @return iCache
     */
    public static function getClientCache()
    {
        return TDEClient::getClientCache();
    }

    public static function generateCustomerToken($customerUserId, $appKey)
    {
        return TDEClient::generateCustomerToken($customerUserId, $appKey);
    }
}
