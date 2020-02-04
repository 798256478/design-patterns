<?php
namespace Multion;

abstract class Multion
{
    private static $instances = array();

    public static function getInstance()
    {
        $key = get_called_class() . serialize(func_get_args());
        if(!isset(self::$instances[$key])){
            $rc = new \ReflectionClass(get_called_class());
            self::$instances[$key] = $rc->newInstanceArgs(func_get_args());
        }
        return self::$instances[$key];
    }
}