<?php

namespace App\Classes;
use Illuminate\Database\Capsule\Manager as DB;
/**
*
*/
class Validator
{

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
  * @param $length Strimg Length
  * @param $field DB field || column
  * @param $value DB value
  * @return boolean
  */

  public function minLength($length, $field, $value) : bool {
    if(!empty($value) && $value != null){
      return strlen(trim($value)) >= $length;
    }
  }
  
  public function maxLength($length, $field, $value) : bool{
    if(!empty($value) && $value != null){
      return strlen(trim($value)) <= $length;
    }
  }
  


}