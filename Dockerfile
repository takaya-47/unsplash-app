FROM php:7.4-apache
COPY . /var/www/html/
RUN pecl install xdebug && docker-php-ext-enable xdebug