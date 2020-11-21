<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\Redirect;
use App\Classes\Validator;
use App\Classes\Session;
class ProductController extends BaseController
{
  public function show(){
    view("admin/product/show");
  }
  public function create(){
    view("admin/product/create");
  }
}