# docker/php/Dockerfile
FROM php:8.1-fpm

RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli


# RUN apt-get update && apt-get upgrade -y
# RUN apt-get install sudo unzip wget -y
# RUN docker-php-ext-install mysqli
 
# RUN a2enmod rewrite
# RUN a2enmod ssl
# RUN service apache2 restart