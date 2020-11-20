<?php
require_once 'vendor/autoload.php';

/**
 * @author Hamza Al Darawsheh <ihamzehald@gmail.com>
 * Class autoloader example
 */

$exampleObjOne = new ExampleClassOne();
$exampleObjTwo = new ExampleClassTwo();

echo $exampleObjOne->getExampleData();
echo $exampleObjTwo->getExampleData();
