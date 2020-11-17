<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\Session;
use App\Classes\Redirect;
use App\Models\Category;
class CategoryController extends BaseController
{

  public function show() {
    $cats = Category::all();
    view('admin/category/create', compact("cats"));
  }
  public function store() {
    beautify(Request::get('post'));
  }
}