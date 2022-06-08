<?php

namespace ACES\Common;

use ACES\Common\Exception\DecryptException;
use ACES\Common\Exception\EncryptExceptoin;

/**
 * Key Encryption Class.
 *
 * <P>
 *
 * @version 1.0
 */
class KeyEncryption
{
    public const RANDOM_SIZE = 16;
    public const ZERO_IV = "\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00";

    public static function encrypt($mkey, $pt)
    {
        $rsec = Crypto::secureRandom(self::RANDOM_SIZE);
        $iv = str_pad($rsec, Crypto::CIPHER_IV_SIZE, "\x00");

        $ct_data = openssl_encrypt($pt, Crypto::CIPHER_METHOD_AES_128_CBC, $mkey->getKey(), OPENSSL_RAW_DATA, $iv);
        if (false === $ct_data) {
            throw new EncryptExceptoin('Key encryption error. Cipher method: '.Crypto::CIPHER_METHOD_AES_128_CBC);
        }

        return $rsec.$ct_data;
    }

    public static function decrypt($mkey, $ct)
    {
        $rsec = substr($ct, 0, self::RANDOM_SIZE);
        $ct_data = substr($ct, self::RANDOM_SIZE, strlen($ct) - self::RANDOM_SIZE);
        $iv = str_pad($rsec, Crypto::CIPHER_IV_SIZE, "\x00");

        $pt = openssl_decrypt($ct_data, Crypto::CIPHER_METHOD_AES_128_CBC, $mkey->getKey(), OPENSSL_RAW_DATA, $iv);

        if (false === $pt) {
            throw new DecryptException('Key decryption error. Cipher method: '.Crypto::CIPHER_METHOD_AES_128_CBC);
        }

        return $pt;
    }

    public static function wrap($mkey, $dkey)
    {
        $ct = openssl_encrypt(
            $dkey,
            Crypto::CIPHER_METHOD_AES_128_CBC,
            $mkey->getKey(),
            OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING,
            self::ZERO_IV
        );
        if (false === $ct) {
            throw new EncryptExceptoin('Key encryption error. Cipher method: '.Crypto::CIPHER_METHOD_AES_128_CBC);
        }

        return $ct;
    }

    public static function unwrap($mkey, $ct)
    {
        $pt = openssl_decrypt(
            $ct,
            Crypto::CIPHER_METHOD_AES_128_CBC,
            $mkey->getKey(),
            OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING,
            self::ZERO_IV
        );
        if (false === $pt) {
            throw new DecryptException('Key decryption error, Cipher method: '.Crypto::CIPHER_METHOD_AES_128_CBC);
        }

        return $pt;
    }
}
