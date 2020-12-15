<?php require __DIR__."/../vendor/autoload.php";

use fcapobianchi\HelloWorld\Index;

$var = new Index();

echo $var->greet()."\n";