FROM php:7.1-apache

COPY . /var/www/html

HEALTHCHECK --interval=5s CMD curl -f http://localhost:$(cat /etc/apache2/ports.conf | grep '^Listen' | cut -d ' ' -f 2) || exit 1
