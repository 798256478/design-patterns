<?php

spl_autoload_register(function ($className){
    $className = str_replace('\\','/',$className);
    include $className.".class.php";
});

use AbstractFactory\HtmlFactory;
use AbstractFactory\JsonFactory;

$htmlFactory = new HtmlFactory();
$htmlTextResult = $htmlFactory->createText('抽象工厂')->render();
$htmlPictureResult = $htmlFactory->createPicture('test.png', '抽象工厂')->render();

$jsonFactory = new JsonFactory();
$jsonTextResult = $jsonFactory->createText("抽象工厂")->render();
$jsonPictureResult = $jsonFactory->createPicture('test.png', '抽象工厂')->render();

echo $htmlTextResult . "\n";
echo $htmlPictureResult . "\n";
echo $jsonTextResult . "\n";
echo $jsonPictureResult . "\n";