FROM php:8.0-fpm

#RUN apt-get update && apt-get install -y git curl libmcrypt-dev \
    #default-mysql-client libmagickwand-dev --no-install-recommends \
    #&& pecl install imagick \
    #&& docker-php-ext-enable imagick \
    #&& docker-php-ext-install mcrypt pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
