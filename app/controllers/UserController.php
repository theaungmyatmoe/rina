<?php
namespace App\Controllers;
use App\Classes\Request;
use App\Classes\CSRF;
use App\Classes\FileHandler;
use App\Classes\Redirect;
use App\Classes\Validator;
use App\Classes\Session;
use App\Models\User;
class UserController
{

  public function registerForm() {
    view('user/register');
  }
  public function register() {
    $post = Request::get('post');
    if (CSRF::checkToken($post->token)) {
      $rules = [
        "name" => ["string" => true],
        "email" => ["unique" => "users"]
      ];
      $valid = new Validator();
      $valid->checkData($post, $rules);
      if ($valid->hasErrors()) {
        $errors = $valid->getErrors();
        view('user/register', compact("errors"));
      } else {
        if ($post->password != $post->comfirm_password) {
          $errors = ["password" => "Password Not Math"];
          view('user/register', compact("errors"));
        } else {
          User::create([
            "name"=>$post->name,
            "email"=>$post->email,
            "password"=>password_hash($post->password,PASSWORD_BCRYPT)
            ]);
            Session::flash('status','Registered Successfully!');
            Redirect::redirect('/user/login');
        }
      }
    } else {
      Session::flash('status', 'Token Miss Match Exception');
      exist();
    }
  }

  public function show() {
    view('user/login');
  }


}