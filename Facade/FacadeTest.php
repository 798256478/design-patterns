<?php
spl_autoload_register(function ($className){
    $className = str_replace('\\', '/', $className);
    include $className.".class.php";
});

use Facade\Facade;

$facade = new Facade();
$facade->activate();
$facade->deactivate();