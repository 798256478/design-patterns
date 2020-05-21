<?php
spl_autoload_register(function ($className){
    $className = str_replace('\\', '/', $className);
    include $className.".class.php";
});

use DependencyInjection\ArrayConfig;
use DependencyInjection\Connection;

$source = array('host' => 'github.com');
$config = new ArrayConfig($source);

$connection = new Connection($config);
$connection->connect();

echo $connection->getHost();
echo "\n";
