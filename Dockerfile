FROM php:7.1-apache

COPY ./www/html /var/www/html/
COPY ./php.ini  /usr/local/etc/php/conf.d/php.ini