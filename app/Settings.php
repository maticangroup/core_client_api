<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 09/08/19
 * Time: 12:17
 */

namespace Matican;


class Settings
{


    private static $instance = null;

    private static $settings = [];

    private static function invoke()
    {
        if (self::$instance instanceof Settings) {
            return self::$instance;
        } else {
            self::$instance = new Settings();
            return self::$instance;
        }
    }

    public static function get($settingKey)
    {
        self::invoke();
        if (isset(self::$settings[$settingKey])) {
            return self::$settings[$settingKey];
        }
        return null;
    }

    public static function set($settingKey, $value)
    {
        self::invoke();
        self::$settings[$settingKey] = $value;
    }


}

