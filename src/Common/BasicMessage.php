<?php

namespace ACES\Common;

/**
 * @removed 1.0
 * @deprecated 0.1 不明作用
 */
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
