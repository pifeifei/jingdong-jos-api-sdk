<?php

namespace ACES\Common;

use ACES\Common\Exception\ArgumentNullException;
use ACES\Common\Exception\InsufficientSaltLengException;

class IndexCalculator
{
    public static function sha256Index($pt, $salt)
    {
        if (null == $pt) {
            throw new ArgumentNullException('Input is null for sha256Index function.');
        }
        if (null != $salt && strlen($salt) >= 16) {
            $data = $pt.$salt;

            return hash('sha256', $data, true);
        }

        throw new InsufficientSaltLengException('Salt length is too short.');
    }
}
