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
$router->map('POST','/admin/category/[i:id]/update','App\Controllers\CategoryController@update','Category Update');

$router->map('POST','/admin/subcategory/[i:id]/update','App\Controllers\SubCategoryController@update','SubCategory Update');
$router->map('GET','/admin/subcategory/[i:id]/delete','App\Controllers\SubCategoryController@delete','SubCategory Delete');
$router->map('POST','/admin/sub-category/create','App\Controllers\SubCategoryController@store','Sub Category Create');


new RouterDispatcher($router);