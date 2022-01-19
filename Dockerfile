FROM php:7.1-apache

COPY . /var/www/html

HEALTHCHECK --interval=5s CMD curl -f http://localhost/ || exit 1
