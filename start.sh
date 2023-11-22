#!/bin/sh

composer install
php -S "localhost:${PORT}" -t public
