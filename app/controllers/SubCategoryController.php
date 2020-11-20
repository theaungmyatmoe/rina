<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\Redirect;
use App\Classes\Validator;
use App\Classes\Session;
use App\Models\SubCategory;
class SubCategoryController extends BaseController
{
  public function store() {
    $post = Request::get('post');
    //beautify($post);
    if (CSRF::checkToken($post->token)) {
      // Check Rules
      $rules = [
        "name" =>
        [
          "string" => true, 
          "unique" => "sub_categories"
        ]
      ];
      $valid = new Validator();
      $valid->checkData($post, $rules);
      if ($valid->hasErrors()) {
        $errors = $valid->getErrors();
        echo json_encode($errors);
        exit;
      } else {
        $cat = SubCategory::create([
          "name" => $post->name,
          "cat_id" => $post->cat_id
        ]);
      }
    } else {
      Session::flash("error", "Session Expired!");
    }
  }

  function update() {
    $post = Request::get('post');
    if (CSRF::checkToken($post->token)) {
      $rules = [
        "name" =>
        [
          "string" => true,
          "unique" => "sub_categories"
        ]
      ];
      $valid = new Validator();
      $valid->checkData($post, $rules);
      if ($valid->hasErrors()) {
        $errors = $valid->getErrors();
        echo json_encode($errors);
        exit();
      } else {
        $cat = SubCategory::where("id", $post->id)->update([
          "name" => $post->name
        ]);
      }
    } else {
      header("HTTP/1.1 422", true, 422);
      echo "CSRF Token Miss Match Exception!";
      exit();
    }
  }

}