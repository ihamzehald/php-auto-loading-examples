<?php

require_once 'vendor/autoload.php';

/**
 * @author Hamza Al Darawsheh <ihamzehald@gmail.com>
 * PSR-0 autoloader example
 */

use PALE\PSRZeroExample\Core\ExampleClassOne;
use PALE\PSRZeroExample\Core\ExampleClassTwo;

$exampleObjOne = new ExampleClassOne();
$exampleObjTwo = new ExampleClassTwo();

echo $exampleObjOne->getExampleData();
echo $exampleObjTwo->getExampleData();
