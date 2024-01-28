<?php

$ctr = 1;

for(; $ctr <= 10;)
{
    echo "Hello for Loop : " . $ctr . PHP_EOL;
    $ctr++;
}
//Looping with condition
$ctr = 1;

for(; $ctr <= 10;)
{
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

//Looping with init statement
for($counter = 1; $counter <=20;)
{
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

//Looping with post statement
for($counter = 1; $counter <= 20; $counter++)
    {
        echo "Hello for Loop : " . $counter . PHP_EOL;
    }

for ($counter = 1; $counter <=10; $counter++):
    echo "Hello For Loop : " . $counter .PHP_EOL;
endfor;