<?php
namespace Register;

class Register
{
    public static $objects;

    public static function set($alias, $onject)
    {
        self::$objects[$alias] = $onject;
    }

    public static function get($alias)
    {
        if(isset(self::$objects[$alias])){
            return self::$objects[$alias];
        }else{
            echo '对象不存在';
        }
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}