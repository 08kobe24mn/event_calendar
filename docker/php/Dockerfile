FROM php:8.2-fpm as php82

ENV TZ=Asia/Tokyo

# install composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# install packages
RUN apt-get update
RUN apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    vim \
    nodejs \
    npm \
    less \
    build-essential

RUN npm install n -g
RUN n stable

# install php extensions
RUN docker-php-ext-install pdo pdo_mysql
