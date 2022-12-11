FROM php:8.1.9-fpm

RUN apt-get update
RUN apt-get install -y git curl zip unzip vim nano htop wget mc

## COMPOSER
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/app
