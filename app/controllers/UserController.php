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

    public function registerForm()
    {
        view('user/register');
    }

    public function register()
    {
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
                        "name" => $post->name,
                        "email" => $post->email,
                        "password" => password_hash($post->password, PASSWORD_BCRYPT)
                    ]);
                    Session::flash('status', 'Registered Successfully!');
                    Redirect::redirect('/user/login');
                }
            }
        } else {
            Session::flash('status', 'Token Miss Match Exception');
            exist();
        }
    }

    public function show()
    {
        view('user/login');
    }

    public function login()
    {
        $post = Request::get('post');
        //beautify($post);
        if (CSRF::checkToken($post->token)) {
            $rules = [
                "email" => ["email" => true]];
            $valid = new Validator();
            $valid->checkData($post, $rules);
            if ($valid->hasErrors()) {
                $errors = $valid->getErrors();
                view('user.login', compact("errors"));
            } else {
                if (empty($post->password)) {
                    $errors = ["password" => "Password Should Have At Least 6 Chacters"];
                    view('user.login', compact("errors"));
                } else {
                    $user = User::where('email', $post->email)->first();
                    $checkHas = password_verify($post->password, $user->password) ?? false;
                    if ($checkHas) {
                        Session::add('user_id', $user->id);
                        Redirect::redirect('/cart/show');
                    } else {
                        $errors = ["auth" => "Email and Password Not Match!"];
                        view('user.login', compact("errors"));
                    }
                }
            }
        } else {
            Session::flash('status', "CSRF Token Miss");
        }

    }

    public function logout()
    {
        Session::remove('user_id');
        Redirect::redirect('/');
    }
}
