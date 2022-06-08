<?php

namespace ACES\Request;

class MfaUserUnifiedAuthenticationRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.mfa.userUnifiedAuthentication';
    }

    public function check()
    {
    }

    public function getReturnUrl()
    {
        return $this->apiParas['returnUrl'];
    }

    public function setReturnUrl($returnUrl)
    {
        $this->apiParas['returnUrl'] = $returnUrl;

        return $this;
    }

    public function getDeviceOSType()
    {
        return $this->apiParas['deviceOSType'];
    }

    public function setDeviceOSType($deviceOSType)
    {
        $this->apiParas['deviceOSType'] = $deviceOSType;

        return $this;
    }

    public function getAppId()
    {
        return $this->apiParas['appId'];
    }

    public function setAppId($appId)
    {
        $this->apiParas['appId'] = $appId;

        return $this;
    }

    public function getBusinessType()
    {
        return $this->apiParas['businessType'];
    }

    public function setBusinessType($businessType)
    {
        $this->apiParas['businessType'] = $businessType;

        return $this;
    }

    public function getEid()
    {
        return $this->apiParas['eid'];
    }

    public function setEid($eid)
    {
        $this->apiParas['eid'] = $eid;

        return $this;
    }

    public function getOpenUDID()
    {
        return $this->apiParas['openUDID'];
    }

    public function setOpenUDID($openUDID)
    {
        $this->apiParas['openUDID'] = $openUDID;

        return $this;
    }

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }

    public function getDeviceName()
    {
        return $this->apiParas['deviceName'];
    }

    public function setDeviceName($deviceName)
    {
        $this->apiParas['deviceName'] = $deviceName;

        return $this;
    }

    public function getEmail()
    {
        return $this->apiParas['email'];
    }

    public function setEmail($email)
    {
        $this->apiParas['email'] = $email;

        return $this;
    }

    public function getDeviceOSVersion()
    {
        return $this->apiParas['deviceOSVersion'];
    }

    public function setDeviceOSVersion($deviceOSVersion)
    {
        $this->apiParas['deviceOSVersion'] = $deviceOSVersion;

        return $this;
    }

    public function getPin()
    {
        return $this->apiParas['pin'];
    }

    public function setPin($pin)
    {
        $this->apiParas['pin'] = $pin;

        return $this;
    }

    public function getAppVersion()
    {
        return $this->apiParas['appVersion'];
    }

    public function setAppVersion($appVersion)
    {
        $this->apiParas['appVersion'] = $appVersion;

        return $this;
    }

    public function getLoginChannel()
    {
        return $this->apiParas['loginChannel'];
    }

    public function setLoginChannel($loginChannel)
    {
        $this->apiParas['loginChannel'] = $loginChannel;

        return $this;
    }

    public function getAuthType()
    {
        return $this->apiParas['authType'];
    }

    public function setAuthType($authType)
    {
        $this->apiParas['authType'] = $authType;

        return $this;
    }

    public function getClientIp()
    {
        return $this->apiParas['clientIp'];
    }

    public function setClientIp($clientIp)
    {
        $this->apiParas['clientIp'] = $clientIp;

        return $this;
    }

    public function getUuid()
    {
        return $this->apiParas['uuid'];
    }

    public function setUuid($uuid)
    {
        $this->apiParas['uuid'] = $uuid;

        return $this;
    }

    public function getMobile()
    {
        return $this->apiParas['mobile'];
    }

    public function setMobile($mobile)
    {
        $this->apiParas['mobile'] = $mobile;

        return $this;
    }
}
