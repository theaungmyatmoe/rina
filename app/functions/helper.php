<?php

use Philo\Blade\Blade;
use App\Classes\CSRF;
use voku\helper\Paginator;

/**
* @return Blade
* */

function view($path, $data = []) {
  $views = APP_ROOT.'/resources/views';
  $cache = APP_ROOT.'/bootstrap/cache';

  $blade = new Blade($views, $cache);
  echo $blade->view()->make($path, $data)->render();
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
  echo URL_ROOT.$url;
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

function csrf_field() {
  echo CSRF::_token();
}

/**
* Slug Gen
* */
function slug($str, $replace = [], $delimiter = '-') {
  if (!empty($replace)) {
    $str = str_replace((array)$replace, ' ', $str);
  }
  $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
  $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
  $clean = strtolower(trim($clean, '-'));
  $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
  return $clean;
}

function paginate($total,$record,$obj) {
  $pages = new Paginator($record, 'page');
  $categories = $obj->genPagi($pages->get_limit());
  $pages->set_total($total);
  $links = $pages->page_links();
  return [$categories,
    $links];
}