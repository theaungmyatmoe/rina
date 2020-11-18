<?php

/* Routtes For Web */

use App\Routing;
use App\Routing\RouterDispatcher ;

$router = new AltoRouter();

// Set Base Path Of Home Route

$router->setBasePath('/E-Commerence/public');

// method,uri,controller,route name

$router->map('GET','/','App\Controllers\IndexController@show','Home Route');

//Admin Home
$router->map('GET','/admin','App\Controllers\AdminController@index','Admin Home');

// Admin Category
$router->map('GET','/admin/category/create','App\Controllers\CategoryController@show','Category Route');
$router->map('POST','/admin/category/create','App\Controllers\CategoryController@store','Category Store');
$router->map('GET','/admin/category/[i:id]/delete','App\Controllers\CategoryController@delete','Category Delete');


new RouterDispatcher($router);