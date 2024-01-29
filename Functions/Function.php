<?php

//contoh function
function sayHello(){
    echo "Hello Function" . PHP_EOL;
}

sayHello();

//In PHP, it is free to make function anywhere, it can be in if statement, in a function etc.

//Function location

//$create = false;
//
//if($create)
//{
//    function hi()
//    {
//        echo "Hi" . PHP_EOL;
//    }
//}
//
//hi();

//Function dengan argumen
function sayHi($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Olive");
sayHello("Shoichi");

function greetings($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

greetings();
greetings("Syauqi");

//Deklarasi tipe data dalam function
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

//sum("90", "100");
sum(100, 100);
//sum(true, false);
//sum([], []);

//Variable-length argument list
//an ability to create parameters that accepts many values that will automatically make the arguments an array
//it can only be done at the last argument position

function sumAll(...$values)
{
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total " . implode("+", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
