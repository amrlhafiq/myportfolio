FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Enable Apache rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy Laravel project
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create SQLite database
RUN touch database/database.sqlite

# Install frontend dependencies and build assets
RUN npm install && npm run build

# Configure Apache to serve Laravel public directory
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

RUN sed -i 's|<Directory /var/www/>|<Directory /var/www/html/public>|' /etc/apache2/apache2.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage \
    /var/www/html/bootstrap/cache \
    /var/www/html/database

EXPOSE 80