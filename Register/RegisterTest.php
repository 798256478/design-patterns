<?php
spl_autoload_register(function ($className){
    $className = str_replace("\\", "/", $className);
    include $className.".class.php";
});

use Register\Test;
use Register\Register;

$test = new Test();
Register::set('t', $test);
Register::get('t')->run();


