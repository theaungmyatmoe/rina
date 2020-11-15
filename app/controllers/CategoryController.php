<?php

namespace App\Controllers;

class CategoryController extends BaseController
{
  
  public function show(){
    view('admin/category/create');
  }
  public function store(){
    beautify($_POST);
    echo 'store';
  }
}