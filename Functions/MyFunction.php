<?php

//require = if the file doesn't exist, there will be error
//include = if the file doesn't exist, it would only have warning

function sayHello(string $firstName, string $lastName):string
{
    return "Hello $firstName $lastName";
}