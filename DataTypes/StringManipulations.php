<?php

//Dot operator = operator to add strings with other data of other data types
$name = "Emi Aobe";

echo "Name: " . $name . PHP_EOL;
echo "Age: " . 26 . "\n";

//Conversion to numbers and vice-versa
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

//Accessing characters
$name = "Emi";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

//Variable parsing
$name = "Howard";
echo "Hello $name, you are a mazakon" . PHP_EOL;

//Curly braces
$var = "var";
echo "This is {$var}s" . PHP_EOL;