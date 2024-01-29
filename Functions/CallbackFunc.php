<?php
//Callback is a mechanism of a function calling another function based on what is stated in argument

function sayHi(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHi("Akio", function($name) {
    return strtoupper($name);
});

sayHi("Akio", fn($name) => strtoupper($name));

sayHi("Akio", "strtoupper");
sayHi("Akio", "strtolower");
