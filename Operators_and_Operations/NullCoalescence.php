<?php

//Untuk melakukan pengecekan data yang NULL/data kosong

$data = [];
$action = $data['action']??'nothing';
echo $action;