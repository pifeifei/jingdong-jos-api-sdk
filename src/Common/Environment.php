<?php

namespace ACES\Common;

/**
 * @removed 1.0
 * @deprecated 0.1 不明作用
 */
class Environment
{
    private static $hostInfo;
    private static $systemInfo;

    public static function getHost()
    {
        if (null == self::$hostInfo) {
            try {
                $preg = '/((([0-9]?[0-9])|(1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))\\.){3}(([0-9]?[0-9])|(1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))/';

                $out = null;
                $stats = null;
                if (PHP_OS == 'Windows' || PHP_OS == 'WINNT') {
                    // windows get host info
                    exec('ipconfig', $out, $stats);
                    if (!empty($out)) {
                        foreach ($out as $row) {
                            if (strstr($row, 'IP') && strstr($row, ':') && !strstr($row, 'IPv6')) {
                                $tmpIp = explode(':', $row);
                                if (filter_var(trim($tmpIp[1]), FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) {
                                    self::$hostInfo = trim($tmpIp[1]);

                                    break;
                                }
                                self::$hostInfo = trim($tmpIp[1]);
                            }
                        }
                    }
                } elseif (PHP_OS == 'Darwin' || PHP_OS == 'Linux') {
                    exec('ifconfig', $out, $stats);
                    if (!empty($out)) {
                        foreach ($out as $oneline) {
                            if (preg_match($preg, $oneline)) {
                                $tmp = preg_grep($preg, explode(' ', $oneline));
                                $ip = current($tmp);
                                if (strstr($ip, 'addr:')) {
                                    $ip_ = explode(':', $ip);
                                    $ip = $ip_[1];
                                }
                                if (isset($ip) && '127.0.0.1' != $ip) {
                                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) {
                                        self::$hostInfo = $ip;

                                        break;
                                    }
                                    self::$hostInfo = $ip;
                                }
                            }
                        }
                    }
                }

                if (null == self::$hostInfo) {
                    self::$hostInfo = 'Unknown host';
                }
            } catch (\Exception $e) {
                self::$hostInfo = 'Unknown host';
            }
        }

        return self::$hostInfo;
    }

    public static function getSystemInfo()
    {
        if (null == self::$systemInfo) {
            try {
                $cpuout = null;
                $stats = null;
                $phpv = null;
                $version = 'php version unknown';
                if (PHP_OS == 'Linux') {
                    exec('php -v', $phpv, $stats);
                    if (null != $phpv && 0 != sizeof($phpv)) {
                        $version = $phpv[0];
                    } else {
                        $version = ' PHP '.PHP_VERSION;
                    }

                    exec("cat /proc/cpuinfo | grep 'model name'|uniq", $cpuout, $stats);
                    $cpuInfo = explode(':', $cpuout[0]);
                    $cpuInfo = $cpuInfo[1];
                    self::$systemInfo = PHP_OS.'|'.$version.'|'.$cpuInfo;
                    // mac
                } elseif (PHP_OS == 'Darwin') {
                    exec('php -v', $phpv, $stats);
                    if (null != $phpv && 0 != sizeof($phpv)) {
                        $version = $phpv[0];
                    }
                    exec('sysctl -n machdep.cpu.brand_string', $cpuout, $stats);
                    $cpuInfo = $cpuout[0];
                    self::$systemInfo = PHP_OS.'|'.$version.'|'.$cpuInfo;
                } elseif (PHP_OS == 'Windows' || PHP_OS == 'WINNT') {
                    exec('php -v', $phpv, $stats);
                    if (null != $phpv && 0 != sizeof($phpv)) {
                        $version = $phpv[0];
                    }
                    exec('wmic cpu get name', $cpuout, $stats);
                    $cpuInfo = $cpuout[1];
                    self::$systemInfo = PHP_OS.'|'.$version.'|'.$cpuInfo;
                }

                if (null == self::$systemInfo) {
                    self::$systemInfo = PHP_OS.'|'.' PHP '.PHP_VERSION;
                }
            } catch (\Exception $e) {
                self::$systemInfo = PHP_OS.'|'.' PHP '.PHP_VERSION;
            }
        }

        return self::$systemInfo;
    }
}
