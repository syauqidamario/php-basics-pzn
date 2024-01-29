<?php

//Global scope variable = made outside function, only accessible outside function
//$name = "Kengo";
//function sayMyName(){
//    echo $name; //error
//}

////Local scope variable = variable made inside function and is only accessible in it
//function createName(){
//    $name = "Yuuji";
//}
//
//createName();
//echo $name;

//Global scope = acessing variable outside of function
$name = "Shusuke";
function sayName(){
    global $name;
    echo "Hello $name" . PHP_EOL;
}

sayName();

// $GLOBAL variable
// $GLOBAL is a variable that is superglobal
// That means it is accessible from either scopes

$name = "Kengo";
function sayMyName(){
    echo "Hello {$GLOBALS['name']}" . PHP_EOL;
}

sayMyName();

//Static Scope
//Static scope is only accessible to a local variable

function increment(){
    static $counter = 1;
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();