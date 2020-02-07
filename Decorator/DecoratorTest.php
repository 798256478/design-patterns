<?php
spl_autoload_register(function ($className){
   $className = str_replace("\\", "/", $className);
   include $className . ".class.php";
});

use Decorator\Circle;
use Decorator\RedShape;

$circle = new Circle();
$circle->draw();

$redCircle = new RedShape($circle);
$redCircle->draw();