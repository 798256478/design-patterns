<?php
spl_autoload_register(function ($className){
    $className = str_replace("\\", "/", $className);
    include $className . ".class.php";
});

use Composite\Company;
use Composite\HumanResources;
use Composite\Commerce;

$company = new Company("公司");
$human = new HumanResources("人力资源部");
$commerce = new Commerce("商务部");

$company->add($human);
$company->add($commerce);

$company1 = new Company("分公司1");
$company1->add($human);
$company1->add($commerce);
$company->add($company1);

$company2 = new Company("分公司2");
$company2->add($human);
$company2->add($commerce);
$company->add($company2);

$company->show();
echo "\n\n";
$company->work();