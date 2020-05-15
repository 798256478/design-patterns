<?php
spl_autoload_register(function ($className){
    $className = str_replace("\\", "/", $className);
    include $className . ".class.php";
});

use Strategy\IdComparator;
use Strategy\DateComparator;
use Strategy\Context;

$a = array(
    'id' => 1,
    'date' => '2020-05-12'
);

$b = array(
    'id' => 1,
    'date' => '2020-05-13'
);

$strategy = new Context(new IdComparator());
echo $strategy->getCompare($a, $b);
echo "\n";
$strategy = new Context(new DateComparator());
echo $strategy->getCompare($a, $b);
echo "\n";
