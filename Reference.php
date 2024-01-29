<?php

//Reference is variable access where the variable was the same as a differently-named variable
//When the reference's value is changed, tha original variable's value will also change

//Assign by reference
//PHP reference made it possible for the creation of many variables to the same value

$name = "Hideyuki";

$otherName = &$name;
$otherName = "Kawakami";

echo $name . PHP_EOL;

//Pass by reference
//Sending data to a function with references

function decrement(int &$value){
    $value--;
}

$counter = 1000;
decrement($counter);
echo $counter . PHP_EOL;

//Returning references
//Returning a reference to a function
//This feature can be confusion unless used with a reason
function &getVal(){
    static $value = 100;
    return $value;
}

$x = &getVal();
$x = 100;
$y = &getVal();
echo $y . PHP_EOL;