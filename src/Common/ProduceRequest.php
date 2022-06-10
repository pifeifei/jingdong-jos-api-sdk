<?php

namespace ACES\Common;

use ACES\Common\Domain\JosBaseInfo;

class ProduceRequest
{
    private $accessToken;
    private $customerUserId;
    private $serverUrl;

    /**
     * @var BasicMessage
     */
    private $messages;

    /**
     * ProduceRequest constructor.
     *
     * @param $accessToken string
     * @param $serverUrl string
     * @param $messages BasicMessage
     */
    public function __construct($accessToken, $serverUrl, $messages)
    {
        // 区分accessToken和customerUserId
        if (isset($accessToken)) {
            if (0 === stripos($accessToken, '_')) {
                $split = explode('_', $accessToken);
                $this->customerUserId = $split[1];
            } else {
                $this->accessToken = $accessToken;
            }
        }
        $this->serverUrl = $serverUrl;
        $this->messages = $messages;
    }

    public static function getInitRequest($accessToken, $serverUrl, $service, $tid)
    {
//        $messages = array();
//        $messages[] = new InitMessage($service, $tid);
        return new ProduceRequest($accessToken, $serverUrl, new InitMessage($service, $tid));
    }

    public static function getEventRequest($accessToken, $serverUrl, $service, $tid, $event_code, $event)
    {
//        $messages = array();
//        $messages[] = new EventMessage($service, $tid, $event_code, $event);
        return new ProduceRequest($accessToken, $serverUrl, new EventMessage($service, $tid, $event_code, $event));
    }

    public static function getKPEventRequest($accessToken, $serverUrl, $service, $tid, $event_code, $event, $major_kver, $keylist)
    {
//        $messages = array();
//        $messages[] = new KPEventMessage($service, $tid, $event_code, $event, $major_kver, $keylist);
        return new ProduceRequest($accessToken, $serverUrl, new KPEventMessage($service, $tid, $event_code, $event, $major_kver, $keylist));
    }

    public static function getErrorRequest($accessToken, $serverUrl, $service, $tid, $level, $err_code, $err_msg, $stack_trace)
    {
//        $messages = array();
//        $messages[] = new ErrorMessage($service, $tid, $level, $err_code, $err_msg, $stack_trace);
        return new ProduceRequest($accessToken, $serverUrl, new ErrorMessage($service, $tid, $level, $err_code, $err_msg, $stack_trace));
    }

    public static function getStatisticRequest($accessToken, $serverUrl, $service, $tid, $stat)
    {
//        $messages = array();
//        $messages[] = new StatisticMessage($service, $tid, $stat);
        return new ProduceRequest($accessToken, $serverUrl, new StatisticMessage($service, $tid, $stat));
    }

//    public function jsonSerialize()
//    {
//        $vars = get_object_vars($this);
//
//        return $vars;
//    }

    /**
     * @param JosBaseInfo $josBaseInfo
     *
     * @return array
     */
    public function toFormParams($josBaseInfo)
    {
        return $josBaseInfo->getFormParams($this);
    }

    public function to360buyParamJson()
    {
        $paramJson = [];
        if (isset($this->customerUserId)) {
            $paramJson['customer_user_id'] = $this->customerUserId;
        } else {
            $paramJson['access_token'] = $this->accessToken;
        }

        $paramJson['businessId'] = $this->messages->getBusinessId();
        $paramJson['text'] = $this->messages->getText();
        $paramJson['attribute'] = $this->messages->getAttributes();

        return json_encode($paramJson);
    }

    public function getJosMethod()
    {
        return 'jingdong.jos.secret.api.report.get';
    }
}

class BasicMessage
{
    protected $businessId;
    protected $text;
    protected $attributes;

//    public function jsonSerialize()
//    {
//        $vars = get_object_vars($this);
//
//        return $vars;
//    }

    public static function getRandomString()
    {
        $abc = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz=+-*/_|<>^~@?%&';
        $res = '';
        for ($i = 0; $i < 40; ++$i) {
            $r = rand(0, 39);
            $res = $res.$abc[$r];
        }

        return $res;
    }

    /**
     * @return mixed
     */
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return json_encode($this->attributes);
    }
}

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
