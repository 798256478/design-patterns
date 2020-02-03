<?php
spl_autoload_register(function ($className){
    $className = str_replace("\\", "/", $className);
    include $className.".class.php";
});

use Prototype\BarBookPrototype;
use Prototype\FooBookPrototype;

$barBookPrototype = new BarBookPrototype();
$fooBookPrototype = new FooBookPrototype();

$barBookPrototype1 = clone $barBookPrototype;
$fooBookPrototype1 = clone $fooBookPrototype;

$barBookPrototype1->setTitle($barBookPrototype->getCategory()."Book");
$fooBookPrototype1->setTitle($barBookPrototype->getCategory()."Book");

echo $barBookPrototype->getTitle() . "\n";
echo $barBookPrototype->getCategory() . "\n";
echo $fooBookPrototype->getTitle() . "\n";
echo $fooBookPrototype->getCategory() . "\n";
echo $barBookPrototype1->getTitle() . "\n";
echo $barBookPrototype1->getCategory() . "\n";
echo $fooBookPrototype1->getTitle() . "\n";
echo $fooBookPrototype1->getCategory() . "\n";


