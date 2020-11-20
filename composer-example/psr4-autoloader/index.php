<?php

require 'vendor/autoload.php';

use PALE\PSRFourExample\Core\ExampleClassOne;
use PALE\PSRFourExample\Core\ExampleClassTwo;

/**
 * @author Hamza Al Darawsheh <ihamzehald@gmail.com>
 * PSR-0 autoloader example
 */

$exampleObjOne = new ExampleClassOne();
$exampleObjTwo = new ExampleClassTwo();

echo $exampleObjOne->getExampleData();
echo $exampleObjTwo->getExampleData();

