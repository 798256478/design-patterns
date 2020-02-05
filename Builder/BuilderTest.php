<?php
spl_autoload_register(function ($className){
   $className = str_replace("\\", "/", $className);
   include $className . ".class.php";
});

use Builder\Director;
use Builder\BikeBuilder;
use Builder\CarBuilder;

$director = new Director();
$bike = $director->build(new BikeBuilder());
$car = $director->build(new CarBuilder());

var_dump($bike);
var_dump($car);