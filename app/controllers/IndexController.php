<?php

namespace App\Controllers;
use App\Models\Product;
use App\Classes\Request;
use App\Classes\Session;
class IndexController extends BaseController
{

  public function show() {
    $products = Product::all();
    list($products, $pages) = paginate(count($products), 5, new Product);
    $products = json_decode(json_encode($products));
    view("home", compact("products", "pages"));
  }

  // Cart Action

  function cart() {
    $post = json_decode(file_get_contents("php://input"));
    $carts = [];
    foreach ($post->carts as $id){
      $product = Product::where('id',$id)->first();
      $product->qty = 1;
      array_push($carts,$product);
    }
  $carts = json_encode($carts);
  echo $carts;
  }

  public function showCarts() {
    view("cart");
  }
  
  public function checkout(){
  $carts = json_decode(file_get_contents("php://input"));
  if($this->order($carts->carts)){
  echo  serialize($carts->carts);
  }
  }
  function order($order){
    serialize($order);
    return true;
  }
}