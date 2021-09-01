FROM php:8.0.9-fpm

RUN apt-get update \
    && apt-get install --yes --no-install-recommends libpq-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql
