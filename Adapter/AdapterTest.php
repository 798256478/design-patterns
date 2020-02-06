<?php
spl_autoload_register(function ($className){
    $className = str_replace("\\", "/", $className);
    include $className . ".class.php";
});

use Adapter\EBookAdapter;
use Adapter\Kindle;
use Adapter\Book;

$book = new Book();
$book->open();
$book->turnPage();

$adapter = new EBookAdapter(new Kindle());
$adapter->open();
$adapter->turnPage();