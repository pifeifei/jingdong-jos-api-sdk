<?php

namespace ACES\Common;

use ACES\Common\Domain\JosBaseInfo;

/**
 * @removed 1.0
 * @deprecated 0.1 不明作用
 */
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
     * @param string $accessToken
     * @param string $serverUrl
     * @param BasicMessage $messages
     */
    public function __construct(string $accessToken, string $serverUrl, BasicMessage $messages)
    {
        // 区分accessToken和customerUserId
        if (0 === stripos($accessToken, '_')) {
            $split = explode('_', $accessToken);
            $this->customerUserId = $split[1];
        } else {
            $this->accessToken = $accessToken;
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
