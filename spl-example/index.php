<?php
require_once('autoloader.php');

$exampleObjOne = new ExampleClassOne();
$exampleObjTwo = new ExampleClassTwo();

echo $exampleObjOne->getExampleData();
echo $exampleObjTwo->getExampleData();
