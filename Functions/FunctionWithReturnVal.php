<?php

function minus(int $first, int $second){
    return $first - $second;
}

$sisa = minus(10, 90);
var_dump($sisa);

function getFinalValue(int $value){
    if($value >= 80){
        return "A";
    }
    else if ($value >= 70){
        return "B";
    }
    else if ($value >= 60){
        return "C";
    }
    else if ($value >= 50){
        return "D";
    }
    else {
        return "E";
    }
}