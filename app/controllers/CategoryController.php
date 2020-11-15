<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;

class CategoryController extends BaseController
{
  
  public function show(){
    view('admin/category/create');
  }
  public function store(){
    $post = Request::get('post');
    var_dump(CSRF::checkToken($post->token));
    beautify($post);
  }
}

  