<?php

namespace ACES\Core;

use ACES\Common\Constants;
use ACES\Common\Domain\JosBaseInfo;
use ACES\Common\Domain\JosBaseResponse;
use ACES\Common\Domain\JosVoucherInfoGetRequest;
use ACES\Common\Domain\JosVoucherInfoGetResponse;
use ACES\Common\Exception\JosGwException;
use ACES\Common\Exception\VoucherInfoGetException;
use ACES\Common\HttpsClient;
use ACES\Common\Token;
use Exception;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

if (!defined('LOGCONSOLE')) {
    define('LOGCONSOLE', __DIR__.'/../../../tde.log');
}
if (!defined('LOGLEVEL')) {
    define('LOGLEVEL', Logger::DEBUG);
}

/**
 * @removed 1.0
 * @deprecated 0.1 不明作用
 */
class VoucherClient
{
    private $log;

    /**
     * @var Token
     */
    private $voucher;
    private $voucherStr;
    private $josBaseInfo;

    /**
     * VoucherClient constructor.
     *
     * @param JosBaseInfo $josBaseInfo
     */
    public function __construct($josBaseInfo)
    {
        // confige log
        $this->log = new Logger('kmclient');
        $formatter = new LineFormatter("[%datetime%] %channel%.%level_name%: %message%\r\n");
        $handle = new StreamHandler(LOGCONSOLE, LOGLEVEL);
        $handle->setFormatter($formatter);
        $this->log->pushHandler($handle);

        $this->josBaseInfo = $josBaseInfo;
    }

    /**
     * @throws \ACES\Common\Exception\InvalidTokenException
     * @throws \ACES\Common\Exception\MalformedException
     *
     * @return Token
     */
    public function requestVoucher()
    {
        $voucherBase64Json = $this->requestVoucherString();
        $voucherJson = base64_decode($voucherBase64Json);
        $this->voucher = Token::parseFromString($voucherJson, true);

        return $this->voucher;
    }

    public function requestVoucherString()
    {
        $requestUrl = $this->josBaseInfo->getServerUrl().'/routerjson';
        $josVoucherInfoGetRequest = new JosVoucherInfoGetRequest($this->josBaseInfo->getAccessToken());
        $payload = $josVoucherInfoGetRequest->toFormParams($this->josBaseInfo);
        $this->log->info('voucher request url -> '.$requestUrl.', payload -> '.json_encode($payload));
        $jsonResponse = HttpsClient::postForm($requestUrl, $payload);
        $response = JosBaseResponse::parse($jsonResponse, new JosVoucherInfoGetResponse());

        if (!$response) {
            throw new Exception('request jos error, while request voucher');
        }
        if (0 !== $response->getCode()) {
            throw new JosGwException('request jos error, while request voucher, code='.$response->getCode().', message='.$response->getEnDesc());
        }
        $voucherResponse = $response->getResponse();
        if (!$voucherResponse) {
            throw new VoucherInfoGetException('request voucher failed');
        }
        if ('0' !== $voucherResponse->getErrorCode()) {
            throw new VoucherInfoGetException('request voucher failed, code='.$voucherResponse->getErrorCode().', message='.$voucherResponse->getErrorMsg());
        }
        $voucherBase64Json = $voucherResponse->getData()->getVoucher();
        $this->log->info('request voucher success, voucher='.$voucherBase64Json);
        $this->voucherStr = $voucherBase64Json;

        return $voucherBase64Json;
    }

    /**
     * @return Token
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * @return bool
     */
    public function checkEffective()
    {
        return $this->voucher->check_effective();
    }

    /**
     * @return int
     */
    public function checkExpired()
    {
        return $this->voucher->check_expired(Constants::TOKEN_EXP_DELTA);
    }

    /**
     * @return string
     */
    public function getTid()
    {
        return null == $this->getVoucher() ? 'Unknown TID' : $this->getVoucher()->get_id();
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return null == $this->getVoucher() ? 'Unknown Service' : $this->getVoucher()->get_service_name();
    }

    /**
     * @return string
     */
    public function getOriginType()
    {
        return null == $this->getVoucher() ? 'Unknown OriginType' : $this->getVoucher()->get_service_name();
    }

    /**
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->getVoucher()->getEffectiveDate();
    }

    /**
     * @return string
     */
    public function getExpiredDate()
    {
        return $this->getVoucher()->getExpiredDate();
    }
}
