<?php

namespace App\Routing;

use AltoRouter;

/**
 * get route from router.php
 */
class RouterDispatcher
{
    private $controller, $method, $match;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();
        if ($this->match) {
            list($controller, $method) = explode('@', $this->match['target']);

            $this->controller = $controller;
            $this->method = $method;

            if (is_callable([$this->controller, $this->method])) {
                call_user_func_array([new $this->controller, $this->method], $this->match['params']);
            } else {
                echo "$this->controller is not callable!";
            }
        } else {
            header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found!');
        }
    }
}
