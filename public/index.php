<?php

require_once '../bootstrap/init.php';
use App\Classes\Validator;
$valid = new Validator();
var_dump($valid->maxlength(5,"id","ade"));