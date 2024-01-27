<?php

$values = array(22, 23, 24, 25);
var_dump($values);

$names = ["Junsei", "Reiyo", "Oto"];
var_dump($names);

//Array operations
var_dump($names[0]);
$names[0] = "Rikiya";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Yasunari";
var_dump($names);
var_dump(count($names));

//Array as map
//Map = association between key & value
//Index (number) = key

$gotchard = array(
      "producer" => "Minato",
      "writer" => "Uchida & Hasegawa",
      "music_composer" => "Takaki",
      "release" => 2023
);

$geats = array(
      "producer" => "Takebe",
      "writer" => "Takahashi",
      "music_composer" => "Sahashi",
      "release" => 2022
);

//Array in an array

$donbrothers = array(
      "producer" => "Shirakura",
      "writer" => "Inoue",
      "release" => 2022,
      "directors" => [
            "main director" => "Tasaki",
            "director1" => "Nakazawa",
            "director2" => "Watanabe",
            "director3" => "Yamaguchi",
            "director4" => "Katou",
            "director5" => "Morota",
            "director6" => "Chatani"
      ]
);

var_dump($donbrothers);
