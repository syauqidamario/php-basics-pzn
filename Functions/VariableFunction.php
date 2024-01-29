<?php

//Variable function is the ability to call a function from a value in a variable

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$funcName = "Foo";
$funcName();
$functName = "Bar";
$funcName();

//Variable function implementation
function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello, $finalName" . PHP_EOL;
}

sayHello("Akio", "strtoupper");
sayHello("Akio", "strtolower");