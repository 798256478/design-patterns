<?php
spl_autoload_register(function ($className){
   $className = str_replace("\\", "/", $className);
   include $className . ".class.php";
});

use Singleton\Singleton;

$instance = Singleton::getInstance();
$instance1 = Singleton::getInstance();

echo $instance === $instance1 ? "单例" : "非单例";