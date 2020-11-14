<?php

use Philo\Blade\Blade;

function view($path,$data=[]){
$views = APP_ROOT.'/resources/views';
$cache = APP_ROOT.'/bootstrap/cache';

$blade = new Blade($views, $cache);
echo $blade->view()->make($path)->render();
}