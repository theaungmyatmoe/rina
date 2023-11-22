<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(APP_ROOT);
$dotenv->load();
