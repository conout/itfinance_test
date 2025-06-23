FROM php:8.2-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpq-dev \
    git \
    unzip

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

# Копируем проект
WORKDIR /var/www/html
COPY ./app /var/www/html


# Настройка прав
RUN chown -R 777 /var/www/html 
