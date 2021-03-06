<?php

namespace ACES\Common;

use ACES\Common\Domain\JosBaseInfo;
use ACES\Common\Domain\JosBaseResponse;
use ACES\Common\Domain\JosVoucherInfoGetRequest;
use ACES\Common\Domain\JosVoucherInfoGetResponse;
use ACES\Common\Exception\InvalidTokenException;
use ACES\Common\Exception\JosGwException;
use ACES\Common\Exception\MalformedException;
use ACES\Common\Exception\VoucherInfoGetException;
use Exception;

/**
 * @removed 1.0
 * @deprecated 0.1 不明作用
 */
class Token
{
    private string $label;           // label, could be create, update, and other types
    private int $effectiveTs;      // token active timestamp, unix time format
    private int $expiredTs;        // token expired timesatmp, unix time format
    private string $id;              // token identifier, encoded in Base64
    private string $key;             // token credential, symmetric key for HMAC
    private string $service = 'Unknown';         // token major service
    private int $stype;              // service type, 0 for IDC, 1 for Beta,
    private bool $isVerify = false; // token is verified or not
    private string $zone = 'CN-0';   // zone field, default value is CN-0 if not assigned

    // used to verify token signature
    private static $scert;  // X509Certificate

    // Utility for TokenCipher/TokenSignature
    private $se;  // Mac
    private $de;  // DataEncryption

    /**
     * Token constructor to initialize itself by given certain fields,
     * including label, identifier, key, service name, effective and
     * expired time stamp, and issue type (stype, online or offline).
     * <p>.
     *
     * @param  string  $label       token label
     * @param  string  $id          token       identifier byte array
     * @param  string  $key         token      symmetric key byte array
     * @param  int  $effectiveTs token effective timestamp
     * @param  int  $expiredTs   token expired timestamp
     * @param  int  $stype       operation type
     * @param  string  $service     token major service name (for encryption)
     * @param  string  $zone
     */
    private function __construct(
        string $label,
        string $id,
        string $key,
        int $effectiveTs,
        int $expiredTs,
        int $stype,
        string $service,
        string $zone
    ) {
        $this->label = $label;
        $this->effectiveTs = $effectiveTs;
        $this->expiredTs = $expiredTs;

        $this->id = $id;
        $this->key = $key;
        $this->service = $service;
        $this->stype = $stype;
        $this->isVerify = true;
        if (null != $zone) {
            $this->zone = $zone;
        }

        $this->de = new DataEncryption($key);
    }

    /* Return Token object from parsing token string
     *
     * @param string    $input
     * @param bool      $isProd
     *
     * @return Token
     */
    public static function parseFromString($input, $isProd)
    {
        // parse token json string
        $json = json_decode($input);

        // get token data sig
        $sigbytes = base64_decode($json->sig, true);

        $d = $json->data;
        $label = $d->act;
        $startTs = $d->effective;
        $endTs = $d->expired;
        $id = $d->id;
        $key = base64_decode($d->key, true);

        $service = $d->service;
        $sType = $d->stype;
        $zone = null;

        // get external structure, new feature
        if (!empty($json->externalData)) {
            $zone = $json->externalData->zone;
        }

        // for dummy check
        if (ORIGIN::BETA == $sType || ORIGIN::DEV == $sType) {
            if ($isProd) {
                throw new MalformedException('token source type does not match the isProd flag.');
            }
        } elseif (ORIGIN::IDC == $sType) {
            if (!$isProd) {
                throw new MalformedException('token source type does not match the isProd flag.');
            }
        }

        // load certificate
        $pemdata = $isProd ? Constants::TMS_PROD_TOKEN_CERT : Constants::TMS_BTEA_TOKEN_CERT;

        $cert = openssl_x509_read($pemdata);
        $pub_key = openssl_get_publickey($cert);
        $data = json_encode($json->data);
        $data = str_replace('\\', '', $data);
        if (!openssl_verify($data, $sigbytes, $pub_key, 'sha256WithRSAEncryption')) {
            throw new InvalidTokenException("Signature validation failed for service {$service}");
        }

        // assign parsing fields back to Token t and return it
        return new Token($label, $id, $key, $startTs, $endTs, $sType, $service, $zone);
    }

    /**
     * Returns Token's identifier in byte array. This identifier is
     * encapsulated in protocol headers while TDE client SDK requests
     * the services from MKS clusters.
     * <p>.
     *
     * @return string the token identifier
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Returns name of Token's major service.
     *
     * @return string major service name
     */
    public function get_service_name()
    {
        return $this->service;
    }

    public function getOriginType()
    {
        return $this->stype;
    }

    /**
     * Check token is effective (active) or not.
     *
     * @return true if token is active; otherwise not
     */
    public function check_effective()
    {
        $cur = round(microtime(true) * 1000) + 8 * 60 * 60 * 1000;  // in millisecond

        return $cur >= $this->effectiveTs;
    }

    public function check_expired($delta)
    {
        $now = round(microtime(true) * 1000);  // in millisecond

        if ($this->expiredTs >= $now) {
            return STATE::VALID;
        }
        if ($this->expiredTs + $delta >= $now) {
            return STATE::EXPIREWARNING;
        }

        return STATE::EXPIRED;
    }

    public function getExpiredDate()
    {
        return date('F j, Y, H:i:s', $this->expiredTs);
    }

    public function getExpiredDateInLong()
    {
        return $this->expiredTs;
    }

    public function getEffectiveDate()
    {
        return date('F j, Y, H:i:s', $this->effectiveTs);
    }

    public function getZone()
    {
        return $this->zone;
    }

    public function getTokenOrigin()
    {
        return ORIGIN::getName($this->stype);
    }

    public function do_sign($input)
    {
        if (!$this->isVerify) {
            throw new InvalidTokenException('Not a verified token.');
        }

        return hash_hmac(Constants::DEFAULT_TOKEN_SIGN_ALGO, $input, $this->key, true);
    }

    public function do_verify($input, $sig)
    {
        if (!$this->isVerify) {
            throw new InvalidTokenException('Not a verified token.');
        }
        $cal_sig = hash_hmac(Constants::DEFAULT_TOKEN_SIGN_ALGO, $input, $this->key, true);

        return $sig == $cal_sig;
    }

    public function do_encrypt($plaintext)
    {
        if (!$this->isVerify) {
            throw new InvalidTokenException('Not a verified token.');
        }

        return $this->de->encrypt($plaintext);
    }

    public function do_decrypt($ciphertext)
    {
        if (!$this->isVerify) {
            throw new InvalidTokenException('Not a verified token.');
        }

        return $this->de->decrypt($ciphertext);
    }

    public function transferToken(Token $from)
    {
        $this->de = $from->de;
        $this->effectiveTs = $from->effectiveTs;
        $this->expiredTs = $from->expiredTs;
        $this->id = $from->id;
        $this->isVerify = $from->isVerify;
        $this->key = $from->key;
        $this->label = $from->label;
        $this->se = $from->se;
        $this->service = $from->service;
        $this->stype = $from->stype;
        $this->zone = $from->zone;
    }

    /**
     * @param JosBaseInfo $josBaseInfo
     *
     * @throws InvalidTokenException
     * @throws JosGwException
     * @throws MalformedException
     * @throws VoucherInfoGetException
     * @throws \JsonMapper_Exception
     *
     * @return Token
     */
    public static function requestJosVoucher($josBaseInfo)
    {
        $voucherBase64Json = Token::requestJosVoucherString($josBaseInfo);
        $voucherJson = base64_decode($voucherBase64Json);

        return Token::parseFromString($voucherJson, true);
    }

    /**
     * @param JosBaseInfo $josBaseInfo
     *
     * @throws JosGwException
     * @throws VoucherInfoGetException
     * @throws \JsonMapper_Exception
     *
     * @return string
     */
    public static function requestJosVoucherString($josBaseInfo)
    {
        $requestUrl = $josBaseInfo->getServerUrl();
        $josVoucherInfoGetRequest = new JosVoucherInfoGetRequest($josBaseInfo->getAccessToken());
        $payload = $josVoucherInfoGetRequest->toFormParams($josBaseInfo);
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

        return $voucherResponse->getData()->getVoucher();
    }
}

abstract class ORIGIN
{
    public const UNDEFINED = 0;
    public const IDC = 1;
    public const BETA = 2;
    public const DEV = 3;

    public static function getName($code)
    {
        switch ($code) {
            case 0:
                return 'UNDEFINED';

            case 1:
                return 'IDC';

            case 2:
                return 'BETA';

            case 3:
                return 'DEV';

            default:
                return 'Unsupported origin code.';
        }
    }
}

// Token status
abstract class STATE
{
    public const VALID = 0;
    public const EXPIREWARNING = 1;
    public const EXPIRED = 2;
}

// Token zone
abstract class ZONE
{
    public const CN_ZONE = 'CN-0';
    public const ID_ZONE = 'ID-1';
    public const TH_ZONE = 'TH-1';
}
