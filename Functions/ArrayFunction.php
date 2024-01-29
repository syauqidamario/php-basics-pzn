<?php

$data = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

var_dump(array_map(fn($data) => $data * 2000, $data));

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));