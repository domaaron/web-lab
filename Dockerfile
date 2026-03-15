FROM php:8.2-apache

# Install MySQL extension required for WordPress
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache rewrite module (WordPress uses this)
RUN a2enmod rewrite