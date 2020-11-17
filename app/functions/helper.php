<?php

use Philo\Blade\Blade;
use App\Classes\CSRF;
/**
* @return Blade
* */

function view($path, $data = []) {
  $views = APP_ROOT.'/resources/views';
  $cache = APP_ROOT.'/bootstrap/cache';

  $blade = new Blade($views, $cache);
  echo $blade->view()->make($path,$data)->render();
}

/**
* @return asset->path
* */
function asset($path) {
  return URL_ROOT.'/assets/'.$path;
}

/**
* @return Route url
* */

function url($url) {
  return URL_ROOT.$url;
}


/**
* @return array
* */

function beautify($data) {
  echo '<pre>'.print_r($data, true).'</pre>';
}

/**
 * @return csrf token
 * */
 
 function csrf_field(){
   return CSRF::_token();
 }