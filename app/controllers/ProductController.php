<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\FileHandler;
use App\Classes\Redirect;
use App\Classes\Validator;
use App\Classes\Session;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
class ProductController extends BaseController
{
  public function show() {
  list($products,$pages) = paginate(count(Product::all()),5,new Product);
  $products = json_decode(json_encode($products));
   view("admin/product/show",compact("products","pages"));
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
      "name" => ["string" => true],
      "price"=>["number"=>true]
    ];
    $valid->checkData($post, $rules);
    if ($valid->hasErrors()) {
      $errors = $valid->getErrors();
      $cats = Category::all();
      $sub_cats = SubCategory::all();
      view("admin/product/create", compact("cats", "sub_cats", "errors"));
    } else {
      if(empty($file->file->name)){
        $errors = ["Image Not Found!"];
$cats = Category::all();
      $sub_cats = SubCategory::all();
      view("admin/product/create", compact("cats", "sub_cats", "errors"));
      }else{
      $getFile = new FileHandler();
      // Move File
      $getFile->move($file);
      // Image Name
      $fileName = $getFile->getFileName();
      // iNsert iNto DB
      $product = Product::create([
        "category_id" => $post->cat_id,
        "sub_category_id" => $post->sub_cat_id,
        "name" => $post->name,
        "price" => $post->price,
        "content" => $post->content,
        "image" => $fileName
      ]);
      if ($product) {
        Session::flash("product_success","Product Created Successfully");
        Redirect::redirect("/admin/product/show");
      }
      }
    }
  }
  public function edit($id){
    $product = Product::where('id',$id)->get();
    $cats = Category::all();
    $sub_cats = SubCategory::all();
    //beautify($product);
  view("admin/product/edit", compact("cats", "sub_cats","product"));
  
  }
}