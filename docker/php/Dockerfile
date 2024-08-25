FROM php:8.1-fpm

# PDO
RUN docker-php-ext-install pdo pdo_mysql

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer