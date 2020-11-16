<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\Session;
use App\Classes\Redirect;
use App\Classes\FileHandler;
class CategoryController extends BaseController
{

  public function show() {
    view('admin/category/create');
  }
  public function store() {
    $post = Request::get('post');
    $csrf = CSRF::checkToken($post->token);
    if ($csrf) {
    
    $moveFile = new FileHandler();
    echo($moveFile->move(Request::get('file')));

    } else {
      Session::flash('errors', 'CSRF Not Found!');
      Redirect::back();
    }
  }
}