<?php

namespace App\Classes;

class Request {
  /**
  * @boolean default=>false -> Object
  *  @return stdClassObj || array depend on @boolean
  * get all data from forms
  * */
  public static function all($is_array = false) {
    $result = [];
    if (isset($_GET)) $result['get'] = $_GET;
    if (isset($_POST)) $result['post'] = $_POST;
     $result['file'] = $_FILES;
    return json_decode(json_encode($result), $is_array);
  }

/**
 * @return $key is exists
 * */
 public static function get($key){
   return self::all()->$key;
 }

  /**
  * @return Boolean
  * Check key from `all method`
  * */
  public static function has($key) {
    // array_key_exists($key,self::all(true)) ? true : false;
    return isset(self::all()->$key) ? true : false;
  }


  /**
  * @return if key and value exists
  * */
  public function old($key, $value) {
    return isset(self::all()->$key->$value) ? self::all()->$key->$value : false;
  }
  /**
   * @clean  all super global variables
   * */
   public static function refresh(){
     $_GET = [];
     $_POST = [];
     $_FILES = [];
   }
}