FROM php:7.4-fpm-alpine

RUN apk update
RUN apk add -U --no-cache \
    bash \
    git \
    curl-dev \
    libxml2-dev \
    postgresql-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    zip \
    libzip-dev \
    unzip \
    gmp-dev \
    oniguruma-dev
RUN docker-php-ext-install pdo_mysql mysqli mbstring
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

ENV TZ=Asia/Tokyo
RUN apk --no-cache add tzdata

WORKDIR /usr/share/nginx/html/