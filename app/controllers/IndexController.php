<?php

namespace App\Controllers;
use App\Models\Product;
class IndexController extends BaseController
{
  
  public function show(){
    $products = Product::all();
    list($products,$pages) = paginate(count($products),5,new Product);
    $products = json_decode(json_encode($products));
    view("home",compact("products","pages"));
  }
}