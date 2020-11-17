<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\Validator;
use App\Classes\Session;
use App\Models\Category;
class CategoryController extends BaseController
{

  public function show() {
    $cats = Category::all();
    view('admin/category/create', compact("cats"));
  }
  public function store() {
    $post = Request::get('post');
    if (CSRF::checkToken($post->_token)) {
      // Check Rules
      $rules = [
        "name" =>
        ["string" => true,
          "unique" =>"categories"
        ]
      ];
      $valid = new Validator();
      $valid->checkData($post, $rules);
      if ($valid->hasErrors()) {
        $errors = $valid->getErrors();
        $cats = Category::all();
        view('admin/category/create', compact("cats", "errors"));
      }
    } else {
      Session::flash("error", "Session Expired!");
    }
  }
}