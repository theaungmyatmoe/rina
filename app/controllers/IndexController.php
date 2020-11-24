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
    $products = [];
    foreach ($post->carts as $id){
      $product = Product::where('id',$id)->first();
      array_push($products,$product);
    }
  $products = json_encode($products);
  echo $products;
  }

  function showCarts() {
    view("cart");
  }
}