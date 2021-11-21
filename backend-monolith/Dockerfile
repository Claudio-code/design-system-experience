FROM php:8.0-fpm

RUN apt-get update \
    && apt-get upgrade --yes \
    && apt-get install --yes git libicu-dev zlib1g-dev libzip-dev libpcre3-dev libpq-dev

RUN docker-php-ext-install intl zip pdo pdo_pgsql \
    && docker-php-ext-configure intl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data

COPY --chown=www-data:www-data ./composer.* ./symfony.* /var/www/

WORKDIR /var/www

RUN rm -rf /var/www/html && ln -s public html

USER www-data

EXPOSE 9000

ENTRYPOINT ["./entrypoint.sh"]
