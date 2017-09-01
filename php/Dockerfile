FROM php:7.1-fpm

RUN apt-get update
RUN apt-get install -y mysql-client

VOLUME /src

RUN docker-php-ext-install pdo_mysql

WORKDIR /src
