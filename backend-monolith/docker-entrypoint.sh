#!/bin/bash

composer install --no-interaction

php artisan swoole:http start
