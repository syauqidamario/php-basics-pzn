<?php

$firstName = "Koichi";
$lastName = "Takano";

$sayHelloKoichi = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $sayHelloKoichi();
