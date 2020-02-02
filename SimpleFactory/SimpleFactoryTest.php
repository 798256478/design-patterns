<?php
/*
 * 用于测试简单工厂模式
 */

spl_autoload_register(function ($className){
    $className = str_replace('\\','/',$className);
    include $className . ".class.php";
});

use SimpleFactory\ShapeFactory;

$shapeFactory = new ShapeFactory(ShapeFactory::SQUARE);
$shape = $shapeFactory->getShape();

$result = $shape->draw();

echo $result;