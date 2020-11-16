<?php

require_once '../bootstrap/init.php';
use App\Classes\Validator;
$valid = new Validator();
var_dump($valid->mixed(5,"id","13@#7a"));