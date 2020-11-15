<?php
namespace App\Classes;

/**
* @ Global Session
*/
class Session
{
  /**
  * @Session set
  * */
  public static function add($key, $value) {
    if (!self::has($key)) {
      $_SESSION[$key] = $value;
    }
  }

  /**
  * @return boolean
  * */
  public  static function has($key) {
    return isset($_SESSION[$key]) ? true : false;
  }

  /**
  * Remove Session if exists
  * */
  public static function remove($key) {
    if (isset($_SESSION[$key])) {
      unset($_SESSION[$key]);
    } else {
      echo "Session with that <b>{$key}</b>  not exists!";
    }
  }

  /**
  * @return session $value
  * */
  public static function get($key) {
    if (self::has($key)) {
      return $_SESSION[$key];
    } else {
      return NULL;
    }
  }

  /**
  * Replace session if exists
  * */
  public static function replace($key, $value) {

    // Remove session if exists
    if (self::has($key)) {
      self::remove($key);
    }
    self::add($key, $value);
  }

  /**
  * Flash Session
  * */
  public static function flash($key, $value = '') {
    if (!empty($value)) {
      self::replace($key, $value);
    } else {
      echo "<p class='alert alert-success text-white'>".self::get($key)."</p>";
      self::remove($key);
    }
  }

}