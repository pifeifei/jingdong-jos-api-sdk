<?php

namespace ACES\Request;


class MfaUserUnifiedAuthenticationRequest
{
    private $apiParas = array();
    private $version;
    private $returnUrl;
    private $deviceOSType;
    private $appId;
    private $businessType;
    private $eid;
    private $openUDID;
    private $source;
    private $deviceName;
    private $email;
    private $deviceOSVersion;
    private $pin;
    private $appVersion;
    private $loginChannel;
    private $authType;
    private $clientIp;
    private $uuid;
    private $mobile;

    public function getApiMethodName()
    {
        return "jingdong.mfa.userUnifiedAuthentication";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        $this->apiParas["returnUrl"] = $returnUrl;
    }

    public function getDeviceOSType()
    {
        return $this->deviceOSType;
    }

    public function setDeviceOSType($deviceOSType)
    {
        $this->deviceOSType = $deviceOSType;
        $this->apiParas["deviceOSType"] = $deviceOSType;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    public function setAppId($appId)
    {
        $this->appId = $appId;
        $this->apiParas["appId"] = $appId;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
        $this->apiParas["businessType"] = $businessType;
    }

    public function getEid()
    {
        return $this->eid;
    }

    public function setEid($eid)
    {
        $this->eid = $eid;
        $this->apiParas["eid"] = $eid;
    }

    public function getOpenUDID()
    {
        return $this->openUDID;
    }

    public function setOpenUDID($openUDID)
    {
        $this->openUDID = $openUDID;
        $this->apiParas["openUDID"] = $openUDID;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
        $this->apiParas["source"] = $source;
    }

    public function getDeviceName()
    {
        return $this->deviceName;
    }

    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        $this->apiParas["deviceName"] = $deviceName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        $this->apiParas["email"] = $email;
    }

    public function getDeviceOSVersion()
    {
        return $this->deviceOSVersion;
    }

    public function setDeviceOSVersion($deviceOSVersion)
    {
        $this->deviceOSVersion = $deviceOSVersion;
        $this->apiParas["deviceOSVersion"] = $deviceOSVersion;
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
        $this->apiParas["pin"] = $pin;
    }

    public function getAppVersion()
    {
        return $this->appVersion;
    }

    public function setAppVersion($appVersion)
    {
        $this->appVersion = $appVersion;
        $this->apiParas["appVersion"] = $appVersion;
    }

    public function getLoginChannel()
    {
        return $this->loginChannel;
    }

    public function setLoginChannel($loginChannel)
    {
        $this->loginChannel = $loginChannel;
        $this->apiParas["loginChannel"] = $loginChannel;
    }

    public function getAuthType()
    {
        return $this->authType;
    }

    public function setAuthType($authType)
    {
        $this->authType = $authType;
        $this->apiParas["authType"] = $authType;
    }

    public function getClientIp()
    {
        return $this->clientIp;
    }

    public function setClientIp($clientIp)
    {
        $this->clientIp = $clientIp;
        $this->apiParas["clientIp"] = $clientIp;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->apiParas["uuid"] = $uuid;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        $this->apiParas["mobile"] = $mobile;
    }
}
