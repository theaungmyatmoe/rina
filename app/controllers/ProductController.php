<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\Redirect;
use App\Classes\Validator;
use App\Classes\Session;
use App\Models\Category;
use App\Models\SubCategory;
class ProductController extends BaseController
{
  public function show() {
    view("admin/product/show");
  }
  public function create() {
    $cats = Category::all();
    $sub_cats = SubCategory::all();
    view("admin/product/create", compact("cats", "sub_cats"));
  }
  public function store() {
    $post = Request::get('post');
    $file = Request::get('file');
    $valid = new Validator();
    $rules = [
      "name" => ["string" => true]
    ];
    $valid->checkData($post, $rules);
    if ($valid->hasErrors()) {
      $errors = $valid->getErrors();
      $cats = Category::all();
      $sub_cats = SubCategory::all();
      view("admin/product/create", compact("cats", "sub_cats", "errors"));
    }else {
      $success = "Successfully Created!";
      $cats = Category::all();
      $sub_cats = SubCategory::all();
      view("admin/product/create", compact("cats", "sub_cats", "success"));
    }
  }
}