<?php

namespace ACES\Common;

use ACES\Common\Exception\InsufficientSaltLengException;
use ACES\Common\Exception\ArgumentNullException;

class IndexCalculator
{
    public static function sha256Index($pt, $salt)
    {
        if ($pt == null) {
            throw new ArgumentNullException("Input is null for sha256Index function.");
        } elseif ($salt != null && strlen($salt) >= 16) {
            $data = $pt . $salt;
            $md = hash("sha256", $data, true);
            return $md;
        } else {
            throw new InsufficientSaltLengException("Salt length is too short.");
        }
    }
}
