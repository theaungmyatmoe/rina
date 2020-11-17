<?php

require_once '../bootstrap/init.php';
use App\Classes\Validator;
$valid = new Validator();

$post = [
  "name"=>"Aung",
  "age"=>17,
  "email"=>"ammgmail.com"
  ];
$rules =  [
  "name"=>["string"=>true,"minLength"=>5],
  "age"=>["number"=>true],
  "email"=>["email"=>true]
  ];
 $validator = $valid->checkData($post,$rules);
 if($valid->hasErrors()){
   beautify($valid->getErrors());
 }else {
   echo 'Good';
 }