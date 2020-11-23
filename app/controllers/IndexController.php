<?php

namespace App\Controllers;
use App\Models\Product;
class IndexController extends BaseController
{
  
  public function show(){
    $products = Product::all();
    view("home",compact("products"));
  }
}