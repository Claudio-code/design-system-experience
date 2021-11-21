FROM phpswoole/swoole:4.7-php8.0-alpine

ENV SWOOLE_HTTP_HOST 0.0.0.0
ENV SWOOLE_HTTP_PORT 80
ENV SWOOLE_HTTP_WEBSOCKET true
ENV SWOOLE_HOT_RELOAD_ENABLE true
ENV PHP_OPCACHE_ENABLE 0
ENV PHP_OPCACHE_ENABLE false

# upgrade system
RUN apk update \
    && apk upgrade \
    && pecl update-channels

# install libs
RUN apk --update add --no-cache libzip-dev libzip git bash build-base pcre-dev autoconf icu-dev postgresql-dev

RUN docker-php-ext-install intl \
    && docker-php-ext-enable intl \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pgsql pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

ENTRYPOINT ["./docker-entrypoint.sh"]
