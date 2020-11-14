<?php

use App\Routing;
use App\Routing\RouterDispatcher ;

$router = new AltoRouter();

// Set Base Path Of Home Route

$router->setBasePath('/E-Commerence/public');

// method,uri,controller,route name

$router->map('GET','/','App\Controllers\IndexController@show','Home Route');
new RouterDispatcher($router);
