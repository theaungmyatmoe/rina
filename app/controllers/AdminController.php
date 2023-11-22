<?php

namespace App\Controllers;

class AdminController extends BaseController
{

    public function index()
    {
        view('admin/home');
    }
}
