<?php

namespace App\Controllers;
use App\Classes\Request;
class CategoryController extends BaseController
{
  
  public function show(){
    view('admin/category/create');
  }
  public function store(){
    beautify(Request::all()->file);
  }
}

  