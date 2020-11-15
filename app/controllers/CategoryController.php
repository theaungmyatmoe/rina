<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\Session;
use App\Classes\Redirect;
class CategoryController extends BaseController
{

  public function show() {
    view('admin/category/create');
  }
  public function store() {
    $post = Request::get('post');
    $csrf = CSRF::checkToken($post->token);
    if ($csrf) {
      echo 1;
    } else {
      Session::flash('errors','CSRF Not Found!');
      Redirect::back();
    }
  }
}