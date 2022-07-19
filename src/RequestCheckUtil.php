<?php

namespace ACES;


use ACES\Exceptions\JingdongException;

/**
 * API入参静态检查类
 * 可以对API的参数类型、长度、最大值等进行校验
 */
class RequestCheckUtil
{
    /**
     * 校验字段 fieldName 的值$value非空
     *
     * @param array|int|bool|string|float|null $value
     * @throws JingdongException
     */
    public static function checkNotNull($value, string $fieldName): void
    {
        if (is_null($value)) {
            throw new JingdongException("client-check-error:Missing Required Arguments: " . $fieldName, [], null, 40);
        }
    }

    /**
     * 检验字段fieldName的值value 的长度
     *
     * @throws JingdongException
     */
    public static function checkMaxLength(?string $value, int $maxLength, string $fieldName): void
    {
        if (!self::checkEmpty($value) && mb_strlen($value, "UTF-8") > $maxLength) {
            throw new JingdongException(
                "client-check-error:Invalid Arguments:the length of ".$fieldName." can not be larger than ".$maxLength.".",
                [],
                null,
                41
            );
        }
    }

    /**
     * 校验 $value 是否非空
     *  if not set ,return true;
     *    if is null , return true;
     *
     * @param mixed $value
     * @return bool
     */
    public static function checkEmpty($value): bool
    {
        if (!isset($value)) {
            return true;
        }

        if (empty($value)) {
            return true;
        }

        return false;
    }

    /**
     * 检验字段fieldName的值value的最大列表长度
     *
     * @param mixed $value
     * @throws JingdongException
     */
    public static function checkMaxListSize($value, $maxSize, string $fieldName)
    {
        if (self::checkEmpty($value)) {
            return;
        }

        $list = preg_split("/,/", $value);
        if (count($list) > $maxSize) {
            throw new JingdongException(
                "client-check-error:Invalid Arguments:the listsize(the string split by \",\") of ".$fieldName." must be less than ".$maxSize." .",
                [],
                null,
                41
            );
        }
    }

    /**
     * 检验字段fieldName的值value 的最大值
     *
     * @param mixed $value
     * @throws JingdongException
     */
    public static function checkMaxValue($value, int $maxValue, string $fieldName)
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value > $maxValue) {
            throw new JingdongException(
                "client-check-error:Invalid Arguments:the value of ".$fieldName." can not be larger than ".$maxValue." .",
                [],
                null,
                41
            );
        }
    }

    /**
     * 检验字段fieldName的值value是否是number
     *
     * @param mixed $value
     * @throws JingdongException
     */
    protected static function checkNumeric($value, string $fieldName)
    {
        if (!is_numeric($value)) {
            throw new JingdongException(
                "client-check-error:Invalid Arguments:the value of ".$fieldName." is not number : ".$value." .", [], null, 41
            );
        }
    }

    /**
     * 检验字段fieldName的值value 的最小值
     *
     * @param mixed $value
     * @throws JingdongException
     */
    public static function checkMinValue($value, int $minValue, string $fieldName)
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value < $minValue) {
            throw new JingdongException(
                "client-check-error:Invalid Arguments:the value of ".$fieldName." can not be less than ".$minValue." .",
                [],
                null,
                41
            );
        }
    }
}
