<?php

namespace App\Classes;
use Illuminate\Database\Capsule\Manager as DB;
/**
*
*/
class Validator
{
private $errors = [];
private $error_msgs = [
  "unique"=>"The :field must be unique",
  "number"=>"The :field must be number",
  "string"=>"The :field must be string",
  "mixed"=>"The :field must be A-Za-z",
  "mixed"=>"The :field must be mixed",
  "minLength"=>"The :field must have of :length",
  "maxLength"=>"The :field must not have of :length",
  
  ];
  /**
  * @param $table DB table name
  * @param $field DB field || column
  * @param $value DB value
  *
  */
  public function unique($table, $field, $value) {
    if (!empty($value) && !$value != null) {
      return DB::table($table)->where($field, $value)->exists();
    }
  }
  /**
  * @param $table DB table name
  * @param $field DB field || column
  * @param $value DB value
  * @return boolean
  */

  public function required($table, $field, $value) {
    return !empty($value) && $value != null? true : false;
  }

  /**
  * @param $length String Length
  * @param $field DB field || column
  * @param $value DB value
  * @return boolean
  */

  public function minLength($length, $field, $value) : bool {
    if (!empty($value) && $value != null) {
      return strlen(trim($value)) >= $length;
    }
  }

  public function maxLength($length, $field, $value) : bool {
    if (!empty($value) && $value != null) {
      return strlen(trim($value)) <= $length;
    }
  }

  public function string($length, $field, $value) : bool {
    if (!empty($value) && $value != null) {
      return preg_match("/^[A-Za-z \.]+$/", $value);
    }
    return false;
  }

  public function email($length, $field, $value) : bool {
    if (!empty($value) && $value != null) {
      return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    return false;
  }

  public function number($length, $field, $value) : bool {
    if (!empty($value) && $value != null) {
      return preg_match("/^[0-9 \.]+$/", $value);
    }
    return false;
  }
  
  public function mixed($length, $field, $value) : bool {
    if (!empty($value) && $value != null) {
      return preg_match("/^(.)+$/", $value);
    }
    return false;
  }
  
  public function setErrs($key=null,$error){
    if($key){
      $this->errors[$key] = $error;
    }else {
      $this->errors[] = $error;
    }
    
  }



}