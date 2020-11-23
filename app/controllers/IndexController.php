<?php

namespace App\Controllers;
use App\Models\Product;
use App\Classes\Request;
use App\Classes\Session;
class IndexController extends BaseController
{
  
  public function show(){
    $products = Product::all();
    list($products,$pages) = paginate(count($products),5,new Product);
    $products = json_decode(json_encode($products));
    view("home",compact("products","pages"));
  }
  function cart(){
    $post = Request::get('post');
     $ary = explode(',',$post->carts);
    // beautify($ary);
   Session::replace("carts",$ary);
  }
  function showCarts(){
    $carts = Session::get('carts');
    $items = [];
    foreach ($carts as $cart){
     $product = Product::where("id",$cart)->first();
     array_push($items,$product);
    }
    $items = json_decode(json_encode($items));
   // beautify($items);
    view("cart",compact("items"));
  }
}