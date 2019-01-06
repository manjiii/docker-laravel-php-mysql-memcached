FROM php:7.1-apache

# lib
RUN docker-php-ext-install mysqli pdo_mysql
RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev
RUN pecl install xdebug memcached
RUN docker-php-ext-enable xdebug memcached
RUN a2enmod rewrite

# conf files
RUN mkdir -p /etc/apache2/added_conf
RUN echo "" >> /etc/apache2/apache2.conf \
    && echo "# Include the configurations from the host machine" >> /etc/apache2/apache2.conf \
    && echo "IncludeOptional added_conf/*.conf" >> /etc/apache2/apache2.conf

COPY apache_conf /etc/apache2/added_conf
COPY conf/my-php.ini /usr/local/etc/php/conf.d/