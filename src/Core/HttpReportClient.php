<?php

namespace ACES\Core;

use ACES\Common\Domain\JosBaseInfo;
use ACES\Common\Domain\JosBaseResponse;
use ACES\Common\Domain\TimeRecorder;
use ACES\Common\HttpsClient;
use ACES\Common\ProduceRequest;
use ACES\Common\ProduceResponse;
use ACES\TDEClient;
use Exception;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

if (!defined('LOGCONSOLE')) {
    define('LOGCONSOLE', __DIR__.'/../../../tde.log');
}
if (!defined('LOGLEVEL')) {
    define('LOGLEVEL', Logger::ERROR);
}

/**
 * @removed 1.0
 * @deprecated 0.1 不明作用
 */
class HttpReportClient
{
    private static $DEFAULT_EPOCH = 600;

    private $reports;               // array of exception, exception name => report.
    private $tdeClient;             // TDEClient instance

    private $log;
//    private $mapper;    // jsonmapper

    private $timeRecorder;

    /**
     * @var JosBaseInfo
     */
    public function __construct(TDEClient $tde)
    {
        $this->reports = [];
        $this->tdeClient = $tde;

        // confige log
        $this->log = new Logger('httpReport');
        $formatter = new LineFormatter("[%datetime%] %channel%.%level_name%: %message%\r\n");
        $handle = new StreamHandler(LOGCONSOLE, LOGLEVEL);
        $handle->setFormatter($formatter);
        $this->log->pushHandler($handle);

//        $this->mapper = new JsonMapper();
        if (TDEClient::getClientCache() && TDEClient::getClientCache()->cacheable()) {
            $this->timeRecorder = new TimeRecorder(self::$DEFAULT_EPOCH);
        } else {
            $this->timeRecorder = new TimeRecorder(0);
        }
    }

    public function insertInitReport()
    {
        $req = ProduceRequest::getInitRequest($this->tdeClient->getJosBaseInfo()->getAccessToken(), $this->tdeClient->getJosBaseInfo()->getServerUrl(), $this->getServiceId(), $this->getTokenId());
        $josReq = $req->toFormParams($this->tdeClient->getJosBaseInfo());
        $this->log->info('Add init report: '.json_encode($josReq));
//        $this->reports[MSG_TYPE::INIT] = json_encode($josReq);
        $this->reports[MSG_TYPE::INIT] = $josReq;
        $this->sendAllReports();
    }

    public function insertStatReport($statType)
    {
        if (null !== $this->tdeClient) {
//            $stat = $this->tdeClient->getStatistics();
//            ++ $stat[StatisticType::type($statType)];
            $this->tdeClient->stat($statType);
        }
        $this->sendAllReports();
    }

    public function insertEventReport($event_code, $eventDetail)
    {
        $req = ProduceRequest::getEventRequest($this->tdeClient->getJosBaseInfo()->getAccessToken(), $this->tdeClient->getJosBaseInfo()->getServerUrl(), $this->getServiceId(), $this->getTokenId(), $event_code, $eventDetail);
        $josReq = $req->toFormParams($this->tdeClient->getJosBaseInfo());
        $this->log->info('Add event report: '.json_encode($josReq));
        // send event right away
        $this->sendReport($josReq);
    }

    public function insertKeyUpdateEventReport($event_code, $eventDetail, $major_key_ver, $keylist)
    {
        $req = ProduceRequest::getKPEventRequest($this->tdeClient->getJosBaseInfo()->getAccessToken(), $this->tdeClient->getJosBaseInfo()->getServerUrl(), $this->getServiceId(), $this->getTokenId(), $event_code, $eventDetail, $major_key_ver, $keylist);
        $josReq = $req->toFormParams($this->tdeClient->getJosBaseInfo());
        $this->log->info('Add keyupdate event report: '.json_encode($josReq));
        // send event right away
        $this->sendReport($josReq);
    }

    public function insertErrReport($errcode, $detail, $stacktrace, $level)
    {
        $detailLocal = null == $detail ? '' : $detail;

        $req = ProduceRequest::getErrorRequest($this->tdeClient->getJosBaseInfo()->getAccessToken(), $this->tdeClient->getJosBaseInfo()->getServerUrl(), $this->getServiceId(), $this->getTokenId(), $level, $errcode, $detailLocal, $stacktrace);
        $josReq = $req->toFormParams($this->tdeClient->getJosBaseInfo());
        $this->log->info('Add error report: '.json_encode($josReq));

        if (MSG_LEVEL::ERROR === $level || MSG_LEVEL::SEVER === $level) {
            // send event right away
            $this->log->info('Send urgent messages.');
            $this->sendReport($josReq);
        } else {
            // buffer it
            $this->reports[$errcode] = $josReq;
            $this->sendAllReports();
        }
    }

    // FIXME 并发问题
    private function sendReport($report)
    {
        $ret = false;

        try {
            $this->log->info('http Request: '.json_encode($report));
            $serverUrl = 'https://api.jd.com/routerjson';
            // TODO
            $param = $report;
            $response = HttpsClient::postForm($serverUrl, $param);
            $this->log->info('sendReport Response: '.$response);
            $resObj = JosBaseResponse::parse($response, new ProduceResponse());
            if (
                null !== $resObj && 0 === $resObj->getCode()
                && null !== $resObj->getResponse() && 0 === $resObj->getResponse()->getErrorCode()
            ) {
                $this->log->info('report reply: '.$resObj->getResponse()->getErrorMsg());
                $ret = true;
            } else {
                if (null === $resObj) {
                    $this->log->critical('request jos failed');
                } elseif (0 !== $resObj->getCode()) {
                    $this->log->critical('request jos failed, errorMsg: '.$resObj->getEnDesc());
                } elseif (null === $resObj->getResponse()) {
                    $this->log->critical('report log failed');
                } else {
                    $this->log->critical('report log failed, errorMsg: '.$resObj->getResponse()->getErrorMsg());
                }
            }
        } catch (Exception $e) {
            $this->log->critical($e->getMessage());
        }

        return $ret;
    }

    // FIXME 并发问题
    private function sendAllReports()
    {
        if (!$this->timeRecorder->timeout()) {
            TDEClient::getClientCache()->set($this->tdeClient->getJosBaseInfo()->getAccessToken(), $this->tdeClient);

            return;
        }
        $this->insertStatisticReport();
        $toReport = $this->reports;
        $this->log->info('------->'.json_encode($toReport));
        $this->reports = [];
        TDEClient::getClientCache()->set($this->tdeClient->getJosBaseInfo()->getAccessToken(), $this->tdeClient);
        $keys = array_keys($toReport);
        foreach ($keys as $key) {
            if ($this->sendReport($toReport[$key])) {
                unset($toReport[$key]);
            }
        }
        if (0 == sizeof($toReport)) {
            $this->log->info('reporter flushed all messages.');
        } else {
            $this->log->info('reporter buffered '.sizeof($toReport).' messages in queue.');
        }
    }

    private function insertStatisticReport()
    {
        $stat = null;
        if (null !== $this->tdeClient) {
            $stat = $this->tdeClient->getStatistics(true);
        }

        $req = ProduceRequest::getStatisticRequest($this->tdeClient->getJosBaseInfo()->getAccessToken(), $this->tdeClient->getJosBaseInfo()->getServerUrl(), $this->getServiceId(), $this->getTokenId(), $stat);
        $josReq = $req->toFormParams($this->tdeClient->getJosBaseInfo());
        $this->log->info('Add statistic report: '.json_encode($josReq));
//        $this->reports[MSG_TYPE::STATISTIC] = json_encode($req);
        $this->reports[MSG_TYPE::STATISTIC] = $josReq;
    }

    private function getServiceId()
    {
        if (null !== $this->tdeClient) {
            return $this->tdeClient->getServiceIdentifier();
        }

        return 'Unknown Service';
    }

    private function getTokenId()
    {
        if (null !== $this->tdeClient) {
            return $this->tdeClient->getTokenIdentifier();
        }

        return 'Unknown TID';
    }
}
abstract class MSG_TYPE
{
    public const INIT = 1;
    public const EXCEPTION = 2;
    public const STATISTIC = 3;
    public const EVENT = 4;
}

abstract class MSG_LEVEL
{
    public const INFO = 1;
    public const WARN = 2;
    public const ERROR = 3;
    public const SEVER = 4;
}
