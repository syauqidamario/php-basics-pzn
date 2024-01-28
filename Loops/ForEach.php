<?php

//Regular for each
$names = ["Hotaro", "Rinne", "Supana", "Renge", "Sabi"];

foreach($names as $name){
    echo $name . PHP_EOL;
}

//For each with key
$series = [
    "title" => "Ultraman Blazar",
    "main director" => "Kiyotaka Taguchi",
    "main writer" => "Keigo Koyanagi"
];

foreach($series as $key => $value){
    echo "$key : $value" . PHP_EOL;
}