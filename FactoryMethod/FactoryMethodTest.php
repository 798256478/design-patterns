<?php
spl_autoload_register(function ($className){
   $className = str_replace('\\', '/', $className);
    include $className.".class.php";
});

use FactoryMethod\GermanFactory;
use FactoryMethod\ItalianFactory;

$germanFactory = new GermanFactory();
$italianFactory = new ItalianFactory();

$germanResult1 = $germanFactory->create(\FactoryMethod\FactoryMethod::CHEAP);
$germanResult2 = $germanFactory->create(\FactoryMethod\FactoryMethod::FAST);
$italianResult1 = $italianFactory->create(\FactoryMethod\FactoryMethod::CHEAP);
$italianResult2 = $italianFactory->create(\FactoryMethod\FactoryMethod::FAST);

echo $germanResult1 . "\n";
echo $germanResult2 . "\n";
echo $italianResult1 . "\n";
echo $italianResult2 . "\n";