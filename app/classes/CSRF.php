<?php
namespace App\Classes;

/**
 * CSRF Token Generator
 * */
class CSRF {
  public static function _token() {
    
   /**
    * @return token if exists or not
    * */
    if (!Session::has('token')) {
      $token = base64_encode(openssl_random_pseudo_bytes(64));
      Session::add('token', $token);
      return $token;
    }else {
      return Session::get('token');
    }
  }

  /**
  * Check token from client
  * */
  public function checkToken($token) {
    return Session::get("token") === $token;
  }
}