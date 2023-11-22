<?php

namespace App\Classes;

class Redirect
{
    public static function redirect($page)
    {
        header("Location:" . URL_ROOT . "$page");
    }

    public static function back()
    {
        $uri = $_SERVER['REQUEST_URI'];
        header("Location:$uri");
    }
}
