<?php
//Nameless function
//Other name is "Closure
//Can be used as an argument or as a variable value

$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Hirochika");
$sayHello("Muraishi");

//Anonymous function as argument
function sayByeBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Farewell $finalName" . PHP_EOL;
}

sayByeBye("Hirochika", function (string $name){
    return strtoupper($name);
});

//Accessing variable outside of closure
//It will not be able to access variables outside of function

$firstName = "Toshihiro";
$lastName = "Iijima";

$sayHelloToshi = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloToshi();