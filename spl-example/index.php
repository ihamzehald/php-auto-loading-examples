<?php

require_once('autoloader.php');

/**
 * @author Hamza Al Darawsheh <ihamzehald@gmail.com>
 * Custom autoloader using spl_autoload_register
 */

$exampleObjOne = new ExampleClassOne();
$exampleObjTwo = new ExampleClassTwo();

echo $exampleObjOne->getExampleData();
echo $exampleObjTwo->getExampleData();
