FROM php:7.2.2-apache

RUN docker-php-ext-install mysqli
RUN apache2ctl restart

EXPOSE 80