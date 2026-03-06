# Dockerfile
FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www/html

# Install required packages and PHP extensions
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    unzip \
    git \
    nginx \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
       gd \
       mbstring \
       opcache \
       zip \
       pdo \
       pdo_pgsql \
       pgsql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Configure Opcache
RUN { \
      echo 'opcache.memory_consumption=128'; \
      echo 'opcache.interned_strings_buffer=8'; \
      echo 'opcache.max_accelerated_files=4000'; \
      echo 'opcache.revalidate_freq=2'; \
      echo 'opcache.fast_shutdown=1'; \
    } > /usr/local/etc/php/conf.d/opcache.ini

# Enable xdebug with basic config (customize as needed)
RUN { \
      echo 'xdebug.mode=debug'; \
      echo 'xdebug.start_with_request=yes'; \
      echo 'xdebug.client_host=host.docker.internal'; \
      echo 'xdebug.client_port=9003'; \
    } > /usr/local/etc/php/conf.d/xdebug.ini

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && mkdir /var/www/html/web/sites/default/files \
    && cp /var/www/html/web/sites/default/default.settings.php /var/www/html/web/sites/default/settings.php \
    && chmod a+w /var/www/html/web/sites/default/files \
    && chmod a+w /var/www/html/web/sites/default/settings.php

# Expose port
EXPOSE 9000
