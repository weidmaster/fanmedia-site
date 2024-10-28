FROM php:5.5.23-apache
RUN mkdir -p "$PHP_INI_DIR/conf.d"
RUN echo "deb http://archive.debian.org/debian/ jessie main" > /etc/apt/sources.list \
    && echo "deb http://archive.debian.org/debian-security jessie/updates main" >> /etc/apt/sources.list
RUN apt-get update -y && apt-get install -y --allow-unauthenticated zlib1g-dev libjpeg62-turbo libpng-dev libjpeg-dev libmcrypt-dev
RUN docker-php-ext-install mcrypt mbstring mysqli pdo_mysql \
    && docker-php-ext-configure gd \
    --with-png-dir=/usr/lib/ \
    --with-jpeg-dir=/usr/lib/ \
    --with-gd \
    && docker-php-ext-install gd
RUN mkdir /var/lock/apache2 && mkdir /var/run/apache2
RUN a2enmod rewrite
WORKDIR /var/www/html
COPY . .
COPY "php.ini-development" "$PHP_INI_DIR/php.ini"
