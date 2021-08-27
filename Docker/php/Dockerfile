FROM php:7.3-fpm

ENV COMPOSER_ALLOW_SUPERUSER 1
COPY php.ini /usr/local/etc/php/
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y git zip unzip vim
RUN git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \
    && docker-php-ext-install redis
RUN docker-php-ext-install pdo_mysql mysqli mbstring

WORKDIR /var/www/html
