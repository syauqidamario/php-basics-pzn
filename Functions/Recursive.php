<?php

//A function that calls other functions

function factorialLoop(int $value):int{
    $total = 1;
    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(10));

function recursiveFactorial(int $value):int{
    if($value == 2){
        return 2;
    }
    else{
        return $value * recursiveFactorial($value-1);
    }
}
var_dump(recursiveFactorial(10));
