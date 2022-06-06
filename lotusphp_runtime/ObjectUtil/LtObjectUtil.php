<?php

namespace ARS\Lotus\ObjectUtil;

class LtObjectUtil
{
    static $instances;

    public static function singleton($className, $autoInited = true)
    {
        if (empty($className)) {
            trigger_error('empty class name');
            return false;
        }
        $key = strtolower($className);
        if (isset(self::$instances[$key])) {
            return self::$instances[$key];
        } elseif (class_exists($className)) {
            $newInstance = new $className();
            if ($autoInited && method_exists($newInstance, 'init')) {
                $newInstance->init();
            }
            self::$instances[$key] = $newInstance;
            return $newInstance;
        } else {
            return false;
        }
    }
}
