<?php

use SOLID\OpenClosedPrinciple\adherence\Example1\ElectronicsShipping;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR."autoload.php";
//use SOLID\OpenClosedPrinciple\Violation\Product;
//use SOLID\OpenClosedPrinciple\adherence\Product;

$product = new \SOLID\OpenClosedPrinciple\adherence\Example1\Product();
$product->setPrice(100);
$electronics = new ElectronicsShipping();
echo $product->calculateShipping($electronics);

