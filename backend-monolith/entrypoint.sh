#!/bin/sh

#On error no such file entrypoint.sh, execute in terminal - dos2unix .docker\entrypoint.sh --env=test
chmod -R 777 .

chown -R www-data:www-data .

composer install

composer dump-autoload

php-fpm