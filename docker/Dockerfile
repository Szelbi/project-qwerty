# docker build -t php-fpm-image:dev .
FROM php:8.1.9-fpm

WORKDIR /var/www/app

LABEL name="qwerty image" \
	desctiption="Docker Image for qwerty project" \
	version="0.1"

RUN apt-get update
RUN apt-get install -y git curl zip unzip vim nano htop wget mc

## COMPOSER
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

## INSTALL Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

## GIT
RUN git config --global user.email "dawidgos25@gmail.com" \
    && git config --global user.name "dgos"

## COPY FILES
RUN rm /root/.bashrc
ADD copy_files/.bashrc /root/.bashrc
ADD copy_files/.bash_aliases /root/.bash_aliases

