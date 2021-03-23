FROM php:7.4-fpm-alpine

#================
# Base section
#================

RUN docker-php-source extract \
    && apk add --update --virtual .build-deps autoconf g++ make icu-dev \
# Installing mysql
    && docker-php-ext-install mysqli \
# Installing gettext
    && apk add gettext-dev \
    && docker-php-ext-install gettext \
# Installing opcache
    && docker-php-ext-install opcache \
# Installing intl
    && apk add icu-libs icu \
    && docker-php-ext-install intl \
# Post run
    && docker-php-source delete \
    && apk del --purge .build-deps \
    && rm -rf /tmp/pear \
    && rm -rf /var/cache/apk/*

# Use custom php.ini config
COPY php.ini $PHP_INI_DIR/conf.d/php.ini

#================
# Dev section
#================

# Xdebug
RUN docker-php-source extract \
    && apk add --update --virtual .build-deps autoconf g++ make \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
# Post run
    && docker-php-source delete \
    && apk del --purge .build-deps \
    && rm -rf /tmp/pear \
    && rm -rf /var/cache/apk/*

# Xdebug configuration
COPY xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini
