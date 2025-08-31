FROM php:8.2-apache

COPY . /var/www/html


RUN apt-get update \
   && apt-get install -y openssl libssl-dev libcurl4-openssl-dev zip unzip\
    && pecl install mongodb \
    && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini \
    && echo "extension=mongodb.so" >> /usr/local/etc/php/php.ini \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer require mongodb/mongodb
