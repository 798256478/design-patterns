<?php
spl_autoload_register(function ($className){
    $className = str_replace("\\", "/", $className);
    include $className . ".class.php";
});

use Command\Invoker;
use Command\Receiver;
use Command\HelloCommand;

$invoker = new Invoker();
$receiver = new Receiver();

$invoker->setCommand(new HelloCommand($receiver));

$invoker->run();