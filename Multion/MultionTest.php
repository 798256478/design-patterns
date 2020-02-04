<?php
spl_autoload_register(function ($className){
   $className = str_replace("\\", "/", $className);
   include $className . ".class.php";
});

use Multion\Mysql;
use Multion\Redis;

$instance1 = Mysql::getInstance(["db" => 'mysql', 'username' => 'test1', 'password' => 'secret']);
$instance2 = Mysql::getInstance(["db" => 'mysql', 'username' => 'test2', 'password' => 'secret']);
$instance3 = Mysql::getInstance(["db" => 'mysql', 'username' => 'test1', 'password' => 'secret']);
$instance4 = Redis::getInstance(["db" => 'Redis', 'username' => 'test4', 'password' => 'secret']);

echo "\n" . ($instance1 === $instance2 ? '相同' : '不同');
echo "\n" . ($instance1 === $instance3 ? '相同' : '不同');
echo "\n" . ($instance1 === $instance4 ? '相同' : '不同');