<?php
$a = 10;
$b = $a;

function getValue()
{
    return 100;
}

$value = getValue();

$name = "Miley Cyrus";
echo $name;
$data = new DateTime();

function runApp($name)
{
    echo "Start program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End program" . PHP_EOL;
}