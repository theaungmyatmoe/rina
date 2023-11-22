<?php

namespace App\Classes;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Database
{

    public function __construct()
    {

        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => getEnv("DB_DRIVER"),
            'host' => getEnv("DB_HOST"),
            'database' => getEnv("DB_NAME"),
            'username' => getEnv("DB_USER"),
            'password' => getEnv("DB_PASS"),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);


        $capsule->setEventDispatcher(new Dispatcher(new Container));


        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();

    }
}
