FROM php:5.6-apache

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli
RUN echo "extension=pdo_mysql" >> /usr/local/etc/php/php.ini && service apache2 restart

COPY . /var/www/html/